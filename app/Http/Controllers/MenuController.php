<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use Auth;


class MenuController extends Controller
{
    


public function menu(){

    $menus = DB::select("SELECT *FROM basics");
    return view('admin.menu',['menus'=>$menus]);

 }


public function subMenu(){

    $menus = DB::select("SELECT *FROM basics"); 
    return view('admin.subMenu',['menus'=>$menus]);

 }


public function editMenu(Request $request){
    $id=$request->input('id');
    $menus = DB::select("SELECT *FROM basics WHERE id=$id"); 
    return view('admin.editMenu',['menus'=>$menus]);
 }


public function editMenu1(Request $request){
$id=$request->input('id');
$name=$request->input('name');
$url=$request->input('url');    
DB::update("UPDATE basics SET name = ?, data = ? WHERE id = ?",[$name,$url,$id]);
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Updated menu";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/menu')->with('success','Menu successfully updated');	
 }


public function createMainMenu1(Request $request){
$name=$request->input('name');
$key=$request->input('key');
$url=$request->input('url');    
$type=$request->input('type');  

  DB::table('basics')->insert([[
    'name' => $name,
    'key' => $key,
    'type' => $type,
    'data' => $url
        ]]); 

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Created main menu";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/menu')->with('success','Menu successfully created');	
 }


public function createDropDownMenu1(Request $request){
$name=$request->input('name');
$key=$request->input('key');
$url=$request->input('url');    
$type=$request->input('type');
$key1=1;  

  DB::table('basics')->insert([[
    'name' => $name,
    'key' => $key,
    'type' => $type,
    'key1' => $key1,
    'data' => $url
        ]]); 

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="created drop-down menu";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/menu')->with('success','Drop Down Menu successfully created');	
 }

public function createSubMenu(){

    $menus = DB::select("SELECT *FROM basics"); 
    return view('admin.createSubMenu',['menus'=>$menus]);

 }


public function createSubMenu1(Request $request){
$name=$request->input('name');
$key=$request->input('key');
$url=$request->input('url');    
$type=$request->input('type');
$subTo=$request->input('subTo');

  DB::table('basics')->insert([[
    'name' => $name,
    'key' => $key,
    'type' => $type,
    'subtarget' => $subTo,
    'data' => $url
        ]]); 

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Created sub menu";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/menu')->with('success','Sub Menu successfully created');	
 }


public function deleteMainMenu(){

    $menus = DB::select("SELECT *FROM basics"); 

    return view('admin.deleteMainMenu',['menus'=>$menus]);

 }


public function deleteSubMenu(){

    $menus = DB::select("SELECT *FROM basics"); 

    return view('admin.deleteSubMenu',['menus'=>$menus]);

 }


public function deleteMainMenu1(Request $request){
$id=$request->input('id');
DB::delete('DELETE FROM basics WHERE id = ?',[$id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="deleted main menu";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/menu')->with('success','Main Menu successfully deleted');	
 }


public function deleteSubMenu1(Request $request){
$id=$request->input('id');
DB::delete('DELETE FROM basics WHERE id = ?',[$id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="deleted sub menu";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/menu')->with('success','Sub Menu successfully deleted');	
 }









}
