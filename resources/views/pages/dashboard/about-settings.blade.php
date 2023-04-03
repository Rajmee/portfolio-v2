@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">About Settings</h4>
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
            <a href="#">About</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.about.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">About Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rr-document"></i>
                        Information
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">About Information</h4>
                            </div>

                            <?php if ($about_settings === null) { ?>
                            <div class="form-group">
                                {{-- <figure class="imagecheck-figure">
                                    <img src="{{asset('img/about-img.jpg')}}" alt="title" class="imagecheck-image">
                                </figure> --}}
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="about_image">
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <figure class="imagecheck-figure">
                                    <img src="{{url($about_settings->about_image)}}" alt="title" class="imagecheck-image">
                                </figure>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="about_image" value="{{$about_settings->about_image}}">
                                </div>
                            </div>
                            <?php } ?>

                            <?php if ($about_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Name</label>
                                    <input type="text" class="form-control" id="about_name" name="about_name" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your name.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Name</label>
                                    <input type="text" class="form-control" id="about_name" name="about_name" value="{{$about_settings->about_name}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your name.</small>
                                </div>
                            <?php } ?>

                            <?php if ($about_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter quotes</label>
                                    <input type="text" class="form-control" id="about_name" name="about_quote" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your quotes.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter quotes</label>
                                    <input type="text" class="form-control" id="about_quote" name="about_quote" value="{{$about_settings->about_quote}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your quotes.</small>
                                </div>
                            <?php } ?>

                            <?php if ($about_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter description</label>
                                    <textarea type="text" class="form-control" id="about_description" name="about_description" value=""></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type your description.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter description</label>
                                    <textarea rows="10" type="text" class="form-control" id="about_description" name="about_description">{{$about_settings->about_description}}</textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type your description.</small>
                                </div>
                            <?php } ?>

                            <?php if ($about_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter question</label>
                                    <input type="text" class="form-control" id="about_qus" name="about_qus" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your qus.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter question</label>
                                    <input type="text" class="form-control" id="about_qus" name="about_qus" value="{{$about_settings->about_qus}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your qus.</small>
                                </div>
                            <?php } ?>

                            <?php if ($about_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter button text</label>
                                    <input type="text" class="form-control" id="about_button_text" name="about_button_text" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your button text.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter button text</label>
                                    <input type="text" class="form-control" id="about_button_text" name="about_button_text" value="{{$about_settings->about_button_text}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your button text.</small>
                                </div>
                            <?php } ?>

                            <?php if ($about_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter button url</label>
                                    <input type="text" class="form-control" id="about_button_url" name="about_button_url" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your button url.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter button url</label>
                                    <input type="text" class="form-control" id="about_button_url" name="about_button_url" value="{{$about_settings->about_button_url}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your button url.</small>
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
			.create( document.querySelector( '#about_description' ) )
            .then( about_description => {
                about_description.ui.view.editable.element.style.height = '500px';
            } )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection
