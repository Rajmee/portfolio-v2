@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Expertise</h4>
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
                <a href="{{route('admin.expertise-info.all')}}">All Expertise</a>
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
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($expertise_info_lists)>0)
                        @foreach ($expertise_info_lists as $info_list)
                        <tr>
                            <td>@if (!empty ($info_list->expertise_info_icon) ) <div class="avatar"><img  class="avatar-img" src="{{url($info_list->expertise_info_icon)}}"></div>@endif</td>
                            <td>@if (!empty ($info_list->expertise_info_title) ) {{$info_list->expertise_info_title}} @endif</td>

                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.expertise-info.edit', $info_list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-edit"></i></a>
                                   <form action="{{route('admin.expertise-info.destroy', $info_list->id)}}" method="POST">
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

