@extends('emails.layout')


@section('preview')
    Reset password instructions
@endsection

@section('content')

    <h1>Reset your password</h1>

    <p>It happens to us all, follow the link and we'll set you a new password.</p>

    @include('emails.button', ['action' => 'Reset your password', 'action_link' =>  url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset())])

@endsection

