@extends('layouts.admin.app')
@section('content')

<div class="page-header">
    <h4 class="page-title">Sliders</h4>
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
            <a href="{{route('admin.sliders.all')}}">Sliders</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.sliders.edit', $hero_slider->id)}}">Edit Slider</a>
        </li>
    </ul>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title">Edit Slider</div>
    </div>
    <form action="{{route('admin.sliders.update', $hero_slider->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="medialist_title">Sliders Title</label>
                        <input type="text" class="form-control" id="hero_title" name="hero_title" placeholder="Type title" value="{{$hero_slider->hero_title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="medialist_title">Sliders Sub Title</label>
                        <input type="text" class="form-control" id="hero_sub_title" name="hero_sub_title" placeholder="Type sub title" value="{{$hero_slider->hero_sub_title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="header_button">Slider Button Text</label>
                        <input type="text" class="form-control" id="hero_button_text" name="hero_button_text" placeholder="Type button text" value="{{$hero_slider->hero_button_text}}" required>
                    </div>
                    <div class="form-group">
                        <label for="header_button_url">Hero Button URL</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://youtsite.com/path_url</span>
                            </div>
                            <input type="text" class="form-control" id="hero_button_url" name="hero_button_url" placeholder="Type button url" value="{{$hero_slider->hero_button_url}}" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="medialist_thumbnail mb-6">
                            <figure class="imagecheck-figure">
                                <img src="{{url($hero_slider->hero_img)}}" alt="title" class="imagecheck-image">
                            </figure>
                            {{-- <h4 class="hero_thumbnail-title">Set Expertise icon</h4> --}}
                            {{-- <input name="expertise_info_icon" type="file" value="1"  class="imagecheck-input"> --}}
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Set hero image
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="hero_img" value="{{$hero_slider->hero_img}}">
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

@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#expertise_info_desc'))
        .catch(error => {
            console.error(error);
        });

</script>
@endsection

