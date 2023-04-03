@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">All Message</h4>
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
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Topic type</th>
                            <th>Appointment Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($message_list)>0)
                        @foreach ($message_list as $list)
                        <tr>
                            <td>@if (!empty ($list->name) ) {{$list->name}} @endif</td>
                            <td>@if (!empty ($list->email) ) {{$list->email}} @endif</td>
                            <td>@if (!empty ($list->message_type->topic) ) {{$list->message_type->topic}} @endif</td>
                            {{-- <td> {{$list->message_type->topic}} </td> --}}
                            <td>@if (!empty ($list->appoint_date) ) {{$list->appoint_date}} @endif</td>

                            <td>
                                <div class="button-group">
                                    <a href="{{route('admin.message.view', $list->id)}}" class="btn btn-secondary"><i class="fi fi-rr-eye"></i></a>
                                    {{-- <form action="{{route('admin.message.destroy', $list->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                    </form> --}}
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

