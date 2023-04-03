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
                <a href="{{route('admin.business-info.edit', $business_info->id)}}">Edit Business</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Business</div>
        </div>
        <form action="{{route('admin.business-info.update', $business_info->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Business name </label>
                            <input type="text" class="form-control" id="business_list_title" name="business_list_title" placeholder="Type Testomonial Description" value="{{$business_info->business_list_title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Position</label>
                            <input type="text" class="form-control" id="business_list_pos" name="business_list_pos" placeholder="Type Testomnial comment" value="{{$business_info->business_list_pos}}" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Company name</label>
                            <input type="text" class="form-control" id="business_list_comp" name="business_list_comp" placeholder="Type Testomonial person name & designation" value="{{$business_info->business_list_comp}}" required>
                        </div>

                        <div class="form-group">
                            <label for="medialist_link">Button text</label>
                            <input type="text" class="form-control" id="business_list_button_text" name="business_list_button_text" placeholder="Type Testomonial person name & designation" value="{{$business_info->business_list_button_text}}" required>
                        </div>

                        <div class="form-group">
                            <label for="medialist_link">Button url</label>
                            <input type="text" class="form-control" id="business_list_button_url" name="business_list_button_url" placeholder="Type Testomonial person name & designation" value="{{$business_info->business_list_button_url}}" required>
                        </div>

                        <div class="form-group">
                            <label class="medialist_thumbnail mb-6">
                                <figure class="imagecheck-figure">
                                    <img src="{{url($business_info->business_list_img)}}" alt="title" class="imagecheck-image">
                                </figure>
                                {{-- <h4 class="hero_thumbnail-title">Set Expertise icon</h4> --}}
                                {{-- <input name="expertise_info_icon" type="file" value="1"  class="imagecheck-input"> --}}
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                            <i class="fi fi-rr-picture"></i> Set business image
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="business_list_img" value="{{$business_info->business_list_img}}">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                            </label>
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




