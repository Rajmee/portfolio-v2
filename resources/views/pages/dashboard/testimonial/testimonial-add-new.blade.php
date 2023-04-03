@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Testimonial</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('admin.home')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.testimonial-info.all')}}">Testimonial</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.testimonial-info.create')}}">Add New Testimonial</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Create New Testimonial</div>
        </div>
        <form action="{{route('admin.testimonial-info.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Person name </label>
                            <input type="text" class="form-control" id="testimonial_list_name" name="testimonial_list_name" placeholder="Type person name" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Comments</label>
                            <textarea type="text" class="form-control" id="testimonial_list_comment" name="testimonial_list_comment" placeholder="Type Testomonial Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Company name & Organization</label>
                            <input type="text" class="form-control" id="testimonial_list_info" name="testimonial_list_info" placeholder="Type Testomonial compnay name & designation" required>
                        </div>

                        <div class="form-group">
                            {{-- <label class="medialist_thumbnail mb-4">
                                <h4 class="hero_thumbnail-title">Set Testimonial person image</h4>
                                <input name="testimonial_list_image" type="file" value="1"  class="imagecheck-input" required>
                            </label> --}}
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Set Testimonial person image
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="testimonial_list_image">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Save</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
	<script>
		ClassicEditor
			.create( document.querySelector( '#testimonial_list_comment' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection


