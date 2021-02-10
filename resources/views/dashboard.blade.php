@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5">
        <h1>Witaj {{ auth()->user()->name }}, w panelu administratora!</h1>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush