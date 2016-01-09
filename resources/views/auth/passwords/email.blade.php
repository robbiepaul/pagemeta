@extends('layout')

@section('content')

    <header class="major padding-top-xl">
        <h2>Get the link to reset your password...</h2>
    </header>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        {!! csrf_field() !!}

        <div class="row uniform 100%">
            <div class="8u$ 12u$(xsmall)">
                <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Enter your email address">
                @if (isset($errors) && $errors->has('email'))
                    <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                @endif
            </div>


            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Send reset password link" class="special"></li>
                </ul>
            </div>
        </div>
    </form>

@endsection
