@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Contact Settings</h4>
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
            <a href="#">Contact</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.contact.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Contact Sections</h4>
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
                                <h4 class="card-title">Contact Information</h4>
                            </div>

                            <?php if ($contact_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Contact section title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Contact section title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$contact_settings->title}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type section title.</small>
                                </div>
                            <?php } ?>

                            <?php if ($contact_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter description</label>
                                    <textarea type="text" class="form-control" id="desc" name="desc" value=""></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type section description.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter description</label>
                                    <textarea type="text" class="form-control" id="desc" name="desc">{{$contact_settings->desc}}</textarea>
                                    <small id="emailHelp" class="form-text text-muted">Type section description.</small>
                                </div>
                            <?php } ?>

                            <?php if ($contact_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter telegram link</label>
                                    <input type="text" class="form-control" id="telegram" name="telegram" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your link.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter telegram link</label>
                                    <input type="text" class="form-control" id="telegram" name="telegram" value="{{$contact_settings->telegram}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your link.</small>
                                </div>
                            <?php } ?>

                            <?php if ($contact_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter skype link</label>
                                    <input type="text" class="form-control" id="skype" name="skype" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your link.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter skype link</label>
                                    <input type="text" class="form-control" id="skype" name="skype" value="{{$contact_settings->skype}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your link.</small>
                                </div>
                            <?php } ?>

                            <?php if ($contact_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter whatsapp link</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your link.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter whatsapp link</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{$contact_settings->whatsapp}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your link.</small>
                                </div>
                            <?php } ?>

                            <?php if ($contact_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter office address</label>
                                    <input type="text" class="form-control" id="office_location" name="office_location" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your office address.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter office address</label>
                                    <input type="text" class="form-control" id="office_location" name="office_location" value="{{$contact_settings->office_location}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your office address.</small>
                                </div>
                            <?php } ?>

                            <?php if ($contact_settings === null) { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter office map location</label>
                                    <input type="text" class="form-control" id="map_location" name="map_location" value="" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your map url.</small>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="header_phone">Enter office map location</label>
                                    <input type="text" class="form-control" id="map_location" name="map_location" value="{{$contact_settings->map_location}}" required>
                                    <small id="emailHelp" class="form-text text-muted">Type your map url.</small>
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
			.create( document.querySelector( '#desc' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection
