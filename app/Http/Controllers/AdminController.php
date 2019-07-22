<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\User;
use DB;
use DateTime;
use Auth;

class AdminController extends Controller
{



public function newRedirect(){

    return view('admin.newUser');
 }

public function welcomeMessage(){

$users = DB::select("SELECT *FROM welcome");

    return view('admin.newUserWelcome',['users'=>$users]);
 }





public function admin(){

      //recording activity log
    if(empty(Auth::user()->log)){
    $userName=Auth::user()->name;
    $user_id=Auth::user()->id;
    $email=Auth::user()->email;
    $activity="Logged in";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]); 
  DB::update("UPDATE users SET log = ? WHERE id = ?",[1,$user_id]);
  }

    $users = DB::table('users')->orderBy('created_at', 'desc')->paginate(5);
    $pages = DB::table("pages")->count();
    $registered = DB::table("users")->count();
    $active = User::where('log','=','1')->count();
    $events = DB::table("myevents")->count();
    $infomation =array("$pages", "$registered", "$events", "$active");


    return view('admin.home',['users'=>$users],['infomation'=>$infomation]);
 }



public function pages(){

    $users = DB::table('pages')->paginate(5);
    return view('admin.pages',['users'=>$users]);

 }



public function editPage(Request $request){

$key=$request->input('key');

if ($key=="home") {

    $pages = DB::select("SELECT *FROM home"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=1"); 
    return view('admin.editHome',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="discipline") {

    $pages = DB::select("SELECT *FROM about_us"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=2"); 
    return view('admin.editDiscipline',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="school-anthem") {

    $pages = DB::select("SELECT *FROM anthem"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=3"); 
    return view('admin.editAnthem',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="academics") {

    $pages = DB::select("SELECT *FROM academics"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=4"); 
    return view('admin.editAcademics',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="science") {

    $pages = DB::select("SELECT *FROM science"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=5"); 
    return view('admin.editScience',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="mathematics") {

    $pages = DB::select("SELECT *FROM mathematics"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=6"); 
    return view('admin.editMathematics',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="technical-and-applied") {

    $pages = DB::select("SELECT *FROM technical"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=7"); 
    return view('admin.editTechnical',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="humanities") {

    $pages = DB::select("SELECT *FROM humanities"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=8"); 
    return view('admin.editHumanities',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="english") {

    $pages = DB::select("SELECT *FROM english"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=9"); 
    return view('admin.editEnglish',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="kiswahili") {

    $pages = DB::select("SELECT *FROM kiswahili"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=10"); 
    return view('admin.editKiswahili',['pages'=>$pages],['keys'=>$keys]);
}

if ($key=="examinations") {

    $pages = DB::select("SELECT *FROM examinations"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=11"); 
    return view('admin.editExaminations',['pages'=>$pages],['keys'=>$keys]);

}


if ($key=="guidance-and-counselling") {

    $pages = DB::select("SELECT *FROM guidance"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=12"); 
    return view('admin.editGuidance',['pages'=>$pages],['keys'=>$keys]);

}

if ($key=="history") {

    $pages = DB::select("SELECT *FROM history"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=13"); 
    return view('admin.editHistory',['pages'=>$pages],['keys'=>$keys]);

}


if ($key=="co-curriculum-activities") {

    $pages = DB::select("SELECT *FROM cocurriculor"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=14"); 
    return view('admin.editCocurriculor',['pages'=>$pages],['keys'=>$keys]);

}else{
      return redirect('/pages');
}

 }



public function searchPage(Request $request){

$search=$request->input('search');

if($search!=''){
$users = DB::table('pages')->where('name', 'LIKE', '%'.$search.'%')->paginate();

if(count($users)>0){

  return view('admin.pages',['users'=>$users]);

 }else{

    return redirect('/pages')->with('response','Page not found');
 }
}
    return redirect('/pages');

}



public function updateHome(Request $request){

$id=$request->input('id');
$mission_statement=$request->input('mission_statement');
$motto=$request->input('motto');
$vission=$request->input('vission');
$stem_vision=$request->input('stem_vision');
$bg_text=$request->input('bg_text');
$school_values=$request->input('school_values');
$general_statement=$request->input('general_statement');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE home SET
   mission_statement = ?,
   motto = ?,
   vission = ?,
   stem_vision = ?,
   bg_text = ?,
   school_values = ?,
   general_statement = ?   
    WHERE id = ?",
    [$mission_statement,$motto,$vission,$stem_vision,$bg_text,$school_values,$general_statement,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,1]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated home page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');




}



public function updateBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/discipline', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE about_us SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated discipline page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM about_us"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=2"); 
    return view('admin.editDiscipline',['pages'=>$pages],['keys'=>$keys]);

}
}



public function updateDisciplineImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/discipline', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE about_us SET disp_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated discipline page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM about_us"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=2"); 
    return view('admin.editDiscipline',['pages'=>$pages],['keys'=>$keys]);

}
}



public function updateTraditionImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/discipline', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE about_us SET tradition_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated discipline page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM about_us"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=2"); 
    return view('admin.editDiscipline',['pages'=>$pages],['keys'=>$keys]);

}
}




public function updateDiscipline(Request $request){

$id=$request->input('id');
$transparency=$request->input('transparency');
$obedience=$request->input('obedience');
$accuracy=$request->input('accuracy');
$fairness=$request->input('fairness');
$ability=$request->input('ability');
$patriotism=$request->input('patriotism');
$togetherness=$request->input('togetherness');
$courtesy=$request->input('courtesy');
$discipline=$request->input('discipline');
$tradition=$request->input('tradition');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE about_us SET
   transparency = ?,
   obedience = ?,
   accuracy = ?,
   fairness = ?,
   ability = ?,
   patriotism = ?,
   togetherness = ?,
   courtesy = ?,
   discipline = ?,
   tradition = ?  
    WHERE id = ?",
    [$transparency,$obedience,$accuracy,$fairness,$ability,$patriotism,$togetherness,$courtesy,$discipline,
    	$tradition,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,1]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated discipline page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');




}



public function updateAnthemBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/anthem', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE anthem SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated anthem page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM anthem"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=3"); 
    return view('admin.editAnthem',['pages'=>$pages],['keys'=>$keys]);

}
}




public function updateAnthemImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/anthem', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE anthem SET image1  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated anthem page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM anthem"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=3"); 
    return view('admin.editAnthem',['pages'=>$pages],['keys'=>$keys]);

}
}


public function updateAnthem(Request $request){

$id=$request->input('id');
$verse1=$request->input('verse1');
$chorus=$request->input('chorus');
$verse2=$request->input('verse2');
$verse3=$request->input('verse3');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE anthem SET
   verse1 = ?,
   chorus = ?,
   verse2 = ?,
   verse3 = ?   
    WHERE id = ?",
    [$verse1,$chorus,$verse2,$verse3,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,3]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated home page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');




}



public function updateAcademicBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/academics', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE academics SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated academics page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM academics"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=4"); 
    return view('admin.editAcademics',['pages'=>$pages],['keys'=>$keys]);

}
}



public function updateSubjectsImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/academics', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE academics SET image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated academics page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM academics"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=4"); 
    return view('admin.editAcademics',['pages'=>$pages],['keys'=>$keys]);

}
}



public function updateAcademics(Request $request){

$id=$request->input('id');
$content=$request->input('content');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE academics SET
   content = ?  
    WHERE id = ?",
    [$content,$id]);

  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,4]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated academics page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');




}



public function updateScienceBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/sciences', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE science SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated science page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM science"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=5"); 
    return view('admin.editScience',['pages'=>$pages],['keys'=>$keys]);

}
}




public function updateScienceImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/sciences', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE science SET hod_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated science page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM science"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=5"); 
    return view('admin.editScience',['pages'=>$pages],['keys'=>$keys]);

}
}



public function updateScience(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE science SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,5]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated science page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');




}




public function updateMathematicsBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/mathemathics', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE mathematics SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated mathematics page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM mathematics"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=7"); 
    return view('admin.editMathematics',['pages'=>$pages],['keys'=>$keys]);

}
}




