@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="error dashblock">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class="success dashblock">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
    <div class="error dashblock">
        {{session('error')}}
    </div>
@endif