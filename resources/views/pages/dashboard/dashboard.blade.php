@extends('layouts.admin.app')
@section('content')
<div class="page-header">
    <h4 class="page-title">Dashboard</h4>
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
            <a href="#">Dashboard</a>
        </li>
    </ul>
 </div>

 <div class="row">
    <div class="col-md-4">
        <div class="card card-info card-annoucement card-round card-dashboard__inner">
            <div class="card-body text-center">
                <div class="card-opening">Welcome, {{ Auth::user()->name }}</div>
                <div class="card-desc">
                    Hello! Welcome to your awesome website dashboard. You can view edit changed everything from the left side control panel!
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-secondary card-annoucement card-round  card-dashboard__inner">
            <div class="card-body text-center">
                <div class="card-opening">Header Settings</div>
                <div class="card-desc">
                    You can upload header logo, Contact information, Buttons & many more from header settings.
                </div>
                <div class="card-detail">
                <a href="{{route('admin.header')}}"> <div class="btn btn-light btn-rounded">Header Settings</div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-danger card-annoucement card-round  card-dashboard__inner">
            <div class="card-body text-center">
                <div class="card-opening">Footer Settings</div>
                <div class="card-desc">
                   Manage footer page, links, contact infomration & many more from footer settings
                </div>
                <div class="card-detail">
                     <a href="{{route('admin.footer')}}"><div class="btn btn-light btn-rounded">Footer Settings</div></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6">
        <div class="card l-bg-blue-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                <div class="mb-4">
                    <h5 style="color:white" class="card-title mb-0">Visitors</h5>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            {{ $totalVisitors }}
                        </h2>
                    </div>
                    <div class="col-4 text-right">
                        <span><?php echo (($totalVisitors*100)/20000)*10 ?>% <i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalVisitors*100)/20000)*10 ?>%;"></div>
                </div>
            </div>
        </div>
    </div>

<div class="col-md-8">
    <h1>Visitor Information</h1>
    <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
        width="100%">
        <thead>
            <tr>
                <th class="th-sm">IP
                </th>
                <th class="th-sm">Country
                </th>
                <th class="th-sm">City
                </th>
                <th class="th-sm">Post Code
                </th>
                <th class="th-sm">Date Visit
                </th>
            </tr>
        </thead>
        <tbody>
            @if(count($totalVisitorslist)>0)
            @foreach ($totalVisitorslist as $list)
            <tr>
                <td>@if (!empty ($list->ip_address) ) {{$list->ip_address}} @endif</td>
                <td>@if (!empty ($list->country) ) {{$list->country}} @endif</td>
                <td>@if (!empty ($list->city) ) {{$list->city}} @endif</td>
                <td>@if (!empty ($list->post_code) ) {{$list->post_code}} @endif</td>
                <td>@if (!empty ($list->created_at->format('d/m/Y')) ) {{$list->created_at->format('d/m/Y')}} @endif</td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <th>IP
                </th>
                <th>Country
                </th>
                <th>City
                </th>
                <th>Post code
                </th>
                <th>Date visit
                </th>
            </tr>
        </tfoot>
    </table>
</div>

</div>


@endsection