public function updateMathematicsImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/mathemathics', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE mathematics SET hod_pic = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated mathematics page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM mathematics"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=7"); 
    return view('admin.editMathematics',['pages'=>$pages],['keys'=>$keys]);

}
}



public function updateMathematics(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE mathematics SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,6]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated mathematics page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');

}






public function updateTechnicalBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/technical', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE technical SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated technical page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM technical"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=7"); 
    return view('admin.editTechnical',['pages'=>$pages],['keys'=>$keys]);
}
}


public function updateTechnicalImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/technical', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE technical SET hod_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated technical page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM technical"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=7"); 
    return view('admin.editTechnical',['pages'=>$pages],['keys'=>$keys]);
}
}


public function updateTechnical(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE technical SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,7]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated technical page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');

}




public function updateHumanitiesBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/humanities', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE humanities SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated humanities page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM humanities"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=8"); 
    return view('admin.editHumanities',['pages'=>$pages],['keys'=>$keys]);
}
}



public function updateHumanitiesImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/humanities', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE humanities SET hod_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated humanities page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM humanities"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=8"); 
    return view('admin.editHumanities',['pages'=>$pages],['keys'=>$keys]);
}
}



public function updateHumanities(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE humanities SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,8]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated humanities page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');

}



