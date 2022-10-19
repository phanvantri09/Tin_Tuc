<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImgModel;
use App\Models\Comment;
use App\Models\ContentModel;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryModel;
use App\Models\User;
use App\Http\Requests\UserR\register;
use App\Http\Requests\UserR\login;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    
    public function home(){
        $data = ContentModel::limit(2)->get();
        $data1 = ContentModel::limit(5)->get();
        $image = ImgModel::all();
        $category2 = CategoryModel::limit(6)->get();
        $category = CategoryModel::all();
        $category1 = CategoryModel::limit(6)->get();
        return view('pages.home', compact(['data','data1', 'image','category','category1','category2']));
    }
    public function deletecmt( $id){
        //dd($request->id);
        //dd($id);
        $cmt = Comment::find($id);
    	$cmt->delete();
    	return back();
    }
    public function editCmt(Request $request, $id){
        $cmt = Comment::find($id);
        $cmt->contents = $request->contents;
        $cmt->save();
        return back();
    }
    public function search(Request $request){
        $category2 = CategoryModel::limit(6)->get();
        $data = ContentModel::limit(2)->get();
        $data1 = ContentModel::limit(5)->get();
        $image = ImgModel::all();
        $category = CategoryModel::all();
        $category1 = CategoryModel::limit(6)->get();
        if(!empty($request->key)){
            $datatab = ContentModel::where('title','like','%'.$request->key.'%')->orWhere('contents','like','%'.$request->key.'%')->get();
            return view('pages.search', compact(['datatab','data','data1', 'image','category','category1','category2']));
        }

    }
    public function content( $title,$id){
        $user = User::all();
        $cmt = Comment::limit(4)->get();
        $category2 = CategoryModel::limit(6)->get();
        $category1 = CategoryModel::limit(6)->get();
        $dataa= ContentModel::all();
        $dataaa = $dataa->find($id);
        //$image = ImgModel::all();
        $image = ImgModel::where('id_noidung','=',$id)->get();
        return view('pages.content', compact(['user','cmt',"dataaa","category1","image",'title','category2']));
    }
    public function tabcontent($id, $name){
        $category2 = CategoryModel::limit(6)->get();
        $data = ContentModel::limit(2)->get();
        $data1 = ContentModel::limit(5)->get();
        $image = ImgModel::all();
        $category = CategoryModel::all();
        $category1 = CategoryModel::limit(6)->get();
        $datatab = ContentModel::where('id_category','=',$id)->get();
        return view('pages.search', compact(['datatab','data','data1', 'image','category','category1','name','category2']));
    }
    public function login(){
        return view("pages.login");
    }
    public function register(){
        return view("pages.register");
    }
    public function postlogin(login $request){
        $dataUser =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($dataUser))
        {
            $user = User::where(["email" => $request->email])->first();
            $level = $user->level;
            Auth::login($user);
            if($level == 1){
                return redirect()->route('home')->with('success','Successfully Register, You can login!');
            }
            else{
                return redirect()->route('tongquang')->with('success','Successfully Register, You can login!');
            }
            }
        {
            return redirect()->route('login')->with('error','Error Register, Again!');
        }
    }
    public function postregister(Request $request){
        //dd($request->all());
        if(! Hash::check($request->email, $request->password))
        {
            if(User::create([
                'name'=>$request->name, 
                'email'=>$request->email, 
                'password'=>Hash::make($request->password),
                'level'=> 1
                ])){
                return redirect()->route('login')->with('success',"Đăng ký thành công");
            }else
            {
                return redirect()->route('register')->with('error',"Không hợp lệ vui lòng làm lại!");
            }
        }else
        return redirect()->route('register')->with('error',"Lỗi mật khẩu không giống nhau!");
    
    }
    public function cmt(Request $request){
        //dd(Auth::user()->id);
        $id_user= Auth::user()->id;
        $cmt = new  Comment;
        $cmt->id_user = $id_user;
        $cmt->id_content = $request->id_content;
        $cmt->contents= $request->content;
        $cmt->save();
        return back();
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

}
