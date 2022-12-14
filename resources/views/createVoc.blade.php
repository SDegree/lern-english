@extends('partials.main')

@section('container')
    <form action="/" method="POST">
        @csrf

        <div class="input-group mt-5 mb-3">
            <span class="input-group-text">English</span>
            <textarea class="form-control" name="vocabulary" aria-label="With textarea"></textarea>
        </div>

        <div class="input-group mb-5">
            <span class="input-group-text">Indonesia</span>
            <textarea class="form-control"name="kosakata" aria-label="With textarea"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
