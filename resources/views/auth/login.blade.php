@extends('layouts.app')

@section('content')

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in to your account</h2>
  </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="card">

                <div class="card-body">
                    <form class="space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Email Address') }}</label>

                            <div class="mt-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md bg-gray-700 px-3 py-2  text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link font-semibold text-gray-600 hover:text-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="/register" class="font-semibold leading-6 text-gray-600 hover:text-gray-400">Register</a>
    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection