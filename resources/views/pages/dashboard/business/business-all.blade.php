@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Business</h4>
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
                <a href="{{route('admin.business-info.all')}}">All Business</a>
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
                            <th>Business category</th>
                            <th>Business position</th>
                            <th>Business Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($business_info_lists)>0)
                        @foreach ($business_info_lists as $info_list)
                        <tr>
                            <td>@if (!empty ($info_list->business_list_img) ) <div class="avatar"><img class="avatar-img" src="{{url($info_list->business_list_img)}}"></div>@endif</td>
                            <td>@if (!empty ($info_list->business_list_title) ) {{$info_list->business_list_title}} @endif</td>
                            <td>@if (!empty ($info_list->business_list_pos) ) {{$info_list->business_list_pos}} @endif</td>
                            <td>@if (!empty ($info_list->business_list_comp) ) {{$info_list->business_list_comp}} @endif</td>

                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.business-info.edit', $info_list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-edit"></i></a>
                                   <form action="{{route('admin.business-info.destroy', $info_list->id)}}" method="POST">
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

