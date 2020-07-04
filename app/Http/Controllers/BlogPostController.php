<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 記事一覧を表示する
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blog $blog)
    {
        $data = $blog->getView();

        return view('admin.bloglist', ['data' => $data]);
    }

    /**
     * 新規記事投稿画面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogpost');
    }

    /**
     * データ送信
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:20',
            'body' => 'required|string|max:500',
        ]);

        if (is_null($request->id)) {
            $b = new Blog();
        } else {
            $b = $blog->find((int) $request->id);
        }

        $b->title = $request->title;

        $b->body = $request->body;

        $b->save();

        return redirect()->action('BlogPostController@index');
    }

    /**
     * 編集画面
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, int $id)
    {
        $data = $blog->find($id);

        return view('admin.blogpost', ['data' => $data]);
    }

    /**
     * 削除処理
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, int $id)
    {
        if ( ! is_null($blog->findOne($id)) ) {
            $blog->destroy($id);
        }

        return redirect()->action('BlogPostController@index');
    }
}
