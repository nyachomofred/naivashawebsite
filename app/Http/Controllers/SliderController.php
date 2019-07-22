<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use DB;
use DateTime;
use Auth;
class SliderController extends Controller
{
    



public function sliders(){

    $users = DB::table('slidemanager')->paginate(5);
    return view('admin.viewSliders',['users'=>$users]);

 }


public function editSlider(Request $request){

$id=$request->input('id');  

if ($id==1) {

  $users = DB::select("SELECT* FROM homeslider");
  return view('admin.homeslider',['users'=>$users]);

}else{
      return redirect('/sliders');

 }
}





public function createHomeSlider1(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


$picture=$request->input('picture');
$title=$request->input('title');
$content=$request->input('content');
$updated_at=date('Y-m-d H:i:s');


          //uploading image to public/uploads  folder
 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/sliders', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();

//inserting into homeslider table
  DB::table('homeslider')->insert([[
    'title' => $title,
    'content' => $content,
    'url' => $url
        ]]);  

//updating slidemanager table
DB::update("UPDATE slidemanager SET updated_at = ? WHERE id = ?",[$updated_at,1]);

    //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="created home slider";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]); 


return redirect('/sliders')->with('response','Home slider successfully created');

}

}


public function deleteHomeSlider(Request $request){
$id=$request->input('id');
$updated_at=date('Y-m-d H:i:s');
DB::delete('DELETE FROM homeslider WHERE id = ?',[$id]);
DB::update("UPDATE slidemanager SET updated_at = ? WHERE id = ?",[$updated_at,1]);

    //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Deleted home slider";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]); 
return redirect('/sliders')->with('response','slider successfully deleted');

}




public function editHomeSlider(Request $request){
$id=$request->input('id');

  $users = DB::select("SELECT* FROM homeslider WHERE id=$id");
  return view('admin.editHomeSlider',['users'=>$users]);

}




public function updateSliderImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=Auth::user()->id;    
 $page_id=$request->input('page_id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/sliders', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE homeslider SET  url  = ? WHERE id = ?",[$url,$page_id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated home slider ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


  $users = DB::select("SELECT* FROM homeslider WHERE id=$id");
  return view('admin.editHomeSlider',['users'=>$users]);

}
}


public function updateHomeSlider(Request $request){

$id=$request->input('id');
$title=$request->input('title');
$content=$request->input('content');
$updated_at=date('Y-m-d H:i:s');

  DB::update("UPDATE homeslider SET
   title = ?,
   content = ?   
    WHERE id = ?",
    [$title,$content,$id]);
  DB::update("UPDATE slidemanager SET updated_at = ? WHERE id = ?",[$updated_at,1]);
  //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated sliders";
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $updated_at
        ]]);  


  return redirect('/sliders')->with('success','Slider successfully updatjjjjed');




}









}
