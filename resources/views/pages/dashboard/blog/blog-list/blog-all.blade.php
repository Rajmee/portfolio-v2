@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Blogs</h4>
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
                <a href="{{route('admin.blog-post.all')}}">All Blogs</a>
            </li>
        </ul>
    </div>



  <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Post thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($blog_post_list)>0)
                        @foreach ($blog_post_list as $post_list)
                        <tr>
                            <td>@if (!empty ($post_list->blog_img) ) <div class="avatar"><img  class="avatar-img" src="{{url($post_list->blog_img)}}"></div>@endif</td>
                            <td>@if (!empty ($post_list->blog_title) ) {{$post_list->blog_title}} @endif</td>
                            <td>@if (!empty ($post_list->blog_category->blog_cat) ) {{$post_list->blog_category->blog_cat}} @endif</td>
                            <td>@if (!empty ($post_list->blog_author) ) {{$post_list->blog_author}} @endif</td>
                            <td>@if (!empty ($post_list->created_at) ) {{$post_list->updated_at}} @endif</td>



                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.blog-post.edit', $post_list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-edit"></i></a>
                                   <form action="{{route('admin.blog-post.destroy', $post_list->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" value="" class="btn btn-danger"><i class="fi fi-rr-trash"></i></button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

