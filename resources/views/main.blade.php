<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		{!! SEOMeta::generate() !!}
		{!! OpenGraph::generate() !!}
		{!! Twitter::generate() !!}


		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/railscasts.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/site.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<div class="inner">
					<span class="icon major fa-code"></span>
					<h1><strong>PageMeta </strong><small style="font-size: 0.8em;margin-left:10px">API</small></h1>
					<p>A simple API to parse important meta and related data from a web page</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Try it out</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<form method="post" action="#">
						<div class="row uniform 50%">
							<div class="9u 12u$(xsmall)">
								<input type="text" name="page" id="page" value="" placeholder="Type a url to parse...">
							</div>
							<div class="3u$ 12u$(xsmall)">
								<a href="#" class="button special fit icon fa-rocket" id="send_request" style="background-image: url(images/pic02.jpg) !important;">Send Request</a>
							</div>
						</div>
					</form>
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<header class="major">
								<h2>Grab the data you need instantly</h2>
							</header>
							<p>We parse the page you're after for several sets of data, including:</p>
							<ul>
								<li>Title</li>
								<li>Description</li>
								<li>Keywords</li>
								<li>Images</li>
								<li>Opengraph data</li>
								<li>Microdata</li>
								<li style="opacity: 0.8">... plus more</li>
							</ul>
						</div>
						<div class="6u$ 12u$(medium) important(medium)">
							<header>
								<h3 style="text-transform: uppercase; border-bottom: 1px solid rgba(144, 144, 144, 0.5);">Result</h3>
								<p style="margin-bottom: 0"><strong style="margin-right:10px">GET:</strong> {{ config('app.api_url') }} <span class="result"></span>	</p>
							</header>
							<pre>
								<code class="json"></code>
							</pre>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>Why not sign up for an API key?</h2>
					</header>
					<ul style="list-style: none !important;">
						<li><strong>Unregistered</strong> users are limited to <strong>100 requests per day</strong></li>
						<li><strong>Free registered</strong> users are limited to <strong>20,000 requests per month</strong></li>
					</ul>
					<ul class="actions uniform">
						<li><a href="/register" class="button special">Sign Up</a></li>
						<li><a href="/docs" class="button">Read the docs</a></li>
					</ul>
				</div>
			</section>


			{{--<section id="five" class="main style1">--}}
				{{--<div class="container">--}}
					{{--<header class="major special">--}}
						{{--<h2>Elements</h2>--}}
					{{--</header>--}}

					{{--<section>--}}
						{{--<h4>Text</h4>--}}
						{{--<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.--}}
						{{--This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.--}}
						{{--This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>--}}
						{{--<hr />--}}
						{{--<header>--}}
							{{--<h4>Heading with a Subtitle</h4>--}}
							{{--<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>--}}
						{{--</header>--}}
						{{--<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>--}}
						{{--<header>--}}
							{{--<h5>Heading with a Subtitle</h5>--}}
							{{--<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>--}}
						{{--</header>--}}
						{{--<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>--}}
						{{--<hr />--}}
						{{--<h2>Heading Level 2</h2>--}}
						{{--<h3>Heading Level 3</h3>--}}
						{{--<h4>Heading Level 4</h4>--}}
						{{--<h5>Heading Level 5</h5>--}}
						{{--<h6>Heading Level 6</h6>--}}
						{{--<hr />--}}
						{{--<h5>Blockquote</h5>--}}
						{{--<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>--}}
						{{--<h5>Preformatted</h5>--}}
						{{--<pre><code>i = 0;--}}

{{--while (!deck.isInOrder()) {--}}
{{--print 'Iteration ' + i;--}}
{{--deck.shuffle();--}}
{{--i++;--}}
{{--}--}}

