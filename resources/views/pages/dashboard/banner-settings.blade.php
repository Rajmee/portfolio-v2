@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Hero Settings</h4>
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
            <a href="#">Hero</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.hero.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Hero Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                {{-- <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rr-text"></i>
                        Title
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#header-buttons" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="fi fi-rr-stop"></i>
                        Button
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link active" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="fi fi-rr-shield-check"></i>
                        Qualities
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                {{-- <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card-header">
                                <h4 class="card-title">Hero Title</h4>
                            </div>

                            <?php if ($banner_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Title</label>
                                    <input type="text" class="form-control" id="hero_title" name="hero_title" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type hero title.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Title</label>
                                    <input type="text" class="form-control" id="hero_title" name="hero_title" value="{{$banner_settings->hero_title}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type hero title.</small>
                                </div>
                            <?php } ?>


                        </div>

                    </div>
                </div> --}}

                {{-- <div class="tab-pane fade" id="header-buttons" role="tabpanel" aria-labelledby="header-buttons">
                    <div class="card-header">
                        <h4 class="card-title">Header Button</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php if ($banner_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_button">Hero Button Text</label>
                                    <input type="text" class="form-control" id="hero_button_text" name="hero_button_text" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type hero title.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_button">Hero Button Text</label>
                                    <input type="text" class="form-control" id="hero_button_text" name="hero_button_text" value="{{$banner_settings->hero_button_text}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type hero title.</small>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6">
                            <?php if ($banner_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_button_url">Hero Button URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://youtsite.com/path_url</span>
                                        </div>
                                        <input type="text" class="form-control"  id="hero_button_url" name="hero_button_url" value="" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_button_url">Hero Button URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://youtsite.com/path_url</span>
                                        </div>
                                        <input type="text" class="form-control"  id="hero_button_url" name="hero_button_url" value="{{$banner_settings->hero_button_url}}" required>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div> --}}

                <div class="tab-pane fade show active" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                    <div class="card-header">
                        <h4 class="card-title">Hero Qualities</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">

                            <?php if ($banner_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">First Quality keyword</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"  id="hero_tag_one" name="hero_tag_one" value="" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">First Quality keyword</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"  id="hero_tag_one" name="hero_tag_one" value="{{$banner_settings->hero_tag_one}}" required>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($banner_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_twitter_url">Second Quality keyword</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"  id="hero_tag_two" name="hero_tag_two" value="" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_twitter_url">Second Quality keyword</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"  id="hero_tag_two" name="hero_tag_two" value="{{$banner_settings->hero_tag_two}}" required>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($banner_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_linkedin_url">Third Quality keyword</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"  id="hero_tag_three" name="hero_tag_three" value="" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_linkedin_url">Third Quality keyword</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"  id="hero_tag_three" name="hero_tag_three" value="{{$banner_settings->hero_tag_three}}" required>
                                    </div>
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
