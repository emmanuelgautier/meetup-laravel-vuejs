@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Notification</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ route('notifications.store') }}" method="POST">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="message">Message</label>
                                <div class="col-md-8">
                                    <textarea id="message" name="message" type="text" class="form-control input-md" value="{{ old('message') }}" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-4">
                                    <button class="btn btn-primary" type="submit">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection