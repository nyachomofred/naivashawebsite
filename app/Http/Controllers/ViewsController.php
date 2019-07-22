<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use Myevent;
use App\Message;

class ViewsController extends Controller
{
   
  public function welcome(){

    $users = DB::select("SELECT *FROM basics");
    $sliders = DB::select("SELECT *FROM homeslider");
    $pages = DB::select("SELECT *FROM home");
    $pricipal = DB::select("SELECT *FROM staffinformation WHERE id=1");
    $deputy = DB::select("SELECT *FROM staffinformation WHERE id=2");
    $events=$events = DB::table("myevents")->count();        
    return view('welcome', compact('users','sliders','pages','pricipal','deputy','events'));

  }

  public function discipline(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM about_us");  
    $events=$events = DB::table("myevents")->count();      
    return view('discipline', compact('users','pages','events'));

  }


  public function anthem(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM anthem");  
    $events=$events = DB::table("myevents")->count();      
    return view('anthem', compact('users','pages','events'));

  }


  public function academics(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM academics");  
    $events=$events = DB::table("myevents")->count();      
    return view('academics', compact('users','pages','events'));

  }

  public function science(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM science");        
    $events=$events = DB::table("myevents")->count();      
    return view('science', compact('users','pages','events'));

  } 


  public function mathematics(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM mathematics");        
    $events=$events = DB::table("myevents")->count();      
    return view('mathematics', compact('users','pages','events'));

  }


  public function technical(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM technical");        
    $events=$events = DB::table("myevents")->count();      
    return view('technical', compact('users','pages','events'));
  }


  public function humanities(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM humanities");        
    $events=$events = DB::table("myevents")->count();      
    return view('humanities', compact('users','pages','events'));

  }


  public function english(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM english");        
    $events=$events = DB::table("myevents")->count();      
    return view('english', compact('users','pages','events'));

  }



  public function kiswahili(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM kiswahili");        
    $events=$events = DB::table("myevents")->count();      
    return view('kiswahili', compact('users','pages','events'));

  }


  public function examinations(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM examinations");        
    $events=$events = DB::table("myevents")->count();      
    return view('examinations', compact('users','pages','events'));

  }


  public function guidance(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM guidance");        
    $events=$events = DB::table("myevents")->count();      
    return view('guidance', compact('users','pages','events'));

  }


  public function cocurriculor(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM cocurriculor");
    $teams = DB::select("SELECT *FROM teams");
    $clubs = DB::table('clubs')
            ->join('subclubs', 'clubs.id', '=', 'subclubs.club_id')
            ->select('clubs.name', 'subclubs.content')
            ->get();
    $events=$events = DB::table("myevents")->count();      
    return view('cocurriculor', compact('users','pages','events','teams','clubs'));

  }


  public function history(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM history");        
    $events=$events = DB::table("myevents")->count();      
    return view('history', compact('users','pages','events'));

  }



  public function galary(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM galary");
    $images = DB::table('garlaryimages')->orderBy('created_at', 'desc')->get(); 
    $videos = DB::select("SELECT *FROM videos");                
    $events=$events = DB::table("myevents")->count();      
    return view('galary', compact('users','pages','events','images','videos'));

  }

  public function events(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM events");
    $myevents = DB::table('myevents')->orderBy('startdate', 'desc')->paginate(2);        
    $events=$events = DB::table("myevents")->count();      
    return view('events', compact('users','pages','events','myevents'));


  }


public function viewEvent(Request $request){
  $id=$request->input('id');
  $users = DB::select("SELECT *FROM basics");
  $pages = DB::select("SELECT *FROM events");
  $images= DB::select("SELECT *FROM eventsimages WHERE event_id=$id");   
  $events1 =DB::select("SELECT *FROM myevents WHERE id=$id");
  $events=$events = DB::table("myevents")->count();       
    return view('viewEvent', compact('users','events','images','pages','events1'));

}

  public function contact(){

    $users = DB::select("SELECT *FROM basics");
    $pages = DB::select("SELECT *FROM contact");
    $partners = DB::select("SELECT *FROM partners");     
    $events=$events = DB::table("myevents")->count();        
    return view('contact', compact('users','pages','events','partners'));

  }



public function sendMessage(Request $request)
{

  $message = new Message();
  $message->name = $request->input('name');
  $message->email = $request->input('email');
  $message->phone = $request->input('phone');
  $message->message = $request->input('message');   
  $message->save();

return redirect('/contact')->with('response','Message successfuly sent');
}



}
