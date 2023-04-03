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
                <a href="{{route('admin.expertise-info.create')}}">Add New Expertise</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Create New Expertise</div>
        </div>
        <form action="{{route('admin.expertise-info.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Expertise Title</label>
                            <input type="text" class="form-control" id="expertise_info_title" name="expertise_info_title" placeholder="Type title" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Description</label>
                            <textarea type="text" class="form-control" id="expertise_info_desc" name="expertise_info_desc" placeholder="Type Expertise Description"></textarea>
                        </div>

                        <div class="form-group">
                            {{-- <label class="medialist_thumbnail mb-4">
                                <img style="width:150px;height:170px;" id="output" src="{{asset('img/about-img.jpg')}}"/>
                                <br><br>
                                <h4 class="hero_thumbnail-title">Set Expertise icon</h4>
                                <input name="expertise_info_icon" type="file" value="1"  class="imagecheck-input" onchange="loadFile(event)" required>
                            </label> --}}
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Set Expertise icon
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="expertise_info_icon">
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
			.create( document.querySelector( '#expertise_info_desc' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection




