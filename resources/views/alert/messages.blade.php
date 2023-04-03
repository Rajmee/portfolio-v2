@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        <button type="button" class="btn-close" aria-label="Close"></button>
        <strong>Error!</strong>{{$error}}
    </div>
    @endforeach
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="btn-close" aria-label="Close"></button>
        <strong>Error!</strong>{{session('error')}}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="btn-close" aria-label="Close"></button>
        <strong>success!</strong>{{session('success')}}
    </div>
@endif