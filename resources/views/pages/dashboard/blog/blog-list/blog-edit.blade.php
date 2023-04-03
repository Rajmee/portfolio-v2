@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Blog</h4>
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
                <a href="{{route('admin.blog-post.all')}}">Blog</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.blog-post.edit', $blog_post_list->id)}}">Edit Expertise</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Blog</div>
        </div>
        <form action="{{route('admin.blog-post.update', $blog_post_list->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="medialist_title">Blog Title</label>
                            <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Type title" value="{{$blog_post_list->blog_title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_title">slug Author</label>
                            <input type="text" class="form-control" id="blog_author" name="blog_author" placeholder="Type author" value="{{$blog_post_list->blog_author}}" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_title">Blog Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Type slug" value="{{$blog_post_list->slug}}" required>
                        </div>
                        <div class="form-group">
                            <label for="medialist_title">Blog Category</label>
                            <select class="form-control show-tick" name="blog_cat">
                                <option disabled>-- Please select--</option>
                                @foreach($blog_cat_list as $key => $post_cat)
                                    <option value="{{ $post_cat->id }}"> {{ $post_cat->blog_cat }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="medialist_link">Post Body</label>
                            <textarea type="text" class="form-control" id="blog_desc" name="blog_desc" placeholder="Type Post Description">{{$blog_post_list->blog_desc}}</textarea>
                        </div>

                        <div class="form-group">
                            {{-- <label class="medialist_thumbnail mb-4"> --}}
                                <figure class="imagecheck-figure">
                                    <img src="{{url($blog_post_list->blog_img)}}" alt="title" class="imagecheck-image">
                                </figure>
                                {{-- <h4 class="hero_thumbnail-title">Set Post Thumbnail</h4>
                                <input name="blog_img" type="file" value="1"  class="imagecheck-input" required>
                            </label> --}}

                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                        <i class="fi fi-rr-picture"></i> Set Post Thumbnail
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="blog_img" value="{{ $blog_post_list->blog_img }}">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Please upload jpg, jpeg, png file.</small>
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
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#blog_title').change(function(e) {
       $.get('{{ url('check_slug') }}',
       { 'blog_title': $(this).val() },
       function( data ) {
           $('#slug').val(data.slug);
       }
       );
    });
</script> --}}
	{{-- <script>
		ClassicEditor
			.create( document.querySelector( '#blog_desc' ), {
                ckfinder: {
                    uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
        }
            })
			.catch( error => {
				console.error( error );
			});
	</script> --}}

    {{-- <script>
        var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    <script>
        CKEDITOR.replace('blog_desc', options);
    </script> --}}


      <script>
        var editor_config = {
          path_absolute : "/",
          selector: '#blog_desc',
          relative_urls: false,
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
              url : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no",
              onMessage: (api, message) => {
                callback(message.content);
              }
            });
          },
          height : "1000"
        };

        tinymce.init(editor_config);
      </script>


@endsection


