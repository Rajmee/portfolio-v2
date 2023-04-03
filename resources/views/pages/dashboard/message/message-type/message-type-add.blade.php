@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Message Type</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            {{-- <a href="{{route('admin.dashboard')}}">Hero</a> --}}
            <a href="#">Message</a>
        </li>
    </ul>
 </div>


 <div class="card">
    <form action="{{route('admin.message-type.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
           <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="medialist_title">Message Type</label>
                        <input type="text" class="form-control" id="topic" name="topic" placeholder="Type message type" required>
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
