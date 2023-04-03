@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Image Settings</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            {{-- <a href="{{route('admin.dashboard')}}">Hero</a> --}}
            <a href="#">Image</a>
        </li>
    </ul>
 </div>


 <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Image Sections</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        {{-- <i class="flaticon-text"></i> --}}
                        <i class="fi fi-rr-text"></i>
                        Title
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="fi fi-rr-picture"></i>
                        Images
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">


                            <div class="col-lg-6">
                                <div class="card-header">
                                    <h4 class="card-title">Image Section Title</h4>
                                </div>
                                <form action="{{route('admin.image.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{method_field('PUT')}}

                                <?php if ($image_section === null) { ?>
                                    <div class="form-group">
                                        <label for="header_phone">Section Title</label>
                                        <input type="text" class="form-control" id="section_title" name="section_title" value="" required>
                                        <small id="emailHelp" class="form-text text-muted">Type image section title.</small>
                                    </div>
                                <?php } else { ?>
                                    <div class="form-group">
                                        <label for="header_phone">Section Title</label>
                                        <input type="text" class="form-control" id="section_title" name="section_title" value="{{$image_section->section_title}}" required>
                                        <small id="emailHelp" class="form-text text-muted">Type image section title.</small>
                                    </div>
                                <?php } ?>

                                <?php if ($image_section === null) { ?>
                                    <div class="form-group">
                                        <label for="header_phone">Title</label>
                                        <input type="text" class="form-control" id="section_title" name="title" value="" required>
                                        <small id="emailHelp" class="form-text text-muted">Type  title.</small>
                                    </div>
                                <?php } else { ?>
                                    <div class="form-group">
                                        <label for="header_phone">Title</label>
                                        <input type="text" class="form-control" id="section_title" name="title" value="{{$image_section->title}}" required>
                                        <small id="emailHelp" class="form-text text-muted">Type title.</small>
                                    </div>
                                <?php } ?>

                                <button class="btn btn-success" type="submit" name="submit">Save</button>
                            </form>

                            </div>
                    </div>
                </div>



                <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                    <div class="card-header">
                        <h4 class="card-title">Image</h4>
                    </div>

                    <div class="row">
                        @foreach ($image_settings as $images)
                            <div class="col-lg-2">
                                <figure class="imagecheck-figure img-wrap">
                                    <form action="{{route('admin.image.destroy', $images->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <span class="close" type="submit" name="submit" value="Delete">&times;</span> --}}
                                        <input class="close shadow-none border-0" type="submit" name="submit" value="&times;" required>

                                        <img src="{{url($images->image)}}" alt="title" class="imagecheck-image">
                                    </form>
                                </figure>
                            </div>
                        @endforeach
                    </div>


                    <form action="{{route('admin.image.upload')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('POST')}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if ($image_settings === null) { ?>
                                        <div class="form-group">
                                            <figure class="imagecheck-figure">
                                                <img src="#" alt="title" class="imagecheck-image">
                                            </figure>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                                        <i class="fi fi-rr-picture"></i> Upload Gallery images
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="image[]" multiple accept="image/*">
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                            {{-- <input type="file" class="form-control" id="image" name="image[]" multiple accept="image/*" required> --}}
                                        </div>
                                        <?php } else { ?>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                                        <i class="fi fi-rr-picture"></i> Upload Gallery images
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="image[]" multiple accept="image/*">
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                            {{-- <input type="file" class="form-control" id="image" name="image[]" multiple accept="image/*" required> --}}
                                        </div>
                                        <?php } ?>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit" name="submit">Upload</button>

                    </form>
                </div>

            </div>
        </div>
</div>

@endsection
