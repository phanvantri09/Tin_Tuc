<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
class CategoryController extends Controller
{
    //
    public function getlist(){
        $category = CategoryModel::all()->toArray();
        return view('admin.category.list',compact('category'));
    }
    public function getadd(){
        return view('admin.category.add');
    }
    public function postadd(Request $rq){
        $category = new CategoryModel();
        $category->name = $rq->name;
        $category->save();
        return redirect('admin/category/list');
    }
    public function getedit($id){
        $category = CategoryModel::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function postedit(Request $rq, $id){
        $category = CategoryModel::find($id);
        $category->id = $rq->id;
        $category->name = $rq->name;
        $category->save();
        return redirect('admin/category/list');
    }

    public function getdelete($id)
    {
    	$category = CategoryModel::find($id);
    	$category->delete();
    	return redirect('admin/category/list');
    }
}
