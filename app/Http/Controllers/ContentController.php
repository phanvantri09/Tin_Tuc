<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContentModel;
class ContentController extends Controller
{
    //
    public function tongquang(){
        $category = CategoryModel::all();
        $ca = count($category);
        $content = ContentModel::all();
        $co = count($content);
        $user = user::all();
        $us = count($user);
        $comment = Comment::all();
        $cm = count($comment);
        return view('admin.layout.tongquan', compact('content','category','ca','co','cm','us'));
    }
    public function getlist(){
        $category = CategoryModel::all();
        $content = ContentModel::all();
        return view('admin.content.list', compact('content','category'));
    }
    public function getadd(){
        $category = CategoryModel::all();
        return view('admin.content.add', compact('category'));
    }
    public function postadd(Request $rq){
        $content = new ContentModel();
        $content->title = $rq->title;
        $content->contents = $rq->contents;
        $content->id_category = $rq->id_category;
        $content->save();
        return redirect('admin/content/list');
    }
    public function getedit($id){
        $category = CategoryModel::all();
        $content = ContentModel::find($id);
        return view('admin.content.edit', compact('content','category'));
    }
    public function postedit(Request $rq, $id){
        $content = ContentModel::find($id);
        $content->id = $rq->id;
        $content->title = $rq->title;
        $content->contents = $rq->contents;
        $content->id_category = $rq->category;
        $content->save();
        return redirect('admin/content/list');
    }
    public function getdelete($id)
    {
    	$content = ContentModel::find($id);
    	$content->delete();
    	return redirect('admin/content/list');
    }
}
