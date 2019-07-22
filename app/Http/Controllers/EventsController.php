<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\User;
use DB;
use App\Myevent;
use Auth;
use App\Eventsimage;
class EventsController extends Controller
{
   

public function adminEvents(){

$users = DB::table('myevents')->orderBy("created_at","asc")->paginate(5);
return view('admin.events',['users'=>$users]);

}



public function searchEvent(Request $request){
  $search=$request->input('search');

if($search!=''){



$users = DB::table('myevents')->where('title', 'LIKE', '%'.$search.'%')->paginate();

if(count($users)>0){
  return view('admin.events',['users'=>$users]);
}

return redirect('/adminEvents')->with('response','No results found');


}
return redirect('/adminEvents');
}





public function createNewEvent(Request $request){
 //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);



  $id=Auth::user()->id;
  $name=$request->input('name');
  $startdate=$request->input('startdate');
  $starttime=$request->input('starttime');  
  $location=$request->input('location');  
  $enddate=$request->input('enddate');  
  $endtime=$request->input('endtime');  
  $description=$request->input('description');



 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/events', $file->getClientOriginalName());
  $url= $file->getClientOriginalName();


	$event = new Myevent;
	$event->title=$name;
	$event->image=$url;
	$event->startDate=$startdate;
	$event->endDate=$enddate;
	$event->starttime=$starttime;
	$event->endtime=$endtime;
	$event->description =$description;
	$event->location =$location;
	$event->save();


//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Created an event ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/adminEvents')->with('response','Event successfully created');

}

}




public function deleteEvent(Request $request){

$id=$request->input('id');
DB::delete('DELETE FROM myevents WHERE id = ?',[$id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="deleted an event";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/adminEvents')->with('response','Event successfully deleted');

}




public function editEvent(Request $request){

$id=$request->input('id');

$users = DB::select("SELECT *FROM myevents WHERE id=$id");
$pictures = DB::select("SELECT *FROM eventsimages WHERE event_id=$id");
return view('admin.editEvent',['users'=>$users],['pictures'=>$pictures]);

}




public function updateEvent(Request $request){

  $id=Auth::user()->id;
  $eventId=$request->input('id');  
  $name=$request->input('name');
  $startdate=$request->input('startdate');
  $starttime=$request->input('starttime');  
  $location=$request->input('location');  
  $enddate=$request->input('enddate');  
  $endtime=$request->input('endtime');  
  $description=$request->input('description');

$event = Myevent::find($eventId);
$event->title=$name;
$event->startDate=$startdate;
$event->endDate=$enddate;
$event->starttime=$starttime;
$event->endtime=$endtime;
$event->description =$description;
$event->location =$location;
$event->save();





//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated an event ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/adminEvents')->with('response','Event successfully updated');


}











public function deleteEventImage(Request $request){

  $id=Auth::user()->id;
  $eventId=$request->input('id');


$event = Myevent::find($eventId);
$event->image=NULL;
$event->save();


//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="deleted event image";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


$users = DB::select("SELECT *FROM myevents WHERE id=$eventId");
$pictures = DB::select("SELECT *FROM eventsimages WHERE event_id=$eventId");
return view('admin.editEvent',['users'=>$users],['pictures'=>$pictures]);

}





public function upateEventImage(Request $request){
 //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);



  $id=Auth::user()->id;
  $eventId=$request->input('id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/events', $file->getClientOriginalName());
  $url= $file->getClientOriginalName();



$event = Myevent::find($eventId);
$event->image=$url;
$event->save();




//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated event image";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



$users = DB::select("SELECT *FROM myevents WHERE id=$eventId");
$pictures = DB::select("SELECT *FROM eventsimages WHERE event_id=$eventId");
return view('admin.editEvent',['users'=>$users],['pictures'=>$pictures]);

}

}





public function deleteEventImage1(Request $request){

  $id=Auth::user()->id;
  $eventId=$request->input('eventId');
  $pictureId=$request->input('pictureId');

$event = Eventsimage::find($pictureId);
$event->delete();


//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="deleted event image";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


$users = DB::select("SELECT *FROM myevents WHERE id=$eventId");
$pictures = DB::select("SELECT *FROM eventsimages WHERE event_id=$eventId");
return view('admin.editEvent',['users'=>$users],['pictures'=>$pictures]);

}




public function addEventImage(Request $request){
 //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);



  $id=Auth::user()->id;
  $eventId=$request->input('id');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/events', $file->getClientOriginalName());
  $url= $file->getClientOriginalName();


  $event = new Eventsimage;
  $event->event_id=$eventId;  
  $event->image=$url;
  $event->save();

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated event image";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  



$users = DB::select("SELECT *FROM myevents WHERE id=$eventId");
$pictures = DB::select("SELECT *FROM eventsimages WHERE event_id=$eventId");
return view('admin.editEvent',['users'=>$users],['pictures'=>$pictures]);

}

}
















}
