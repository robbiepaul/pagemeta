@extends('layout')

@section('content')


    <header class="major padding-top-xl">
        <h2>Documentation</h2>
        <p>Version 1.0</p>
    </header>


    <div class="row 150%">
        <div class="9u 12u$(medium)">
            <article class="api-endpoint">
                <header class="align-left">
                    <span>GET</span> {{ config('app.api_url') }}
                </header>
                <ul class="alt">
                    <li><strong>Description</strong></li>
                    <li>The main endpoint for the API. <br><em>Basic example: {{ config('app.api_url') }}?page=google.com</em> </li>
                </ul>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                            <tr>
                                <th width="20%">Parameters</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>page</strong></td>
                                <td class="align-left"><code>Required</code> The URL of the page you want to parse</td>
                            </tr>
                            <tr>
                                <td><strong>api_key</strong></td>
                                <td class="align-left">
                                    <code class="optional">Optional</code> Your API key. @if(!\Auth::check())<em>Unregistered users are limited to {{ config('app.defaults.requests_per_day') }} requests per day</em> @else <em>Users are limited to {{ config('app.defaults.requests_per_month') }} requests per month</em> @endif
                                </td>
                            </tr>
                            <tr>
                                <td><strong>format</strong></td>
                                <td class="align-left">
                                    <code class="optional">Optional</code> The format of the data returned. <em>Defaults to: <strong>json</strong> (Currently in beta: <strong>xml</strong>)</em>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>data[]</strong></td>
                                <td class="align-left">
                                    <code class="optional">Optional</code> Data you require, excludes everything else <em>eg. data[]=title&data[]=images</em>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>


            <article class="api-endpoint">
                <header class="align-left">
                    <span>GET</span> {{ config('app.api_url') }}&lt;data&gt;/
                </header>
                <ul class="alt">
                    <li><strong>Description</strong></li>
                    <li>For returning just one set of data. <br><em>Basic example: {{ config('app.api_url') }}images/?page=google.com will return all the images only</em> </li>
                </ul>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                        <tr>
                            <th width="20%">Parameters</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>data</strong></td>
                            <td class="align-left">
                                <code>Required</code> Data set you require, excludes everything else
                            </td>
                        </tr>
                        <tr>
                            <td><strong>page</strong></td>
                            <td class="align-left"><code>Required</code> The URL of the page you want to parse</td>
                        </tr>
                        <tr>
                            <td><strong>api_key</strong></td>
                            <td class="align-left">
                                <code class="optional">Optional</code> Your API key. @if(!\Auth::check())<em>Unregistered users are limited to {{ config('app.defaults.requests_per_day') }} requests per day</em> @else <em>Users are limited to {{ config('app.defaults.requests_per_month') }} requests per month</em> @endif
                            </td>
                        </tr>
                        <tr>
                            <td><strong>format</strong></td>
                            <td class="align-left">
                                <code class="optional">Optional</code> The format of the data returned. <em>Defaults to: <strong>json</strong> (Currently in beta: <strong>xml</strong>)</em>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </article>


            <article class="api-endpoint">
                <header class="align-left">
                    <span>GET</span> {{ config('app.api_url') }}me/
                </header>
                <ul class="alt">
                    <li><strong>Description</strong></li>
                    <li>Returns how many requests you have left and when they reset</li>
                </ul>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                        <tr>
                            <th width="20%">Parameters</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>api_key</strong></td>
                            <td class="align-left">
                                <code class="optional">Optional</code> Your API key. @if(!\Auth::check())<em>Unregistered users are limited to {{ config('app.defaults.requests_per_day') }} requests per day</em> @else <em>Users are limited to {{ config('app.defaults.requests_per_month') }} requests per month</em> @endif
                            </td>
                        </tr>
                        <tr>
                            <td><strong>format</strong></td>
                            <td class="align-left">
                                <code class="optional">Optional</code> The format of the data returned. <em>Defaults to: <strong>json</strong> (Currently in beta: <strong>xml</strong>)</em>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </article>

        </div>
        <div class="3u 12u$(medium)">
            <article class="data-sets">
                <header>
                    <strong>Data sets available</strong>
                </header>
                <ul class="alt">
                    <li>title<br>
                        <sup><em>Page title</em></sup>
                    </li>
                    <li>description<br>
                        <sup><em>Meta description</em></sup>
                    </li>
                    <li>language<br>
                        <sup><em>Meta language</em></sup></li>
                    <li>author<br>
                        <sup><em>Meta author</em></sup></li>
                    <li>keywords<br>
                        <sup><em>Meta keywords</em></sup></li>
                    <li>robots<br>
                        <sup><em>Meta robots</em></sup></li>
                    <li>viewport<br>
                        <sup><em>Meta viewport</em></sup></li>
                    <li>tags<br>
                        <sup><em>Meta tags</em></sup></li>
                    <li>canonical<br>
                        <sup><em>Canonical rel link</em></sup></li>
                    <li>favicon<br>
                        <sup><em>Favicon link</em></sup></li>
                    <li>appicon<br>
                        <sup><em>iOS/Android App icons</em></sup></li>
                    <li>appicon<br>
                        <sup><em>iOS/Android App icons</em></sup></li>
                    <li>opengraph<br>
                        <sup><em>Open graph properties</em></sup></li>
                    <li>twitter<br>
                        <sup><em>Twitter properties</em></sup></li>
                    <li>article<br>
                        <sup><em>Article properties</em></sup></li>
                    <li>applinks<br>
                        <sup><em>Links to related device apps</em></sup></li>
                    <li>linkeddata<br>
                        <sup><em>Linked Data (ld+json)</em></sup></li>
                    <li>microdata<br>
                        <sup><em>Parsed microdata and schema</em></sup></li>
                    <li>images<br>
                        <sup><em>All the images and properties on the page</em></sup></li>
                </ul>
            </article>
        </div>





    </div>

@endsection


