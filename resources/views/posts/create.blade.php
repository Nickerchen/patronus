<!-- resources/views/notes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Wie fühlen Sie sich im Moment?</div>
                    <div class="panel-body">

                        <form action="{{ url('create') }}" method="POST" class="form" role="form">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <textarea class="form-control" name="body" rows="5" placeholder="...schreiben Sie einfach in dieses Feld" required>{{ old('body') }}</textarea>
                                <p></p>
                                <div class="form-group" id="emojis">
                                  <input type="radio" name="emotion" id="happy" value=1 />
                                  <label for="happy"><img height="42" width="42" src="{{ asset('img/happy.png') }}" alt="I'm happy" /></label>
                                  <input type="radio" name="emotion" id="neutral" value=0 />
                                  <label for="neutral"><img height="42" width="42" src="{{ asset('img/neutral.png') }}" alt="I feel alright" /></label>
                                  <input type="radio" name="emotion" id="sad" value=-1 />
                                  <label for="sad"><img height="42" width="42" src="{{ asset('img/sad.png') }}" alt="I'm sad" /></label>
                              </div>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button class="btn btn-primary pull-right">Speichern</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
