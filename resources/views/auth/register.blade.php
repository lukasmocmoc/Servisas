@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <a href="/">
            <img class="mb-4" href="/" src="{{ URL::to('/assets/img/logo.png') }}" alt="" width="72" height="57">
        </a>
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">El paštas</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Vartotojo vardas</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
{{--        <div class="form-group form-floating mb-3">--}}
{{--            <input type="file" class="form-control" name="file" value="" placeholder="Username" required="required" autofocus>--}}
{{--            <label for="floatingName">Nuotrauka</label>--}}
{{--            @if ($errors->has('file'))--}}
{{--                <span class="text-danger text-left">{{ $errors->first('username') }}</span>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="form-group form-floating mb-3">--}}
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required="required" autofocus>
            <label for="floatingName">Vardas Pavarde</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Slaptažodis</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Pakartoti slaptažodi</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('auth.partials.copy')
    </form>
@endsection
