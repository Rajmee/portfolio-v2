@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Social Media Settings</h4>
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
            <a href="#">Social Media</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.header.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Social Media Sections</h4>
            <button class="btn btn-success" type="submit" name="submit">Save</button>
        </div>
        <div class="card-body">
            <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons" id="pills-tab-with-icon" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <i class="fi fi-rr-share"></i>
                        Social Media
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card-header">
                                <h4 class="card-title">About Information</h4>
                            </div>

                            <?php if ($header_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">Facebook URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://facebook.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="#" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_facebook_url">Facebook URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://facebook.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$header_settings->facebook}}" required>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php if ($header_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_linkedin_url">Linkedin URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://linkedin.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="#" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_linkedin_url">Linkedin URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://linkedin.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$header_settings->linkedin}}" required>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php if ($header_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_twitter_url">Twitter URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://twitter.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="twitter" name="twitter" value="#" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_twitter_url">Twitter URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://twitter.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$header_settings->twitter}}" required>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php if ($header_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_instagram_url">Instagram URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://instagram.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="instagram" name="instagram" value="#" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_instagram_url">Instagram URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://instagram.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{$header_settings->instagram}}" required>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php if ($header_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_website_url">Youtube URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://youtube.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="youtube" name="youtube" value="#" required>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_website_url">Youtube URL</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">https://youtube.com/social_link</span>
                                        </div>
                                        <input type="text" class="form-control" id="youtube" name="youtube" value="{{$header_settings->youtube}}" required>
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

@section('scripts')
	<script>
		ClassicEditor
			.create( document.querySelector( '#about_description' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection
