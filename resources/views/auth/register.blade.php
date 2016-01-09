@extends('layout')

@section('content')

    <header class="major padding-top-xl">
        <h2>Register for a free API key</h2>
    </header>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
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
            <div class="8u$ 12u$(xsmall)">
                <input type="checkbox" id="notify" name="notify" checked="checked" value="1">
                <label for="notify">Notify me when there's any updates to the API</label>
            </div>

            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Sign up" class="special"></li>
                </ul>
            </div>
        </div>
    </form>
    <div class="8u$ 12u$(xsmall)">
        <hr >
    </div>
    <p class="text-muted small"><sup>* Your API key will be emailed to you</sup></p>


@endsection
