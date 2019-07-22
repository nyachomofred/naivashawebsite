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

class UserProfileController extends Controller
{
    
public function listUsers(){

    $users = DB::table('users')->orderBy('created_at', 'desc')->paginate(5);
    return view('admin.listUsers',['users'=>$users]);

 }



public function editUser(Request $request){
$id=$request->input('id');
$users = DB::select("SELECT *FROM users WHERE id=$id");
return view('admin.editUser',['users'=>$users]);
}


public function updateUser(Request $request){
$id=$request->input('id');
$name=$request->input('name');
$email=$request->input('email');
$lastName=$request->input('lastName');
$phone=$request->input('phone');

DB::update("UPDATE users SET name = ?, email = ?, lastName = ?, phone = ?  WHERE id = ?",[$name,$email,$lastName,$phone,$id]);  

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated user ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/listUsers')->with('response','User successfully updated');
}



public function userRoles(){

    $users = DB::table('users')->orderBy('created_at', 'desc')->paginate(5);

    return view('admin.userRoles',['users'=>$users]);

 }


public function editUserRole(Request $request){

$id=$request->input('id');
$users = DB::select("SELECT *FROM users WHERE id=$id");
return view('admin.editUserRole',['users'=>$users]);
 
 }

public function updateUserRole(Request $request){

$id=$request->input('id');
$role=$request->input('role');

if ($role=="Staff") {
  $status=1;
} else if($role=="Admin"){
  $status=2;
}else{
return redirect('/userRoles');  
}
DB::update("UPDATE users SET title = ?, status = ? WHERE id = ?",[$role,$status,$id]);
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated user role";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/userRoles')->with('success','User successfully updated');

 }


public function suspend(Request $request){
$id=$request->input('id');
$title="";
$status=0;

DB::update("UPDATE users SET status = ?, title = ?  WHERE id = ?",[$status,$title,$id]); 
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Suspended a user ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/listUsers')->with('response','User successfully approved');
}


public function deleteUser(Request $request){
$id=$request->input('id');
DB::delete('DELETE FROM users WHERE id = ?',[$id]);
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="deleted user ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/listUsers')->with('response','User successfully deleted');
}




public function searchUser(Request $request){
  $search=$request->input('search');

if($search!=''){



$users = DB::table('users')->where('name', 'LIKE', '%'.$search.'%')
                                ->orWhere('lastName', 'LIKE', '%'.$search.'%')
                                ->orWhere('phone', 'LIKE', '%'.$search.'%')
                                ->orWhere('title', 'LIKE', '%'.$search.'%')
                                ->orWhere('email', 'LIKE', '%'.$search.'%')->paginate();

if(count($users)>0){
  return view('admin.listUsers',['users'=>$users]);
}

return redirect('/listUsers')->with('response','No results found');


}
return redirect('/admin7');
}


public function settings(){
$menus = DB::select("SELECT *FROM basics");

return view('admin.basicSettings',['menus'=>$menus]);
 
 }

public function updateGeneralSettings(Request $request){

$id=$request->input('id');

$users = DB::select("SELECT *FROM basics WHERE id=$id");
return view('admin.upateBasicSettings',['users'=>$users]);


}


public function updateGeneralSettings1(Request $request){

$id=$request->input('id');
$content=$request->input('content');
$updated_at=date('Y-m-d H:i:s');


DB::update("UPDATE basics SET  data = ?,  updated_at = ?  WHERE id = ?",[$content,$updated_at,$id]);  
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated general settings";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/settings')->with('success','Settings successfully updated');

}


public function socialSettings(){
$menus = DB::select("SELECT *FROM basics");
return view('admin.socialSettings',['menus'=>$menus]);
 
 }



public function updateSocialSettings(Request $request){

$id=$request->input('id');

$users = DB::select("SELECT *FROM basics WHERE id=$id");
return view('admin.updateSocialSettings1',['users'=>$users]);


}



public function updateSocialSettings1(Request $request){

$id=$request->input('id');
$content=$request->input('content');
$updated_at=date('Y-m-d H:i:s');
DB::update("UPDATE basics SET  data = ?,  updated_at = ?  WHERE id = ?",[$content,$updated_at,$id]);  
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated social settings";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/settings')->with('success',' Social settings successfully updated');

}


public function imagesSettings(){
$menus = DB::select("SELECT *FROM basics");
return view('admin.imagesSettings',['menus'=>$menus]);
 
 }


public function updateImageSettings(Request $request){

$id=$request->input('id');

$users = DB::select("SELECT *FROM basics WHERE id=$id");
return view('admin.updateImageSettings',['users'=>$users]);

}



public function updateImageSettings1(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


 $id=$request->input('id'); 

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/settings', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE basics SET data = ? WHERE id = ?",[$url,$id]);
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated image settings";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/settings')->with('success','image settings successfully updated');

}
}


public function staffSettings(){

    $users = DB::table('staffinformation')->paginate(5);
    return view('admin.staffSettings',['users'=>$users]);

 }




public function seachStaff(Request $request){
  $search=$request->input('search');

if($search!=''){



$users = DB::table('staffinformation')->where('name', 'LIKE', '%'.$search.'%')->paginate();

if(count($users)>0){
  return view('admin.staffSettings',['users'=>$users]);
}

return redirect('/staffSettings')->with('response','No results found');


}
return redirect('/staffSettings');
}


public function editStaff(Request $request){
$id=$request->input('id');
$users = DB::select("SELECT *FROM staffinformation WHERE id=$id");

return view('admin.editStaff',['users'=>$users]);
 
 }


