@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                @foreach ($notifications as $notification)
                    <li class="list-group-item">{{ $notification->message }}</li>
                @endforeach
            </ul>
        </div>
    </div> 
</div>
@endsection
