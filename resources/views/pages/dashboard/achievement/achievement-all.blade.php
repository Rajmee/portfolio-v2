@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Achievement</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('admin.home')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item" style="width: 700px;">
                <a href="{{route('admin.achievement-info.all')}}">All Achievement</a>
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
                            <th>Achievement Image</th>
                            <th>Achievement Title</th>
                            <th>Achievement Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($achievement_info_lists)>0)
                        @foreach ($achievement_info_lists as $info_list)
                        <tr>

                            <td>@if (!empty ($info_list->org_img) ) <div class="avatar"><img  class="avatar-img" src="{{url($info_list->org_img)}}"></div>@endif</td>
                            <td>@if (!empty ($info_list->org_title) ) {{$info_list->org_title}} @endif</td>
                            <td>@if (!empty ($info_list->org_date) ) {{$info_list->org_date}} @endif</td>

                            <td>
                                <div class="button-group">
                                   <a href="{{route('admin.achievement-info.edit', $info_list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-edit"></i></a>
                                   <form action="{{route('admin.achievement-info.destroy', $info_list->id)}}" method="POST">
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

