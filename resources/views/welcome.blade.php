@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        @if (!Auth::check())

                        <p>Willkommen auf Patronus.</p>

                      <p>Saisonal-affektive Störung, auch Winterdepression genannt, ist ein Phänomen, welches viele Menschen in den dunklen Wintermonaten betrifft. Der Mangel an Sonnenlicht kann verschiedene Symptome auslösen, unter anderem Müdigkeit, Stimmungsschwankungen und eine erhöhte Gleichgültigkeit.
Es gibt mögliche Maßnahmen um dem entgegenzuwirken, wie etwa Tageslichtlampen oder Nahrungsergänzungsmittel wie Vitamin-D-Kapseln oder Fischöl. Jedoch ist die Wirkung von Person zu Person unterschiedlich und nur schwer messbar.
Um genauer nachzuverfolgen welche Maßnahmen dieses Leiden lindern, kann ein Stimmungstagebuch geführt werden. Anhand der so gesammelten Daten kann jeder persönlich nachverfolgen wie sich das Stimmungsbild durch verschiedene Maßnahmen verändert.
Ziel dieses Projekts ist es eine Gesamtlösung zu entwickeln, die es einem erlaubt sicher über eine Webanwendung die eigene Stimmung zu dokumentieren und später einzusehen.
</p>

                        @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