public function updateEnglishBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/english', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE english SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated english page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM english"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=9"); 
    return view('admin.editEnglish',['pages'=>$pages],['keys'=>$keys]);

}
}




public function updateEnglishImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/english', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE english SET hod_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated english page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM english"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=9"); 
    return view('admin.editEnglish',['pages'=>$pages],['keys'=>$keys]);

}
}



public function updateEnglish(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE english SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,9]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated english page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');

}



public function updateKiswahiliBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/kiswahili', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE kiswahili SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated kiswahili page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM kiswahili"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=10"); 
    return view('admin.editKiswahili',['pages'=>$pages],['keys'=>$keys]);
}
}


public function updateKiswahiliImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/kiswahili', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE kiswahili SET hod_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated kiswahili page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM kiswahili"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=10"); 
    return view('admin.editKiswahili',['pages'=>$pages],['keys'=>$keys]);
}
}

public function updateKiswahili(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE kiswahili SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,10]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated english page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');

}




public function updateExaminationsBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/examinations', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE examinations SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated examinations page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM examinations"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=11"); 
    return view('admin.editExaminations',['pages'=>$pages],['keys'=>$keys]);
}
}



public function updateExaminationsImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/examinations', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE examinations SET hod_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated examinations page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM examinations"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=11"); 
    return view('admin.editExaminations',['pages'=>$pages],['keys'=>$keys]);
}
}


public function updateExaminations(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE examinations SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,10]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated examinations page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');

}



public function updateGuidanceBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/guidance', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE guidance SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated guidance page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM guidance"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=12"); 
    return view('admin.editGuidance',['pages'=>$pages],['keys'=>$keys]);
}
}



public function updateGuidanceImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/guidance', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE guidance SET hod_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated guidance page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM guidance"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=12"); 
    return view('admin.editGuidance',['pages'=>$pages],['keys'=>$keys]);
}
}




public function updateGuidance(Request $request){

$id=$request->input('id');
$hod_name=$request->input('hod_name');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE guidance SET
   hod_name = ?,    
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$hod_name,$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,12]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated guidance page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');
}



public function updateHistoryBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/history', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE history SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated history page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM history"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=13"); 
    return view('admin.editHistory',['pages'=>$pages],['keys'=>$keys]);
}
}




public function updateHistoryImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/history', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE history SET school_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated history page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM history"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=13"); 
    return view('admin.editHistory',['pages'=>$pages],['keys'=>$keys]);
}
}





public function updateHistoryImage1(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/history', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE history SET history_pic  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated history page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



    $pages = DB::select("SELECT *FROM history"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=13"); 
    return view('admin.editHistory',['pages'=>$pages],['keys'=>$keys]);
}
}



public function updateHistory(Request $request){

$id=$request->input('id');
$bg_text=$request->input('bg_text');
$brief_intro=$request->input('brief_intro');
$intro_text=$request->input('intro_text');
$school=$request->input('school');
$history=$request->input('history');
$performance=$request->input('performance');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE history SET
   bg_text = ?,    
   brief_intro = ?,
   intro_text = ?,  
   school = ?,    
   history = ?,
   performance = ?  
    WHERE id = ?",
    [$bg_text,$brief_intro,$intro_text,$school,$history,$performance,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,13]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated history page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');
}



public function updateCocurriculorBackgroundImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/cocurriculor', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE cocurriculor SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated cocurriculor page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


    $pages = DB::select("SELECT *FROM cocurriculor"); 
    $keys =DB::select("SELECT *FROM pages WHERE id=14"); 
    return view('admin.editCocurriculor',['pages'=>$pages],['keys'=>$keys]);
}
}




public function updateCocuriculor(Request $request){

$id=$request->input('id');
$brief_desc=$request->input('brief_desc');
$more_about_dep=$request->input('more_about_dep');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE cocurriculor SET   
   brief_desc = ?,
   more_about_dep = ?  
    WHERE id = ?",
    [$brief_desc,$more_about_dep,$id]);
  DB::update("UPDATE pages SET updated_at = ? WHERE id = ?",[$updated_at,14]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated cocurriculor page";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/pages')->with('success','Page successfully updated');
}





public function logout(Request $request){

    //recording activity log
    $user_id=Auth::user()->id;
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Logged out";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]); 
 DB::update("UPDATE users SET log = ? WHERE id = ?",[NULL,$user_id]); 
return redirect('/logout1');

}





}