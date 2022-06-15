<?php
namespace App\Traits;
use \App\Models\User;
use Hash;
trait UserTrait
{
 //
public function get_all_users()
{
    return "get users";
}
public function add_user($data)
{
$user=new User ();
$user->name=$data['name'];
$user->email=$data['email'];
$user->goup_id=$data['group_id'];
$user->password=bcrypt($data['password']);
if($user->save())
{
    return response()->json(array('status'=>'success', 'msg'=>'Success!.'), 200);

}
else{
    return response()->json(array('status'=>'error', 'msg'=>'Error!'), 500);

}
}
}
