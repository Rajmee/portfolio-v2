@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Quotes Settings</h4>
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
            <a href="#">Quotes</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.quotes.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Quotes Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rr-quote-right"></i>
                        Quotes
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">Quotes Information</h4>
                            </div>

                            <?php if ($quotes_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter Quotes</label>
                                    <input type="text" class="form-control" id="quotes_title" name="quotes_title" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your quotes.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter Quotes</label>
                                    <input type="text" class="form-control" id="quotes_title" name="quotes_title" value="{{$quotes_settings->quotes_title}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your quotes.</small>
                                </div>
                            <?php } ?>

                            <?php if ($quotes_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter quotes author</label>
                                    <input type="text" class="form-control" id="quotes_author" name="quotes_author" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your quotes author.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter quotes author</label>
                                    <input type="text" class="form-control" id="quotes_author" name="quotes_author" value="{{$quotes_settings->quotes_author}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your quotes author.</small>
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
