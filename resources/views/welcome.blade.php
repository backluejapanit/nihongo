@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 offset-md-1">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nulla nesciunt dicta adipisci minus? Sint officia amet accusantium numquam libero iste provident cumque fuga? Est porro officiis illo quia dolor.</p>
        </div>
        <div class="col-md-4 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3 class="text-center">Login</h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="mt-4">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input placeholder="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            @if (Route::has('password.request'))
                            <div class="">
                                <a class="btn btn-link pl-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            @endif
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="mt-2" style="display: flex; justify-content: center">
                            <a href="/register" class="btn btn-primary">
                                {{ __('????????????') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection