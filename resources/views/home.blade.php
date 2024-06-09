@extends('layouts.app')

{{-- HOME --}}
@section('content')
    <div class="container mt-5">
        <div class="row">
            {{-- Card --}}
            <div class="col-4 mb-4">
                <div class="ms_card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="">
                    <div class="card-body">
                        <div class="ms_info d-flex flex-column">
                            <p>marca</p>
                            <h5 class="card-title">Titolo</h5>
                            <p class="card-text">prezzo + sconto</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Card --}}
        </div>
    </div>
@endsection