public function updateStaff(Request $request){

$id=$request->input('id');
$name=$request->input('name');
$title=$request->input('title');
$comment=$request->input('comment');
$updated_at=date('Y-m-d H:i:s');


DB::update("UPDATE staffinformation SET name = ?,title = ?,comment = ?,updated_at = ? WHERE id = ?",[$name,$title,$comment,$updated_at,$id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="upadated staffs page ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

return redirect('/staffSettings')->with('response','Staff successfully updated');

}



public function updateStaffImage(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);

$id=$request->input('id');
$picture=$request->input('picture');
$updated_at=date('Y-m-d H:i:s');

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/staff', $file->getClientOriginalName());
  $url=$file->getClientOriginalName();


DB::update("UPDATE staffinformation SET image = ?,updated_at = ? WHERE id = ?",[$url,$updated_at,$id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="upadated staffs Image ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  

$users = DB::select("SELECT *FROM staffinformation WHERE id=$id");
return view('admin.editStaff',['users'=>$users]);

}
}














































































































public function profile(){
$user_id=Auth::user()->id;
$users = DB::select("SELECT *FROM users WHERE id=$user_id");

return view('admin.profile',['users'=>$users]);
 
 }



public function updateProfile(Request $request){
$id=Auth::user()->id;    
$name=$request->input('name');
$lastName=$request->input('lastName');
$email=$request->input('email');
$phone=$request->input('phone');

DB::update("UPDATE users SET name = ?, lastName = ?, email = ?, phone = ? WHERE id = ?",[$name,$lastName,$email,$phone,$id]);   

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity=" updated profile";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/profile')->with('success','Profile successfully updated');  
 }



public function changePassword1(Request $request){

        $validatedData = $request->validate([
            'oldpass' => 'required|min:6',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:password',
        ],[
            'oldpass.required' => 'Old password is required',
            'oldpass.min' => 'Old password needs to have at least 6 characters',
            'password.required' => 'Password is required',
            'password.min' => 'Password needs to have at least 6 characters',
            'password_confirmation.required' => 'Password confirmation did not match.'
        ]);

        $current_password = \Auth::User()->password;           
        if(\Hash::check($request->input('oldpass'), $current_password))
        {          
          $user_id = \Auth::User()->id;                       
          $obj_user = User::find($user_id);
          $obj_user->password = \Hash::make($request->input('password'));
          $obj_user->save(); 


          //recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="changed password";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


          return redirect('/changePassword')->with('response','Password successfully changed');  
        }
        else
        {           

          return redirect('/changePassword')->with('reject','Incorrect old Password.');  
        } 
 }






public function changeProfilePicture1(Request $request){
  //server side validation
          $this->validate($request,[
            'picture'=>'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);



  $id=Auth::user()->id;    

 if(Input::hasFile('picture')){
  $file= Input::file('picture');
  $file->move(public_path().'/resources/profile', $file->getClientOriginalName());
  $url=URL::to("/") . '/resources/profile'.'/'. $file->getClientOriginalName();


DB::update("UPDATE users SET image = ? WHERE id = ?",[$url,$id]);

//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="updated profile picture ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/profile')->with('response','Profile picture successfully updated');

}
}








public function ActivityLog(){
$user_id=Auth::user()->id;
$users = DB::table('activitylog')->orderBy('created_at', 'desc')->paginate(10);

return view('admin.ActivityLog',['users'=>$users]);
 
 }



public function searchActivityLog(Request $request){
  $search=$request->input('search');

if($search!=''){



$users = DB::table('activitylog')->where('name', 'LIKE', '%'.$search.'%')
                                ->orWhere('email', 'LIKE', '%'.$search.'%')->paginate();

if(count($users)>0){
  return view('admin.ActivityLog',['users'=>$users]);
}

return redirect('/ActivityLog')->with('response','No results found');


}
return redirect('/ActivityLog');
}



public function clearActivityLog(){
 

DB::delete('DELETE FROM activitylog');
return redirect('/ActivityLog')->with('response','Activity log successfully cleared');

}



public function resetPassword(){

    $users = DB::table('users')->paginate(5);
    return view('admin.resetPassword',['users'=>$users]);

 }


public function resetPassword1(Request $request){

$id=$request->input('id');
$password="$2y$10$.DkSR3SsK1GbXWx4ViczzOgKXidAptb/XA5yYc7x0YCzIG1p9xCpm";

DB::update("UPDATE users SET password = ? WHERE id = ?",[$password,$id]);
//recording activity log
    $userName=Auth::user()->name;
    $email=Auth::user()->email;
    $activity="Reseted user password ";
    $activityTime=date('Y-m-d H:i:s');
//inserting into basics table
  DB::table('activitylog')->insert([[
    'name' => $userName,
    'email' => $email,    
    'activity' => $activity,
    'created_at' => $activityTime
        ]]);  


return redirect('/resetPassword')->with('response','Password successfully changed');
 
 }



public function searchResetPassword(Request $request){
  $search=$request->input('search');

if($search!=''){





$users = DB::table('users')->where('name', 'LIKE', '%'.$search.'%')
                                     ->orWhere('lastName', 'LIKE', '%'.$search.'%')
                                     ->orWhere('email', 'LIKE', '%'.$search.'%')
                                     ->orWhere('phone', 'LIKE', '%'.$search.'%')->paginate();

if(count($users)>0){
  return view('admin.resetPassword',['users'=>$users]);
}

return redirect('/resetPassword')->with('response','No results found');


}
return redirect('/resetPassword');
}







}