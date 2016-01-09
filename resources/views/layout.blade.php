<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    @include('favicon')

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}


		<!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/railscasts.min.css">
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/site.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="/assets/css/ie9.css" /><![endif]-->

</head>
<body>
@include('analytics')

<!-- Header -->
<section id="header" class="header-main-fixed">
    <div class="container">
        <a href="/" style=""><span class="icon fa-2x fa-code"></span>
        <h4><strong>PageMeta </strong><small style="font-size: 0.8em;margin-left:10px">API</small></h4></a>

        <ul class="actions uniform align-right">
            @if(\Auth::check())
                @if(!request()->is('docs'))
                <li><a href="/docs" class="button small">Read the docs</a></li>
                @endif
                @if(!request()->is('dashboard'))
                <li><a href="/dashboard" class="button small special">Dashboard</a></li>
                @else
                <li><a href="/logout" class="button small special">Logout</a></li>
                @endif

            @else
                <li><a href="/login" class="button small">Log in</a></li>
                <li><a href="/register" class="button small special">Sign Up</a></li>
            @endif
        </ul>
    </div>
</section>


<section id="one">
    <div class="container">

        @yield('content')

        <div class="margin-bottom-xl"></div>

    </div>
</section>

<!-- Footer -->
<section id="footer" class="footer-main">
    <ul class="icons">
        <li><a href="http://twitter.com/robbiepaulco" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="https://github.com/robbiepaul" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
        <li><a href="mailto:me@robbiepaul.co" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">
        <li>Code: <a href="http://robbiepaul.co">Robbie Paul</a><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</section>

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.scrolly.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script src="/assets/js/main.js"></script>
<script>
    var API_URL = '{{ config('app.api_url') }}';


    var $el = $('.json').eq(0);
    var $resultSpan = $('span.result');

    function updateResultBlock(result) {
        var str = JSON.stringify(result, undefined, 3);
        $el.html(str);
        hljs.highlightBlock($el[0]);
    }

    function updateResultSpan(data) {
        var str = $.param(data);
        $resultSpan.text('?'+str)
    }

    function doRequest() {
        var page = $('#page').val();
        $el.html('Loading...');
        $resultSpan.text('');
        if(page.length > 0) {
            var data = {page:page};
            $.get( API_URL, data, function( response ) {
                updateResultBlock(response);
                updateResultSpan(data);
            });
        }
    }

    $(document).ready(function() {
        var result = {"success":"true","data":{"title":"Google","opengraph":[],"twitter":[],"article":[],"applinks":[],"images":[{"src":"http:\/\/google.com\/images\/icons\/product\/chrome-48.png"}]}};
        //updateResultBlock(result);

        $('#page').on('blur', doRequest);
        $('#send_request').on('click', function(e){
            e.preventDefault();
            doRequest();
        });
    });
</script>

</body>
</html>