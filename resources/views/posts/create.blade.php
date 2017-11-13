<!-- resources/views/notes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">How do you feel?</div>
                    <div class="panel-body">
                        <form action="{{ url('create') }}" method="POST" class="form" role="form">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <textarea class="form-control" name="body" rows="15" placeholder="...feel free to type here" required>{{ old('body') }}</textarea>

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button class="btn btn-primary pull-right">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection