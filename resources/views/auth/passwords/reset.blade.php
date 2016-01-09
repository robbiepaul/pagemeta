@extends('layout')

@section('content')

    <header class="major padding-top-xl">
        <h2>Choose a new password...</h2>
    </header>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="row uniform 100%">
            <div class="8u$ 12u$(xsmall)">
                <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Enter your email address">
                @if (isset($errors) && $errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="8u$ 12u$(xsmall)">
                <input type="password" class="form-control" name="password" placeholder="Type your new password">
                @if (isset($errors) && $errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="8u$ 12u$(xsmall)">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your new password">
                @if (isset($errors) && $errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Reset Password" class="special"></li>
                </ul>
            </div>
        </div>
    </form>


@endsection
