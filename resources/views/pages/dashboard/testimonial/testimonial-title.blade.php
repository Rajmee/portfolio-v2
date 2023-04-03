@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Testimonial Settings</h4>
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
            <a href="#">Testimonial</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.testimonial-title.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Testimonial Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rr-text"></i>
                        Title
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">Testimonial Section Information</h4>
                            </div>

                            <?php if ($testimonial_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Section Title</label>
                                    <input type="text" class="form-control" id="testimonial_settings_section_title" name="testimonial_settings_section_title" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Section Title</label>
                                    <input type="text" class="form-control" id="testimonial_settings_section_title" name="testimonial_settings_section_title" value="{{$testimonial_settings->testimonial_settings_section_title}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                                </div>
                            <?php } ?>

                            <?php if ($testimonial_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Title</label>
                                    <input type="text" class="form-control" id="testimonial_settings_title" name="testimonial_settings_title" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type title.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Title</label>
                                    <input type="text" class="form-control" id="testimonial_settings_title" name="testimonial_settings_title" value="{{$testimonial_settings->testimonial_settings_title}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type title.</small>
                                </div>
                            <?php } ?>

                            <?php if ($testimonial_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Description</label>
                                    <textarea type="text" class="form-control" id="testimonial_settings_desc" name="testimonial_settings_desc" value="" required></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type section description.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Description</label>
                                    <textarea type="text" class="form-control" id="testimonial_settings_desc" name="testimonial_settings_desc" value="">{{$testimonial_settings->testimonial_settings_desc}}</textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type section description.</small>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
