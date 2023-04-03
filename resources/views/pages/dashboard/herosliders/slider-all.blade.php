@extends('layouts.admin.app')
@section('content')

<div class="page-header">
    <h4 class="page-title">All Sliders</h4>
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
            <a href="{{route('admin.sliders.all')}}">All Sliders</a>
        </li>
    </ul>

</div>




<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($heroslider_list)>0)
                        @foreach ($heroslider_list as $list)
                        <tr>
                            <td>@if (!empty ($list->hero_title) ) {{$list->hero_title}} @endif</td>
                            <td>@if (!empty ($list->hero_img) ) <div class="avatar"><img class="avatar-img" src="{{url($list->hero_img)}}"></div>@endif</td>

                            <td>
                                <div class="button-group">
                                    <a href="{{route('admin.sliders.edit', $list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-edit"></i></a>
                                    <form action="{{route('admin.sliders.destroy', $list->id)}}" method="POST">
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
