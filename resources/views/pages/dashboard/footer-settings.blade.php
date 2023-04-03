@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Footer Settings</h4>
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
            <a href="#">Footer</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.footer.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Footer Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rr-settings"></i>
                        Footer
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="card-header">
                                <h4 class="card-title">Footer Information</h4>
                            </div>

                            <?php if ($footer_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">Your name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="enter your name" value="" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">Your name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="enter your name" value="{{$footer_settings->name}}" required>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php if ($footer_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">Your profile url</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="url" name="url" placeholder="enter your profile url" value="#" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">Your profile url</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="url" name="url" placeholder="enter your profile url" value="{{$footer_settings->url}}" required>
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


