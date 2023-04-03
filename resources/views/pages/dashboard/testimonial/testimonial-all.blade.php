@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Testimonials</h4>
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
                <a href="{{route('admin.testimonial-info.all')}}">All Testimonials</a>
            </li>
        </ul>
    </div>



  <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Company Name & Organization</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($testimonial_info_lists)>0)
                        @foreach ($testimonial_info_lists as $info_list)
                        <tr>
                            <td>@if (!empty ($info_list->testimonial_list_image) ) <div class="avatar"><img  class="avatar-img" src="{{url($info_list->testimonial_list_image)}}"></div>@endif</td>
                            <td>@if (!empty ($info_list->testimonial_list_name) ) {{$info_list->testimonial_list_name}} @endif</td>
                            <td>@if (!empty ($info_list->testimonial_list_info) ) {{$info_list->testimonial_list_info}} @endif</td>

                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.testimonial-info.edit', $info_list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-edit"></i></a>
                                   <form action="{{route('admin.testimonial-info.destroy', $info_list->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" value="" class="btn btn-danger"><i class="fi fi-rr-trash"></i></button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

