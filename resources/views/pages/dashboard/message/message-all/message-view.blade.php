@extends('layouts.admin.app')
@section('content')

    <div class="page-header">
        <h4 class="page-title">Message</h4>
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
                <a href="{{route('admin.message.all')}}">Message</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.message.view', $message_details->id)}}">Message View</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Sender name:  <b>{{$message_details->name}}</b></div>
        </div>
            <div class="card-body">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="medialist_title">Email</label>
                            <h5 style="padding: 3%" type="text" class="card" value="">{{$message_details->email}}</h5>
                        </div>

                        <div class="form-group">
                            <label for="medialist_title">Message topic</label>
                            <h5 style="padding: 3%" type="text" class="card" value="">{{$message_details->message_type->topic}}</h5>
                        </div>

                        <div class="form-group">
                            <label for="medialist_title">Appointment data</label>
                            <h5 style="padding: 2%" type="text" class="card" value="">{{$message_details->appoint_date}}</h5>
                        </div>

                        <div class="form-group">
                            <label for="medialist_title">Message</label>
                            <p style="padding: 3%" type="text" class="card" value="">{{$message_details->message}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection



