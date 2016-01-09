@extends('layout')

@section('content')

    <header class="major padding-top-xl">
        <h2>Dashboard</h2>
    </header>

    {{--<ul class="alt">--}}
        {{--<li></li>--}}
        {{--<li></li>--}}
    {{--</ul>--}}
    <div class="row uniform 100%">
        <div class="8u$ 12u$(xsmall)">
            <div class="table-wrapper">
                <table class="alt">
                    <tbody>
                        <tr>
                            <td><strong>Your API key</strong></td>
                            <td class="align-right">{{ \Auth::user()->api_key }}</td>

                        </tr>
                        <tr>
                            <td><strong>Requests left this month</strong></td>
                            <td class="align-right">{{ number_format(\Auth::user()->requests_left) }}</td>

                        </tr>
                        <tr>
                            <td><strong>Next month starts</strong></td>
                            <td class="align-right">{{ \Auth::user()->requests_starts_at->addMonth()->format('jS F Y H:ia') }}</td>

                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
