@extends('layout')

@section('content')

    <header class="major padding-top-xl">
        <h2>Sign in to your account</h2>
    </header>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}
        <div class="row uniform 100%">
            <div class="8u$ 12u$(xsmall)">
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
                @if (isset($errors) && $errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="8u$ 12u$(xsmall)">
                <input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password" required>
                @if (isset($errors) &&  $errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Log in" class="special"></li>
                </ul>
            </div>
        </div>
    </form>
    <div>
        <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
    </div>



@endsection
