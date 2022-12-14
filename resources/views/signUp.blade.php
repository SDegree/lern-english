@extends('partials.main')

@section('container')
    <form action="signUp" method="post">
        @csrf
        <h1 class="mt-5 mb-3">Sign Up</h1>
        @if (session('signUpErr'))
            <div class="mb-4 alert alert-danger">
                <p>{{ session()->get('signUpErr') }}</p>
            </div>
        @endif
        @if (!empty($errors->all()))
            <div class="mb-4 alert alert-danger">
                @foreach ($errors->all() as $message)
                    <p>{{ $message }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="floatingInput"
                placeholder="Ryuu">
            <label for="floatingInput">User Name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" value="{{ old('password') }}" id="floatingPassword"
                placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-5">
            <input type="password" name="coffPswd" class="form-control" value="{{ old('coffPswd') }}" id="floatingPassword"
                placeholder="Password">
            <label for="floatingPassword">Confirmation Password</label>
            @error('coffPswd')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
@endsection
