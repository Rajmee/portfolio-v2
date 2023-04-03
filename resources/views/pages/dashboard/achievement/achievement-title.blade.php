@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Achievement Settings</h4>
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
            <a href="#">Achievement</a>
        </li>
    </ul>
</div>


<div class="card">
    <form action="{{route('admin.achievement-title.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Achievement Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rs-rocket-lunch"></i>
                        Achievement Section Title
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-home-tab-icon" data-toggle="pill" href="#pills-achievement-icon" role="tab" aria-controls="pills-achievement-icon" aria-selected="true">
                        <i class="fi fi-br-list"></i>
                        Achievemnet Column Info
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">Achievement Section Information</h4>
                            </div>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Achievement Section Title</label>
                                <input type="text" class="form-control" id="section_title" name="section_title" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Achievement Section Title</label>
                                <input type="text" class="form-control" id="section_title" name="section_title" value="{{$achievement_settings->section_title}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Achievement Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Achievement Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$achievement_settings->title}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Achievement List Section Title</label>
                                <input type="text" class="form-control" id="section_list_title" name="section_list_title" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type list section title.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Achievement List Section Title</label>
                                <input type="text" class="form-control" id="section_list_title" name="section_list_title" value="{{$achievement_settings->section_list_title}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type list section title.</small>
                            </div>
                            <?php } ?>

                        </div>
                    </div>


                </div>

                <div class="tab-pane fade show" id="pills-achievement-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-3">
                            <div class="card-header">
                                <h4 class="card-title">Achievement Column One</h4>
                            </div>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One Counter</label>
                                <input type="text" class="form-control" id="ach_col_1_count" name="ach_col_1_count" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column one counter.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One Counter</label>
                                <input type="text" class="form-control" id="ach_col_1_count" name="ach_col_1_count" value="{{$achievement_settings->ach_col_1_count}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column one counter.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One title</label>
                                <input type="text" class="form-control" id="ach_col_1_title" name="ach_col_1_title" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column one title.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One title</label>
                                <input type="text" class="form-control" id="ach_col_1_title" name="ach_col_1_title" value="{{$achievement_settings->ach_col_1_title}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column one title.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One description</label>
                                <textarea type="text" class="form-control" id="ach_col_1_desc" name="ach_col_1_desc" value=""></textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column one description.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One description</label>
                                <textarea type="text" class="form-control" id="ach_col_1_desc" name="ach_col_1_desc">{{$achievement_settings->ach_col_1_desc}}</textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column one description.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                            <i class="fi fi-rr-picture"></i> Set column one icon
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="ach_col_1_icon">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label class="medialist_thumbnail mb-6">
                                    <figure class="imagecheck-figure">
                                        <img src="{{url($achievement_settings->ach_col_1_icon)}}" alt="title" class="imagecheck-image">
                                    </figure>

                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                                <i class="fi fi-rr-picture"></i> Set column one icon
                                            </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="ach_col_1_icon" value="{{$achievement_settings->ach_col_1_icon}}">
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                </label>
                            </div>
                            <?php } ?>


                        </div>


                        <div class="col-lg-3">
                            <div class="card-header">
                                <h4 class="card-title">Achievement Column Two</h4>
                            </div>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Two Counter</label>
                                <input type="text" class="form-control" id="ach_col_2_count" name="ach_col_2_count" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column two counter.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One Counter</label>
                                <input type="text" class="form-control" id="ach_col_2_count" name="ach_col_2_count" value="{{$achievement_settings->ach_col_2_count}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column two counter.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One title</label>
                                <input type="text" class="form-control" id="ach_col_2_title" name="ach_col_2_title" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column two title.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One title</label>
                                <input type="text" class="form-control" id="ach_col_2_title" name="ach_col_2_title" value="{{$achievement_settings->ach_col_2_title}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column two title.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One description</label>
                                <textarea type="text" class="form-control" id="ach_col_2_desc" name="ach_col_2_desc" value=""></textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column two description.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column One description</label>
                                <textarea type="text" class="form-control" id="ach_col_2_desc" name="ach_col_2_desc">{{$achievement_settings->ach_col_2_desc}}</textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column two description.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                            <i class="fi fi-rr-picture"></i> Set column two icon
                                        </a>
                                    </span>
                                    <input id="thumbnail2" class="form-control" type="text" name="ach_col_2_icon">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label class="medialist_thumbnail mb-6">
                                    <figure class="imagecheck-figure">
                                        <img src="{{url($achievement_settings->ach_col_2_icon)}}" alt="title" class="imagecheck-image">
                                    </figure>

                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary text-white">
                                                <i class="fi fi-rr-picture"></i> Set column two icon
                                            </a>
                                        </span>
                                        <input id="thumbnail2" class="form-control" type="text" name="ach_col_2_icon" value="{{$achievement_settings->ach_col_2_icon}}">
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                </label>
                            </div>
                            <?php } ?>


                        </div>

                        <div class="col-lg-3">
                            <div class="card-header">
                                <h4 class="card-title">Achievement Column Three</h4>
                            </div>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Three Counter</label>
                                <input type="text" class="form-control" id="ach_col_3_count" name="ach_col_3_count" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three counter.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Three Counter</label>
                                <input type="text" class="form-control" id="ach_col_3_count" name="ach_col_3_count" value="{{$achievement_settings->ach_col_3_count}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three counter.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Three title</label>
                                <input type="text" class="form-control" id="ach_col_3_title" name="ach_col_3_title" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three title.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Three title</label>
                                <input type="text" class="form-control" id="ach_col_3_title" name="ach_col_3_title" value="{{$achievement_settings->ach_col_3_title}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three title.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Three description</label>
                                <textarea type="text" class="form-control" id="ach_col_3_desc" name="ach_col_3_desc" value=""></textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column three description.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Three description</label>
                                <textarea type="text" class="form-control" id="ach_col_3_desc" name="ach_col_3_desc">{{$achievement_settings->ach_col_3_desc}}</textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column three description.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
                                            <i class="fi fi-rr-picture"></i> Set column three icon
                                        </a>
                                    </span>
                                    <input id="thumbnail3" class="form-control" type="text" name="ach_col_3_icon">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label class="medialist_thumbnail mb-6">
                                    <figure class="imagecheck-figure">
                                        <img src="{{url($achievement_settings->ach_col_3_icon)}}" alt="title" class="imagecheck-image">
                                    </figure>

                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary text-white">
                                                <i class="fi fi-rr-picture"></i> Set column three icon
                                            </a>
                                        </span>
                                        <input id="thumbnail3" class="form-control" type="text" name="ach_col_3_icon" value="{{$achievement_settings->ach_col_3_icon}}">
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                </label>
                            </div>
                            <?php } ?>


                        </div>

                        <div class="col-lg-3">
                            <div class="card-header">
                                <h4 class="card-title">Achievement Column Four</h4>
                            </div>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Four Counter</label>
                                <input type="text" class="form-control" id="ach_col_4_count" name="ach_col_4_count" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three counter.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Four Counter</label>
                                <input type="text" class="form-control" id="ach_col_4_count" name="ach_col_4_count" value="{{$achievement_settings->ach_col_4_count}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three counter.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Four title</label>
                                <input type="text" class="form-control" id="ach_col_4_title" name="ach_col_4_title" value="" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three title.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Four title</label>
                                <input type="text" class="form-control" id="ach_col_4_title" name="ach_col_4_title" value="{{$achievement_settings->ach_col_4_title}}" required>
                                <small id="emailHelp" class="form-text text-muted">Type column three title.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Four description</label>
                                <textarea type="text" class="form-control" id="ach_col_4_desc" name="ach_col_4_desc" value=""></textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column three description.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label for="header_phone">Column Four description</label>
                                <textarea type="text" class="form-control" id="ach_col_4_desc" name="ach_col_4_desc">{{$achievement_settings->ach_col_4_desc}}</textarea>
                                <small id="emailHelp" class="form-text text-muted">Type column three description.</small>
                            </div>
                            <?php } ?>

                            <?php if ($achievement_settings === null) { ?>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail4" data-preview="holder4" class="btn btn-primary text-white">
                                            <i class="fi fi-rr-picture"></i> Set column four icon
                                        </a>
                                    </span>
                                    <input id="thumbnail4" class="form-control" type="text" name="ach_col_4_icon">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <label class="medialist_thumbnail mb-6">
                                    <figure class="imagecheck-figure">
                                        <img src="{{url($achievement_settings->ach_col_4_icon)}}" alt="title" class="imagecheck-image">
                                    </figure>

                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="thumbnail4" data-preview="holder4" class="btn btn-primary text-white">
                                                <i class="fi fi-rr-picture"></i> Set column four icon
                                            </a>
                                        </span>
                                        <input id="thumbnail4" class="form-control" type="text" name="ach_col_4_icon" value="{{$achievement_settings->ach_col_4_icon}}">
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                </label>
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

@section('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#ach_col_1_desc'))
        .catch(error => {
            console.error(error);
        });

</script>

<script>
    ClassicEditor
        .create(document.querySelector('#ach_col_2_desc'))
        .catch(error => {
            console.error(error);
        });

</script>

<script>
    ClassicEditor
        .create(document.querySelector('#ach_col_3_desc'))
        .catch(error => {
            console.error(error);
        });

</script>

<script>
    ClassicEditor
        .create(document.querySelector('#ach_col_4_desc'))
        .catch(error => {
            console.error(error);
        });

</script>

<script>
    $('[id*="lfm"]').each(function() {
        $(this).filemanager('image', {prefix: route_prefix});
    });
</script>

@endsection

