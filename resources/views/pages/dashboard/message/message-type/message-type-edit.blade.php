@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Message Type</h4>
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
                <a href="{{route('admin.message-type.all')}}">Message Type</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.message-type.edit', $message_type->id)}}">Edit Message Type</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Message Type</div>
        </div>
        <form action="{{route('admin.message-type.update', $message_type->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Blog Category</label>
                            <input type="text" class="form-control" id="topic" name="topic" placeholder="Type title" value="{{$message_type->topic}}" required>
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



