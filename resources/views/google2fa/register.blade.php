
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Richte Google Authenticator ein</div>

                <div class="panel-body" style="text-align: center;">
                    <p>Richte die 2-Faktor-Authentifizierung ein indem du diesen Barcode einscannst. Alternativ kannst du auch diesen Code {{ $secret }} verwenden.</p>
                    <div>
                        <img src="{{ $QR_Image }}">
                    </div>
                    <p>Du musst die Google-Authenticator-App zunächst einrichten! Ansonsten ist der Login unmöglich</p>
                    <div>
                        <a href="/complete-registration"><button class="btn btn-primary">Registratierung abschließen</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
