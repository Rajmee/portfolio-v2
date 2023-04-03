@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Media file manager</h2>
      <iframe src="/laravel-filemanager?editor=src&type=Images" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </div>
  </div>
@endsection


