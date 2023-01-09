@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-5">Lettera di {{ $letter->name }} {{ $letter->lastname }}</h2>
        <div class="row justify-content-between">
            <div class="col-5">
                <ul class="list-group">
                    <li class="list-group-item"> <strong>Indirizzo:</strong>
                        {{ $letter->address }}, {{ $letter->city }}
                    </li>
                    <li class="list-group-item"> <strong>Data:</strong>
                        {{ $letter->arrival_date }}
                    </li>
                    <li class="list-group-item"> <strong>Regalo:</strong>
                        {{ $letter->gift }}
                    </li>
                    <li class="list-group-item"> <strong>Comportamento:</strong>
                        @if ($letter->rating === 1 || $letter->rating === 2)
                            <span class="text-danger">cattivo</span>
                        @elseif($letter->rating === 3 || $letter->rating === 4)
                            <span class="text-warning">normale</span>
                        @else
                            <span class="text-success"></span>
                        @endif
                    </li>
                    <li class="list-group-item"> <strong>Consegnato:</strong>
                        {{ $letter->delivered === 0 ? 'No' : 'Si' }}
                    </li>
                </ul>
            </div>
            <div class="col-6">
                {{ $letter->message }}
            </div>
        </div>
    </div>
@endsection