{{--print 'It took ' + i + ' iterations to sort the deck.';</code></pre>--}}
					{{--</section>--}}

					{{--<section>--}}
						{{--<h4>Lists</h4>--}}
						{{--<div class="row">--}}
							{{--<div class="6u 12u$(medium)">--}}
								{{--<h5>Unordered</h5>--}}
								{{--<ul>--}}
									{{--<li>Dolor pulvinar etiam.</li>--}}
									{{--<li>Sagittis adipiscing.</li>--}}
									{{--<li>Felis enim feugiat.</li>--}}
								{{--</ul>--}}
								{{--<h5>Alternate</h5>--}}
								{{--<ul class="alt">--}}
									{{--<li>Dolor pulvinar etiam.</li>--}}
									{{--<li>Sagittis adipiscing.</li>--}}
									{{--<li>Felis enim feugiat.</li>--}}
								{{--</ul>--}}
							{{--</div>--}}
							{{--<div class="6u$ 12u$(medium)">--}}
								{{--<h5>Ordered</h5>--}}
								{{--<ol>--}}
									{{--<li>Dolor pulvinar etiam.</li>--}}
									{{--<li>Etiam vel felis viverra.</li>--}}
									{{--<li>Felis enim feugiat.</li>--}}
									{{--<li>Dolor pulvinar etiam.</li>--}}
									{{--<li>Etiam vel felis lorem.</li>--}}
									{{--<li>Felis enim et feugiat.</li>--}}
								{{--</ol>--}}
								{{--<h5>Icons</h5>--}}
								{{--<ul class="icons">--}}
									{{--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>--}}
									{{--<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>--}}
									{{--<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>--}}
									{{--<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>--}}
								{{--</ul>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<h5>Actions</h5>--}}
						{{--<div class="row">--}}
							{{--<div class="6u 12u$(medium)">--}}
								{{--<ul class="actions">--}}
									{{--<li><a href="#" class="button special">Default</a></li>--}}
									{{--<li><a href="#" class="button">Default</a></li>--}}
								{{--</ul>--}}
								{{--<ul class="actions small">--}}
									{{--<li><a href="#" class="button special small">Small</a></li>--}}
									{{--<li><a href="#" class="button small">Small</a></li>--}}
								{{--</ul>--}}
								{{--<ul class="actions vertical">--}}
									{{--<li><a href="#" class="button special">Default</a></li>--}}
									{{--<li><a href="#" class="button">Default</a></li>--}}
								{{--</ul>--}}
								{{--<ul class="actions vertical small">--}}
									{{--<li><a href="#" class="button special small">Small</a></li>--}}
									{{--<li><a href="#" class="button small">Small</a></li>--}}
								{{--</ul>--}}
							{{--</div>--}}
							{{--<div class="6u 12u$(medium)">--}}
								{{--<ul class="actions vertical">--}}
									{{--<li><a href="#" class="button special fit">Default</a></li>--}}
									{{--<li><a href="#" class="button fit">Default</a></li>--}}
								{{--</ul>--}}
								{{--<ul class="actions vertical small">--}}
									{{--<li><a href="#" class="button special small fit">Small</a></li>--}}
									{{--<li><a href="#" class="button small fit">Small</a></li>--}}
								{{--</ul>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</section>--}}

					{{--<section>--}}
						{{--<h4>Table</h4>--}}
						{{--<h5>Default</h5>--}}
						{{--<div class="table-wrapper">--}}
							{{--<table>--}}
								{{--<thead>--}}
									{{--<tr>--}}
										{{--<th>Name</th>--}}
										{{--<th>Description</th>--}}
										{{--<th>Price</th>--}}
									{{--</tr>--}}
								{{--</thead>--}}
								{{--<tbody>--}}
									{{--<tr>--}}
										{{--<td>Item One</td>--}}
										{{--<td>Ante turpis integer aliquet porttitor.</td>--}}
										{{--<td>29.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Two</td>--}}
										{{--<td>Vis ac commodo adipiscing arcu aliquet.</td>--}}
										{{--<td>19.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Three</td>--}}
										{{--<td> Morbi faucibus arcu accumsan lorem.</td>--}}
										{{--<td>29.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Four</td>--}}
										{{--<td>Vitae integer tempus condimentum.</td>--}}
										{{--<td>19.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Five</td>--}}
										{{--<td>Ante turpis integer aliquet porttitor.</td>--}}
										{{--<td>29.99</td>--}}
									{{--</tr>--}}
								{{--</tbody>--}}
								{{--<tfoot>--}}
									{{--<tr>--}}
										{{--<td colspan="2"></td>--}}
										{{--<td>100.00</td>--}}
									{{--</tr>--}}
								{{--</tfoot>--}}
							{{--</table>--}}
						{{--</div>--}}

						{{--<h5>Alternate</h5>--}}
						{{--<div class="table-wrapper">--}}
							{{--<table class="alt">--}}
								{{--<thead>--}}
									{{--<tr>--}}
										{{--<th>Name</th>--}}
										{{--<th>Description</th>--}}
										{{--<th>Price</th>--}}
									{{--</tr>--}}
								{{--</thead>--}}
								{{--<tbody>--}}
									{{--<tr>--}}
										{{--<td>Item One</td>--}}
										{{--<td>Ante turpis integer aliquet porttitor.</td>--}}
										{{--<td>29.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Two</td>--}}
										{{--<td>Vis ac commodo adipiscing arcu aliquet.</td>--}}
										{{--<td>19.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Three</td>--}}
										{{--<td> Morbi faucibus arcu accumsan lorem.</td>--}}
										{{--<td>29.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Four</td>--}}
										{{--<td>Vitae integer tempus condimentum.</td>--}}
										{{--<td>19.99</td>--}}
									{{--</tr>--}}
									{{--<tr>--}}
										{{--<td>Item Five</td>--}}
										{{--<td>Ante turpis integer aliquet porttitor.</td>--}}
										{{--<td>29.99</td>--}}
									{{--</tr>--}}
								{{--</tbody>--}}
								{{--<tfoot>--}}
									{{--<tr>--}}
										{{--<td colspan="2"></td>--}}
										{{--<td>100.00</td>--}}
									{{--</tr>--}}
								{{--</tfoot>--}}
							{{--</table>--}}
						{{--</div>--}}
					{{--</section>--}}

					{{--<section>--}}
						{{--<h4>Buttons</h4>--}}
						{{--<ul class="actions">--}}
							{{--<li><a href="#" class="button special">Special</a></li>--}}
							{{--<li><a href="#" class="button">Default</a></li>--}}
						{{--</ul>--}}
						{{--<ul class="actions">--}}
							{{--<li><a href="#" class="button big">Big</a></li>--}}
							{{--<li><a href="#" class="button">Default</a></li>--}}
							{{--<li><a href="#" class="button small">Small</a></li>--}}
						{{--</ul>--}}
						{{--<ul class="actions fit">--}}
							{{--<li><a href="#" class="button fit">Fit</a></li>--}}
							{{--<li><a href="#" class="button special fit">Fit</a></li>--}}
							{{--<li><a href="#" class="button fit">Fit</a></li>--}}
						{{--</ul>--}}
						{{--<ul class="actions fit small">--}}
							{{--<li><a href="#" class="button special fit small">Fit + Small</a></li>--}}
							{{--<li><a href="#" class="button fit small">Fit + Small</a></li>--}}
							{{--<li><a href="#" class="button special fit small">Fit + Small</a></li>--}}
						{{--</ul>--}}
						{{--<ul class="actions">--}}
							{{--<li><a href="#" class="button special icon fa-download">Icon</a></li>--}}
							{{--<li><a href="#" class="button icon fa-download">Icon</a></li>--}}
						{{--</ul>--}}
						{{--<ul class="actions">--}}
							{{--<li><span class="button special disabled">Disabled</span></li>--}}
							{{--<li><span class="button disabled">Disabled</span></li>--}}
						{{--</ul>--}}
					{{--</section>--}}

					{{--<section>--}}
						{{--<h4>Form</h4>--}}
						{{--<form method="post" action="#">--}}
							{{--<div class="row uniform 50%">--}}
								{{--<div class="6u 12u$(xsmall)">--}}
									{{--<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />--}}
								{{--</div>--}}
								{{--<div class="6u$ 12u$(xsmall)">--}}
									{{--<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />--}}
								{{--</div>--}}
								{{--<div class="12u$">--}}
									{{--<div class="select-wrapper">--}}
										{{--<select name="demo-category" id="demo-category">--}}
											{{--<option value="">- Category -</option>--}}
											{{--<option value="1">Manufacturing</option>--}}
											{{--<option value="1">Shipping</option>--}}
											{{--<option value="1">Administration</option>--}}
											{{--<option value="1">Human Resources</option>--}}
										{{--</select>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="4u 12u$(small)">--}}
									{{--<input type="radio" id="demo-priority-low" name="demo-priority" checked>--}}
									{{--<label for="demo-priority-low">Low</label>--}}
								{{--</div>--}}
								{{--<div class="4u 12u$(small)">--}}
									{{--<input type="radio" id="demo-priority-normal" name="demo-priority">--}}
									{{--<label for="demo-priority-normal">Normal</label>--}}
								{{--</div>--}}
								{{--<div class="4u$ 12u$(small)">--}}
									{{--<input type="radio" id="demo-priority-high" name="demo-priority">--}}
									{{--<label for="demo-priority-high">High</label>--}}
								{{--</div>--}}
								{{--<div class="6u 12u$(small)">--}}
									{{--<input type="checkbox" id="demo-copy" name="demo-copy">--}}
									{{--<label for="demo-copy">Email me a copy</label>--}}
								{{--</div>--}}
								{{--<div class="6u$ 12u$(small)">--}}
									{{--<input type="checkbox" id="demo-human" name="demo-human" checked>--}}
									{{--<label for="demo-human">Not a robot</label>--}}
								{{--</div>--}}
								{{--<div class="12u$">--}}
									{{--<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>--}}
								{{--</div>--}}
								{{--<div class="12u$">--}}
									{{--<ul class="actions">--}}
										{{--<li><input type="submit" value="Send Message" class="special" /></li>--}}
										{{--<li><input type="reset" value="Reset" /></li>--}}
									{{--</ul>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</form>--}}
					{{--</section>--}}

					{{--<section>--}}
						{{--<h4>Image</h4>--}}
						{{--<h5>Fit</h5>--}}
						{{--<div class="box alt">--}}
							{{--<div class="row uniform 50%">--}}
								{{--<div class="12u"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>--}}
								{{--<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<h5>Left &amp; Right</h5>--}}
						{{--<p><span class="image left"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>--}}
						{{--<p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>--}}
					{{--</section>--}}

				{{--</div>--}}
			{{--</section>--}}
		{{----}}

		<!-- Footer -->
			<section id="footer">
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
			<script src="assets/js/main.js"></script>
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
					updateResultBlock(result);

					$('#page').on('blur', doRequest);
					$('#send_request').on('click', function(e){
						e.preventDefault();
						doRequest();
					});
				});
			</script>

	</body>
</html>