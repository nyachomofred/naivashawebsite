<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\User;
use App\Subclub;
use App\Team;
use App\Message;
use App\Partner;
use App\Garlaryimage;
use DB;
use DateTime;
use Auth;

class ContentController extends Controller
{
    

public function adminClubs(){

    $users = DB::table('clubs')->paginate(5);
    return view('admin.listClubs',['users'=>$users]);

 }


public function editClub(Request $request){

$club_id=$request->input('id');

if ($club_id==1) {

    $users = DB::select("SELECT *FROM subclubs WHERE club_id=$club_id"); 
    return view('admin.clubsA',['users'=>$users]);
}

if ($club_id==2) {

    $users = DB::select("SELECT *FROM subclubs WHERE club_id=$club_id"); 
    return view('admin.clubsB',['users'=>$users]);
}

if ($club_id==3) {

    $users = DB::select("SELECT *FROM subclubs WHERE club_id=$club_id"); 
    return view('admin.clubsC',['users'=>$users]);
}
if ($club_id==4) {

    $users = DB::select("SELECT *FROM subclubs WHERE club_id=$club_id"); 
    return view('admin.clubsD',['users'=>$users]);
}

if ($club_id==5) {

    $users = DB::select("SELECT *FROM subclubs WHERE club_id=$club_id"); 
    return view('admin.societies',['users'=>$users]);
}
else{
	return redirect('/adminClubs');
}


 }





public function createClubs(Request $request){
$club_id=$request->input('id');
$name=$request->input('name');

$club = new Subclub;
$club->club_id=$club_id;
$club->content=$name;
$club->save();

  return redirect('/adminClubs')->with('success','Club sucessfully created');
 }



public function deleteClubs(Request $request){
$club_id=$request->input('id');
Subclub::where('id',$club_id)->delete();
  return redirect('/adminClubs')->with('success','Club sucessfully deleted');
 }


public function editClubs(Request $request){
$club_id=$request->input('id');
$users = DB::select("SELECT *FROM subclubs WHERE id=$club_id"); 
return view('admin.editClubs',['users'=>$users]);
 }



public function editClubs1(Request $request){
$club_id=$request->input('id');
$name=$request->input('name');
 
 DB::update("UPDATE subclubs SET content = ? WHERE id = ?",[$name,$club_id]);
  return redirect('/adminClubs')->with('success','Club sucessfully Upated');
 }



public function adminTeams(Request $request){
$club_id=$request->input('id');
$users = DB::select("SELECT *FROM teams"); 
return view('admin.adminTeams',['users'=>$users]);
 }



public function createTeam1(Request $request){
 //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);



  $id=Auth::user()->id;
  $title=$request->input('title');
  $category=$request->input('category');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/cocurriculor', $file->getClientOriginalName());
  $url= $file->getClientOriginalName();


	$team = new Team;
	$team->title=$title;
	$team->category =$category;
	$team->image =$url;	
	$team->save();


//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Created a team ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/adminTeams')->with('response','Team successfully created');

}

}



public function editTeam(Request $request){
$team_id=$request->input('id');
$users = DB::select("SELECT *FROM teams WHERE id=$team_id"); 
return view('admin.editTeam',['users'=>$users]);
 }




public function updateTeamImage(Request $request){
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


DB::update("UPDATE teams SET image  = ? WHERE id = ?",[$url,$page_id]);

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


$users = DB::select("SELECT *FROM teams WHERE id=$page_id"); 
return view('admin.editTeam',['users'=>$users]);
}
}


public function updateTeam(Request $request){

$id=$request->input('id');
$title=$request->input('title');
$category=$request->input('category');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE teams SET
   title = ?,
   category = ?   
    WHERE id = ?",
    [$title,$category,$id]);

  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated Team";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/adminTeams')->with('success','Team successfully updated');


}

public function deleteTeam(Request $request){
$team_id=$request->input('id');
Team::where('id',$team_id)->delete();
  return redirect('/adminTeams')->with('success','Team sucessfully deleted');
 }


public function partnerUniversies(){

    $users = DB::table('partners')->paginate(5);
    return view('admin.partnerUniversies',['users'=>$users]);

 }



