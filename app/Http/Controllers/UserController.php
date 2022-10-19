<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function getlist(){
        $category = User::all()->toArray();
        return view('admin.user.list',compact('category'));
    }
    public function getadd(){
        return view('admin.user.add');
    }
    public function postadd(Request $rq){
        $user = new User();
        $user->name = $rq->name;
        $user->email = $rq->email;
        $user->password = Hash::make($rq->password);
        $user->level = $rq->level;
        $user->save();
        return redirect('admin/user/list');
    }
    public function getedit($id){
        $category = User::find($id);
        return view('admin.user.edit', compact('category'));
    }
    public function postedit(Request $rq, $id){
        $user = new User();
        $user->name = $rq->name;
        $user->email = $rq->email;
        $user->password = Hash::make($rq->password);
        $user->level = $rq->level;
        $user->save();
        return redirect('admin/user/list');
    }

    public function getdelete($id)
    {
    	$category = User::find($id);
    	$category->delete();
    	return redirect('admin/user/list');
    }
}
