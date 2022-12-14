@extends('partials.main')

@section('container')
    <form action="/nextLevel" method="post">
        @csrf
        <h1 class="mt-5 mb-3 fw-bold fst-italic">Conratulation</h1>
        @if ($levels == auth()->user()->unlock_level)
            <h2 class="mb-3">Anda telah berhasil menyelesaikan seluruh level</h2>
            <a href="/" class="btn btn-primary">Back</a>
        @else
            <h2 class="mb-3">Anda telah berhasil menyelesaikan level sebelumnya</h2>
            <p class="ms-3">Siap untuk naik ke level selanjutnya?</p>
            <input name="unlock_level" hidden type="number" value="{{ auth()->user()->unlock_level + 1 }}">

            <button type="submit" class="btn btn-primary mt-3">Level Selanjutnya</button>
        @endif
    </form>
@endsection
