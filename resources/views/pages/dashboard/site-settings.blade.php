@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Site Settings</h4>
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
            <a href="#">Site</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.site.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Site Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#title" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rr-document"></i>
                        Title
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#seo" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <i class="fi fi-rr-browser"></i>
                        SEO
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="title" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">Site Information</h4>
                            </div>

                            <?php if ($site_settings === null) { ?>
                            <div class="form-group">
                                {{-- <figure class="imagecheck-figure">
                                    <img src="{{asset('img/about-img.jpg')}}" alt="title" class="imagecheck-image">
                                </figure> --}}
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                            <i class="fi fi-rr-picture"></i> Set Favicon
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="site_favicon">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                {{-- <input type="file" class="form-control" id="site_favicon" name="site_favicon" required> --}}
                            </div>
                            <?php } else { ?>
                            <div class="form-group">
                                <figure class="imagecheck-figure">
                                    <img src="{{url($site_settings->site_favicon)}}" alt="favicon" class="imagecheck-image">
                                </figure>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                            <i class="fi fi-rr-picture"></i> Set Favicon
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="site_favicon" value="{{$site_settings->site_favicon}}">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                {{-- <input type="file" class="form-control" id="site_favicon" name="site_favicon" required> --}}
                            </div>
                            <?php } ?>

                            <?php if ($site_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Site tile</label>
                                    <input type="text" class="form-control" id="site_title" name="site_title" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your name.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Site tile</label>
                                    <input type="text" class="form-control" id="site_title" name="site_title" value="{{$site_settings->site_title}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your name.</small>
                                </div>
                            <?php } ?>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade show" id="seo" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card-header">
                                <h4 class="card-title">SEO Settings</h4>
                            </div>

                            <?php if ($site_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta name</label>
                                    <input type="text" class="form-control" id="meta_name" name="meta_name" value="">
                                    <small id="emailHelp" class="form-text text-muted">Type meta name.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta name</label>
                                    <input type="text" class="form-control" id="meta_name" name="meta_name" value="{{$site_settings->meta_name}}">
                                    <small id="emailHelp" class="form-text text-muted">Type meta name.</small>
                                </div>
                            <?php } ?>

                            <?php if ($site_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta description</label>
                                    <textarea type="text" class="form-control" id="meta_desc" name="meta_desc" value=""></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type meta description.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta description</label>
                                    <textarea type="text" class="form-control" id="meta_desc" name="meta_desc" value="">{{$site_settings->meta_desc}}</textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type meta description.</small>
                                </div>
                            <?php } ?>

                            <?php if ($site_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta key</label>
                                    <input type="text" class="form-control" id="meta_key" name="meta_key" value="">
                                    <small id="emailHelp" class="form-text text-muted">Type your key.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta key</label>
                                    <input type="text" class="form-control" id="meta_key" name="meta_key" value="{{$site_settings->meta_key}}" >
                                    <small id="emailHelp" class="form-text text-muted">Type meta key.</small>
                                </div>
                            <?php } ?>

                            <?php if ($site_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta author</label>
                                    <input type="text" class="form-control" id="meta_author" name="meta_author" value="">
                                    <small id="emailHelp" class="form-text text-muted">Type meta author.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter meta author</label>
                                    <input type="text" class="form-control" id="meta_author" name="meta_author" value="{{$site_settings->meta_author}}">
                                    <small id="emailHelp" class="form-text text-muted">Type meta author.</small>
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

{{-- @section('scripts')
	<script>
		ClassicEditor
			.create( document.querySelector( '#meta_desc' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection --}}
