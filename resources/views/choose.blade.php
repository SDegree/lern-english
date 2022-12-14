@extends('partials.main')

@section('container')
    <h1 class="mt-5 mb-3">Choose Languange</h1>
    <ul class="list-group choose">
        <li class="list-group-item"><a href="/task?page=1" class="text-decoration-none">English</a></li>
        <li class="list-group-item"><a href="/task/ind?page=1" class="text-decoration-none">Indonesia</a></li>
    </ul>
@endsection
