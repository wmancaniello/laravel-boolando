@extends('layouts.app')

{{-- HOME --}}
@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4 mb-4">
                    {{-- CARD --}}
                    @include('partials.card')
                    {{-- CARD --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
