<?php

namespace App\Http\Services\Comment;

use App\Models\Comment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CommentService
{
    //Admin
    public function getAllBlog(){
        return Comment::where('blog_id','!=', NULL)
            ->get();
    }
    public function getAllChuyen(){
        return Comment::where('chuyen_id','!=', NULL)
            ->get();
    }

    public function destroy($request){
        $comment = Comment::where('id', $request->input('id'))->first();
        if($comment){
            return Comment::where('id', $request->input('id'))->delete();
        }
        return false;
    }



    //frontend
    public function create($request){
        try{
            $request->except('_token');
            Comment::create($request->all());
            Session::flash('success', 'Thêm bình luận thành công!');
        }catch (\Exception $err){
            Session::flash('error', 'Lỗi, Vui lòng thử lại!');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function getblog($id){
        return Comment::where('blog_id', $id)
            ->get();
    }
    public function getchuyen($id){
        return Comment::where('chuyen_id', $id)
            ->get();
    }

    public function getCommet(){
        return Comment::where('chuyen_id','!=', NULL)
            ->limit(5)
            ->inRandomOrder()
            ->get();
    }

}
