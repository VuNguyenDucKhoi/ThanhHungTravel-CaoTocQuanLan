<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Services\Comment\CommentService;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function blog()
    {
        return view('backend.components.comment.blog',[
            'title'=> 'Danh Sách Bình Luận',
            'comments' => $this->commentService->getAllBlog(),
        ]);
    }

    public function chuyen()
    {
        return view('backend.components.comment.chuyen',[
            'title'=> 'Danh Sách Đánh Giá',
            'comments' => $this->commentService->getAllChuyen(),
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->commentService->destroy($request);
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công!'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

}
