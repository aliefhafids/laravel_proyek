@extends('layouts.app')

@section('container')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                </div>
                @endif

                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Please Sign-in</h1>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error ('email')
                    is-invalid @enderror" id="floatingInput" placeholder="Email address" autofocus required>
                            <label for="floatingInput">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword"
                                placeholder="Password" required>
                             <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                    </form>
                    <small class="d-block text-center mt-3">
                        Not registered? You're not Admin!</a>
                    </small>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
