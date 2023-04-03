@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Business</h4>
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
                <a href="{{route('admin.business-info.all')}}">Business</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.business-info.create')}}">Add New Business</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Create New Business</div>
        </div>
        <form action="{{route('admin.business-info.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Business name </label>
                            <input type="text" class="form-control" id="business_list_title" name="business_list_title" placeholder="Type business name" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Position</label>
                            <input type="text" class="form-control" id="business_list_pos" name="business_list_pos" placeholder="Type position" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Company name</label>
                            <input type="text" class="form-control" id="business_list_comp" name="business_list_comp" placeholder="Type company name" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Button text</label>
                            <input type="text" class="form-control" id="business_list_button_text" name="business_list_button_text" placeholder="Type button text" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Button url</label>
                            <input type="text" class="form-control" id="business_list_button_url" name="business_list_button_url" placeholder="Type button url" required>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Set business image
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="business_list_img">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Save</button>
            </div>
        </form>
    </div>
@endsection


