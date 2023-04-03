<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategories;
use App\Models\BlogSettings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class BlogSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_cat_list = BlogCategories::all();
        return view('pages.dashboard.blog.blog-cat.blog-cat-all', compact('blog_cat_list'));
    }

    public function indexPost()
    {
        $blog_post_list = BlogSettings::all();
        // $blog_cat_list = BlogCategories::all();
        return view('pages.dashboard.blog.blog-list.blog-all', compact('blog_post_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.blog.blog-cat.blog-cat-add');
    }

    public function createPost()
    {
        $blog_cat_list = BlogCategories::all();
        return view('pages.dashboard.blog.blog-list.blog-add-new', compact('blog_cat_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog_cat_list = new BlogCategories;
        $blog_cat_list->blog_cat = $request->blog_cat;

        $blog_cat_list->save();

        return redirect()->route('admin.blog-cat.all')->with('success', 'New Category created successfully');
    }

    public function storePost(Request $request)
    {
        $blog_post_list = new BlogSettings;
        $blog_post_list->blog_cat = $request->blog_cat;
        $blog_post_list->blog_title = $request->blog_title;
        $blog_post_list->slug = Str::slug($request->blog_title);
        $blog_post_list->blog_author = $request->blog_author;
        $blog_post_list->blog_desc = $request->blog_desc;
        $blog_post_list->blog_img = $request->blog_img;

        // if($request->file('blog_img')){
        //     $blog_post_img  = $request->file('blog_img');
        //     Storage::putFile('public/images/', $blog_post_img);
        //     $blog_post_list->blog_img = "storage/images/". $blog_post_img->hashName();
        // }

        $blog_post_list->save();

        return redirect()->route('admin.blog-post.all')->with('success', 'New Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog_cat_list = BlogCategories::find($id);
        return view('pages.dashboard.blog.blog-cat.blog-cat-edit', compact('blog_cat_list'));
    }

    public function editPost($id)
    {
        $blog_cat_list = BlogCategories::all();
        $blog_post_list = BlogSettings::find($id);
        return view('pages.dashboard.blog.blog-list.blog-edit', compact('blog_cat_list', 'blog_post_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog_cat_list =  BlogCategories::find($id);
        $blog_cat_list->blog_cat = $request->blog_cat;

        $blog_cat_list->save();

        return redirect()->route('admin.blog-cat.all')->with('success', 'Category updated successfully');
    }

    public function updatePost(Request $request, $id)
    {
        $blog_post_list = BlogSettings::find($id);
        $blog_post_list->blog_cat = $request->blog_cat;
        $blog_post_list->blog_title = $request->blog_title;
        $blog_post_list->slug = Str::slug($request->blog_title);
        $blog_post_list->blog_author = $request->blog_author;
        $blog_post_list->blog_desc = $request->blog_desc;
        $blog_post_list->blog_img = $request->blog_img;

        // if($request->file('blog_img')){
        //     $blog_post_img  = $request->file('blog_img');
        //     Storage::putFile('public/images/', $blog_post_img);
        //     $blog_post_list->blog_img = "storage/images/". $blog_post_img->hashName();
        // }

        $blog_post_list->save();

        return redirect()->route('admin.blog-post.all')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_cat_list =  BlogCategories::find($id);
        $blog_cat_list->delete();

        return redirect()->route('admin.blog-cat.all')->with('success', 'Category Deleted successfully');
    }

    public function destroyPost($id)
    {
        $blog_post_list =  BlogSettings::find($id);
        $blog_post_list->delete();

        return redirect()->route('admin.blog-post.all')->with('success', 'Blog Deleted successfully');
    }
}
