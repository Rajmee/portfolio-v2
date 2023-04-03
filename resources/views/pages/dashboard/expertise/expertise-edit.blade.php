@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Expertise</h4>
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
                <a href="{{route('admin.expertise-info.all')}}">Expertise</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.expertise-info.edit', $expertise_info->id)}}">Edit Expertise</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Expertise</div>
        </div>
        <form action="{{route('admin.expertise-info.update', $expertise_info->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Expertise Title</label>
                            <input type="text" class="form-control" id="expertise_info_title" name="expertise_info_title" placeholder="Type title" value="{{$expertise_info->expertise_info_title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Description</label>
                            <textarea type="text" class="form-control" id="expertise_info_desc" name="expertise_info_desc" placeholder="Type Expertise Description">{{$expertise_info->expertise_info_desc}}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="medialist_thumbnail mb-4">
                                <figure class="imagecheck-figure">
                                    <img src="{{url($expertise_info->expertise_info_icon)}}" alt="title" class="imagecheck-image">
                                </figure>
                                {{-- <h4 class="hero_thumbnail-title">Set Expertise icon</h4> --}}
                                {{-- <input name="expertise_info_icon" type="file" value="1"  class="imagecheck-input"> --}}
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Set Expertise icon
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="expertise_info_icon" value="{{$expertise_info->expertise_info_icon}}">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
	<script>
		ClassicEditor
			.create( document.querySelector( '#expertise_info_desc' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection


