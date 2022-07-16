<?php

namespace App\Http\Controllers;

use App\Post;
use App\Scopes\PostScope;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        $title = 'Dashboard';
        $limit = 10;
        // $posts = Post::withoutGlobalScope(PostScope::class)->simplePaginate($limit);
        $posts = Post::simplePaginate($limit);

        return view('admin.posts.index', ['title' => $title, 'posts' => $posts]);
    }

    public function show($id){

        $title   = 'Show';
        $post    = Post::findOrFail($id);
        $popular = Post::where('id', '<>', $id)->limit(6)->get();

        return view('admin.posts.show',[
            'title'   => $title,
            'post'    => $post,
            'popular' => $popular
        ]);
    }

    public function update(Request $request, $id){
        
        $post = Post::findOrfail($id);
        if(!is_null($post))
        {
            $post->publish = $request->status;
            $post->save();
            return back()->with('success', 'Cập nhật trạng thái thành công');
        }
        return back()->with('error', 'Có lỗi xảy ra khi cập nhật trạng thái');
    } 

    public function updateAll(Request $request){

        if($request->status == 0 || $request->status == 1)
        {
            Post::where('publish', '<>', $request->status)->update(['publish' => $request->status]);
            return back()->with('success', 'Cập nhật trạng thái thành công');
        }
        return abort(404);
    } 

    public function delete($id){
        
        $post = Post::findOrFail($id);
        $post->delete();
        return back()->with('success', 'Xóa tin tức thành công');
    } 

    public function deleteAll(){
        
        Post::truncate();
        return back()->with('success', 'Xóa tin tức thành công');
    } 
}
