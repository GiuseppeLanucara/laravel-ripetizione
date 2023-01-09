@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-5">Elenco lettere</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome e Cognome</th>
                            <th scope="col">Data</th>
                            <th scope="col">Regalo</th>
                            <th scope="col">Regalo Consegnato</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($letters as $letter)
                            <tr>
                                <th scope="row">{{ $letter->name }} {{ $letter->lastname }}</th>
                                <td>{{ $letter->arrival_date }}</td>
                                <td>{{ $letter->gift }}</td>
                                <td>{{ $letter->delivered === 0 ? 'No' : 'Si' }}</td>
                                <td><a class="btn btn-success"
                                        href="{{ route('admin.letters.show', $letter->id) }}">Dettagli</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
