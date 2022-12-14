@extends('partials.main')

@section('container')
    <form action="signIn" method="post">
        @csrf
        <h1 class="mt-5 mb-3">Sign In</h1>
        @if (session('loginErr') || session('signUpSucc'))
            <div class="mb-4 alert alert-{{ session('loginErr') ? 'danger' : 'info' }}">
                <p>{{ session()->get('loginErr') }}</p>
                <p>{{ session()->get('signUpSucc') }}</p>
            </div>
        @endif
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-5">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
@endsection
