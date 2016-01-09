@extends('emails.layout')


@section('preview')
Here's your api key...
@endsection

@section('content')

    <h1>Welcome!</h1>

    <p><strong>API Key</strong>: {{ $user->api_key }}</p>

    @include('emails.button', ['action' => 'Read the documentation', 'action_link' => url('docs')])

@endsection