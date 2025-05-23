@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger m-2 alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success m-2 alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger m-2 alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{session('error')}}
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info m-2 alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{session('info')}}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning m-2 alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{session('warning')}}
    </div>
@endif
