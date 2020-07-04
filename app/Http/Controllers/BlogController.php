<?php

namespace App\Http\Controllers;

use App\Blog;

class BlogController extends Controller
{
    /**
     * @var Blog
     */
    private $blogModel;


    public function __construct(Blog $blog)
    {
        $this->blogModel = $blog;        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $data = $this->blogModel->getView();

        return view('page.blog', ['data' => $data]);
    }
}
