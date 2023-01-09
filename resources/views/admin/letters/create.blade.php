@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="mt-5">Inserisci una nuova lettera</h2>
        <div class="row">


            <div class="col-8">
                <form action="{{ route('admin.letters.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Cognome</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
