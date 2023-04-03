@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Blog Categories</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('admin.home')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.blog-cat.all')}}">Blog</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.blog-cat.edit', $blog_cat_list->id)}}">Edit Category</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Blog Category</div>
        </div>
        <form action="{{route('admin.blog-cat.update', $blog_cat_list->id)}}" method="POST" enctype="multipart/form-data" required>
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Blog Category</label>
                            <input type="text" class="form-control" id="blog_cat" name="blog_cat" placeholder="Type title" value="{{$blog_cat_list->blog_cat}}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>
@endsection