public function createPartner1(Request $request){
 //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);



  $id=Auth::user()->id;
  $name=$request->input('name');
  $phone=$request->input('phone');
  $descritpion=$request->input('descritpion');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/partners', $file->getClientOriginalName());
  $url= $file->getClientOriginalName();


	$partner = new Partner;
	$partner->name=$name;
	$partner->phone =$phone;
	$partner->descritpion =$descritpion;	
	$partner->image =$url;	
	$partner->save();


//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Created a partner ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/partnerUniversies')->with('response','Partner successfully created');

}

}


public function editPartner(Request $request){
$team_id=$request->input('id');
$users = DB::select("SELECT *FROM partners WHERE id=$team_id"); 
return view('admin.editPartner',['users'=>$users]);
 }



public function updatePartnerImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/partners', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE partners SET image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated partners";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


$users = DB::select("SELECT *FROM partners WHERE id=$page_id"); 
return view('admin.editPartner',['users'=>$users]);
}
}



public function updatePartner(Request $request){

$id=$request->input('id');
$name=$request->input('name');
$phone=$request->input('phone');
$descritpion=$request->input('descritpion');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE partners SET
   name = ?,
   phone = ?, 
   descritpion = ?      
    WHERE id = ?",
    [$name,$phone,$descritpion,$id]);

  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated partner university";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/partnerUniversies')->with('success','Partner successfully updated');


}



public function deletePartner(Request $request){
$partner_id=$request->input('id');
Partner::where('id',$partner_id)->delete();
  return redirect('/partnerUniversies')->with('success','Partner sucessfully deleted');
 }



public function adminGalary(Request $request){

$users = DB::select("SELECT *FROM galary"); 
$images = DB::table('garlaryimages')->orderBy('created_at', 'desc')->paginate(3); 
return view('admin.adminGalary',['users'=>$users],['images'=>$images]);
 }



public function updateGalBackImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/galary', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE galary SET bg_image  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated galary";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/adminGalary');
}
}



public function addGalaryImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);

 
 $text=$request->input('text');


 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/galary', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();

$image = new Garlaryimage;
$image->text=$text;
$image->image=$url;
$image->save();


//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="added an image to galary";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/adminGalary');
}
}


public function deleteGalaryImage(Request $request){
$id=$request->input('id');
Garlaryimage::where('id',$id)->delete();
  return redirect('/adminGalary')->with('success','Image sucessfully deleted');
 }




public function messages(){

$number = Message::where('status','=',NULL)->count();
$queries = DB::table('messages')->orderBy('created_at', 'desc')->paginate(5); 
return view('admin.messages',['queries'=>$queries],['number'=>$number]);
 }




public function searchMessage(Request $request){
  $search=$request->input('search');

if($search!=''){



$queries = DB::table('messages')->where('name', 'LIKE', '%'.$search.'%')
                                ->orWhere('email', 'LIKE', '%'.$search.'%')
                                ->orWhere('phone', 'LIKE', '%'.$search.'%')
                                ->orWhere('message', 'LIKE', '%'.$search.'%')
                                ->orWhere('created_at', 'LIKE', '%'.$search.'%')->paginate();

if(count($queries)>0){
$number = Message::where('status','=',NULL)->count();
  return view('admin.messages',['queries'=>$queries],['number'=>$number]);
}

return redirect('/messages')->with('response','No results found');


}
return redirect('/messages');
}


public function resetPassword(){

    $users = DB::table('users')->paginate(5);
    return view('admin.resetPassword',['users'=>$users]);

 }


public function ReadMessage(Request $request){

$id=$request->input('id');
DB::update("UPDATE messages SET status = ? WHERE id = ?",[1,$id]);
$users = DB::select("SELECT *FROM messages WHERE id=$id");
return view('admin.ReadMessage',['users'=>$users]);
 
 }





public function deleteMessage($id){
DB::delete('DELETE FROM messages WHERE id = ?',[$id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="deleted a message";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/messages')->with('response','Message successfully deleted');
}



































}
