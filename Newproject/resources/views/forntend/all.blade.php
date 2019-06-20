@extends('forntend.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
                @foreach ($link as $item)
            <div class="col-md-4">
             {{$item}}
            </div>
            @endforeach
        </div>
    </div>
@endsection