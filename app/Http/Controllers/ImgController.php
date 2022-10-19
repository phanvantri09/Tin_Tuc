<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use Illuminate\Http\Request;
use App\Models\ImgModel;
use Nette\Schema\Context;

class ImgController extends Controller
{
    //
    public function getlist(){
        $content = ContentModel::all();
        $image = ImgModel::all();
        return view('admin.img.list',compact('image','content'));
    }
    public function getadd(){
        $content = ContentModel::all();
        $image = ImgModel::all();
        return view('admin.img.add', compact('image','content'));
    }
    public function postadd(Request $request){
        $img = $request->text;
        $extension = $request->text->extension();
        $img1Name = time().'-1.'.$extension;
        $img->move(public_path('admin/images'), $img1Name);
        $request->text = $img1Name;


        $image = new ImgModel();
        $image->text = $request->text;
        $image->id_noidung = $request->id_noidung;
        $image->save();
        return redirect('admin/image/list');
    }
    public function getedit($id){
        $content = ContentModel::all();
        $image = ImgModel::find($id);
        return view('admin.img.edit', compact('content','image'));
    }
    public function postedit(Request $rq, $id){
        if(!empty($rq->text)){
            $img = $rq->text;
            $extension = $rq->text->extension();
            $img1Name = time().'-1.'.$extension;
            $img->move(public_path('admin/images'), $img1Name);
            $rq->text = $img1Name;
            $image = ImgModel::find($id);
            $image->id = $rq->id;
            $image->text = $rq->text;
            $image->id_noidung = $rq->id_noidung;
            $image->save();
            return redirect('admin/image/list');
        }
        else{
            return redirect('admin/image/add');
        }
    }
    public function getdelete($id)
    {
    	$image = ImgModel::find($id);
    	$image->delete();
    	return redirect('admin/image/list');
    }
}
