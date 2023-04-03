@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Achievement</h4>
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
                <a href="{{route('admin.achievement-info.all')}}">Achievement</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.achievement-info.edit', $achievement_info_lists->id)}}">Edit Achievement</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Achievement</div>
        </div>
        <form action="{{route('admin.achievement-info.update', $achievement_info_lists->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="medialist_link">Achievement title</label>
                            <input type="text" class="form-control" id="org_title" name="org_title" placeholder="Type achivement title" value="{{$achievement_info_lists->org_title}}" required>
                        </div>

                        <div class="form-group">
                            <label for="medialist_link">Achievement date</label>
                            <input type="text" class="form-control" id="org_date" name="org_date" placeholder="Type achivement date" value="{{$achievement_info_lists->org_date}}" required>
                        </div>

                        <div class="form-group">
                            <label for="medialist_link">Achievement description</label>
                            <textarea type="text" class="form-control" id="org_desc" name="org_desc" placeholder="Type achivement description">{{$achievement_info_lists->org_desc}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="medialist_link">Achievement button text</label>
                            <input type="text" class="form-control" id="org_button_text" name="org_button_text" placeholder="Type button text" value="{{$achievement_info_lists->org_button_text}}" required>
                        </div>

                        <div class="form-group">
                            <label for="medialist_link">Achievement button url</label>
                            <input type="text" class="form-control" id="org_button_url" name="org_button_url" placeholder="Type button url" value="{{$achievement_info_lists->org_button_url}}" required>
                        </div>

                        <div class="form-group">
                            {{-- <label class="medialist_thumbnail mb-4"> --}}
                                <figure class="imagecheck-figure">
                                    <img src="{{url($achievement_info_lists->org_img)}}" alt="title" class="imagecheck-image">
                                </figure>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Set Award company
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="org_img" value="{{$achievement_info_lists->org_img}}">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
                                {{-- <h4 class="hero_thumbnail-title">Set Award company</h4>
                                <input name="org_img" type="file" value="1"  class="imagecheck-input" value="{{$achievement_info_lists->org_img}}" required>
                            </label> --}}
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
			.create( document.querySelector( '#org_desc' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
@endsection


