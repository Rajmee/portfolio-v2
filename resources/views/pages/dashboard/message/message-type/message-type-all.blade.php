@extends('layouts.admin.app')
@section('content')

<div class="page-header">
    <h4 class="page-title">All Type</h4>
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
            <a href="{{route('admin.message-type.all')}}">All Type</a>
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
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($message_type)>0)
                        @foreach ($message_type as $list)
                        <tr>
                            <td>@if (!empty ($list->topic) ) {{$list->topic}} @endif</td>

                            <td>
                                <div class="button-group">
                                    <a href="{{route('admin.message-type.edit', $list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-edit"></i></a>
                                    <form action="{{route('admin.message-type.destroy', $list->id)}}" method="POST">
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
