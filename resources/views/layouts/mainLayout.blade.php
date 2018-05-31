<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cryptocurrency Exchange &amp; Blockchain Wallet | CamerBitcoin</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="_token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="copyright" content="CamerBitcoin Finance Ltd" />
		<meta name="description" content="Buy and sell Bitcoin, Ethereum, NEM or Dash through SEPA, local bank transfers, credit or debit cards. Manage and store your cryptocurrency at CamerBitcoin!" />
		<meta name="keywords" content="Cryptocurrency Exchange, Bitcoin Exchange, Blockchain Wallet, buy and sell Bitcoin, Ethereum, Ether, NEM, XEM, Dash" />
		<meta property="og:title" content="Cryptocurrency Exchange &amp; Blockchain Wallet" />
		<meta name="twitter:title" content="Cryptocurrency Exchange &amp; Blockchain Wallet" />
		<meta property="og:description" content="The simplest way to buy and sell Bitcoin, Ethereum, NEM or Dash" />
		<meta name="twitter:description" content="The simplest way to buy and sell Bitcoin, Ethereum, NEM or Dash" />
		<meta property="fb:app_id" content="573273662814660" />
		<meta property="og:site_name" content="CamerBitcoin">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://camerbitcoin.com/" id="og-url" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="&#64;CamerBitcoin" />
		<meta name="twitter:image:width" content="626" />
		<meta name="twitter:image:height" content="335" />
		<meta name="theme-color" content="#204d6a" />
		@section("script")
		<script src="https://unpkg.com/popper.js"></script>
		<script>
		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
		document.querySelector('meta[name="twitter:card"]').setAttribute("content", "app");
		}
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="{{ asset('/js/main.js')}}"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script>
		if (/MSIE 10/i.test(navigator.userAgent) || /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) ) {
		document.write('<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext,cyrillic" rel="stylesheet">')
		}
		</script>
		@show
		@section("stylesheet")
		<link rel="stylesheet" href="{{ asset('/css/main.css') }}">
		<link rel="stylesheet" href="https://bitonics.net/vendor/bitonics/bitonics.min.css">
		<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="{{ asset('css/custom.css')}}">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		@show
		
		<script>
		var myJsRoutes = {}; (function(_root){})(myJsRoutes)
		var baseJsRoutes= null;
					window.onload = function() {
						//GLOBAL JAVASCRIPTS
						EntryPoint.initBase(baseJsRoutes)
						EntryPoint.ajaxSetup("0332342e50d131f65685055f4e29821f83edfaa0-1526725900169-c00a4374716342ce30c572df")
						EntryPoint.header()
						EntryPoint.footer()
						EntryPoint.selectizeSetup()
						EntryPoint.popover()
						EntryPoint.tooltip()
						EntryPoint.copyElement()
									
		EntryPoint.index(
				false,
				myJsRoutes,
		'Date',
				'Price',
		$(".main-currency .currency"),
		$(".main-currency .currency-value"),
		$(".other-currencies ul"),
		"en"
			),
		EntryPoint.getSignUpEmail(
		myJsRoutes,
		"en" ),
			EntryPoint.sectionMore()
		}
		</script>
	</head>
	<body>
		<div class="wrapper">
			<div class="noJavascript">
				<noscript>
				JavaScript is disabled or not supported in your browser!
				</noscript>
			</div>
			<header id="header" class="header">
				<a href="/" class="logo">
					<img src="{{ asset('images/camerbitcoinLogo.png')}}" alt="CamerBitcoin" />
				</a>
				<div class="components-row">
					<button id="nav-trigger" class="nav-trigger"><span></span><span></span><span></span></button>
					<div id="lan-switcher" class="lan-switcher">
						<span>
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
						<ul class="language-list row">
							<li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<a href="en/index.html">
									English
								</a>
							</li>
							<li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<a href="fr/index.html">
									Français
								</a>
							</li>
						</ul>
					</div>
					@if(Sentinel::check())
						@include("partials.loggedInMenu")
					@else
					<div class="login">
						<a class="btn" href="/en/login" role="button">
							Login
						</a>
					</div>
					@endif
				</div>
				<nav id="nav-primary" class="nav-primary">
					<ul class="nav-menu">
						@if(Sentinel::check())
						<li class="">
							<a href="{{route('dashboard')}}" title="Exchange">
								Dashboard
							</a>
						</li>
						@endif
						<li class="">
							<a href="en/bitcoin-exchange.html" title="Exchange">
								Exchange
							</a>
						</li>
						<li class="">
							<a href="en/bitcoin-debit-card.html" title="Card">
								Card
							</a>
						</li>
						<li class="">
							<a href="en/bitcoin-wallet.html" title="Wallet">
								Wallet
							</a>
						</li>
						<li class="">
							<a href="en/accept-bitcoin-payments.html" title="Merchants">
								Merchants
							</a>
						</li>
						<li class="">
							<a href="en/contact.html" title="Contact">
								Contact
							</a>
						</li>
					</ul>
				</nav>
			</header>
			@yield("content")
			@section("footer")
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div vocab="http://schema.org/" typeof="Organization" class="col-md-3 col-sm-6 footer-block">
							<h4>Get in touch with CamerBitcoin Finance</h4>
							<h4 property="name" class="hidden">CamerBitcoin Finance, Ltd</h4>
							<ul>
								<li>
									<div class="footer-sprite-icon icon-1"></div>
									<span>
										<a property="telephone" href="tel: +44 20 3769 5474">
											+44 20 3769 5474
										</a>
									</span>
								</li>
								<li>
									<div class="footer-sprite-icon icon-2"></div>
									<a href="mailto:yuscards@gmail.com">yuscards@gmail.com</a>
								</li>
								<li>
									<div class="footer-sprite-icon icon-3"></div>
									<span property="address">
										4th street Bepanda
									</span>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 footer-block">
							<h4>Products</h4>
							<ul>
								<li>
									<a href="en/bitcoin-exchange.html">
										Buy/Sell Cryptocurrency
									</a>
								</li>
								<li>
									<a href="en/bitcoin-wallet.html">
										Blockchain Wallet
									</a>
								</li>
								<li>
									<a href="en/bitcoin-debit-card.html">
										Prepaid Card
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 footer-block">
							<h4>About</h4>
							<ul>
								<li>
									<a href="en/what-is-bitcoin.html">
										What is Bitcoin?
									</a>
								</li>
								<li>
									<a href="en/how-to-buy-bitcoin.html">
										How to Buy Bitcoins
									</a>
								</li>
								<li>
									<a href="en/about.html">
										About Us
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 footer-block">
							<h4>Support</h4>
							<ul>
								<li>
									<a href="en/contact.html">
										Contact
									</a>
								</li>
								<li>
									<a href="en/fees-and-limits.html">
										Fees and Limits
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			@show
		</div>
	</body>
</html>