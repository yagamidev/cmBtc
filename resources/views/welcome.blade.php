@extends("layouts.mainLayout")
@section("content")
<section id="intro" class="index">
	<div class="container">
		<div class="row">
			<div class="col-xl-5 col-md-5 col-sm-6">
				<div class="tradingview-widget-container">
					<div class="tradingview-widget-container__widget"></div>
					<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
					{
					"title_raw": "Cryptocurrencies",
					"belowLineFillColorGrowing": "rgba(60, 188, 152, 0.05)",
					"gridLineColor": "rgba(233, 233, 234, 1)",
					"scaleFontColor": "rgba(218, 221, 224, 1)",
					"title": "Cryptocurrencies",
					"tabs": [
						{
						"title_raw": "Overview",
						"symbols": [
							{
							"s": "BITFINEX:BTCUSD"
							},
							{
							"s": "BITFINEX:ETHUSD"
							},
							{
							"s": "COINBASE:BCHUSD"
							},
							{
							"s": "COINBASE:LTCUSD"
							}
						],
						"title": "Overview"
						},
						{
						"title_raw": "Bitcoin",
						"symbols": [
							{
							"s": "BITFINEX:BTCUSD"
							},
							{
							"s": "COINBASE:BTCEUR"
							},
							{
							"s": "COINBASE:BTCGBP"
							},
							{
							"s": "BITFLYER:BTCJPY"
							},
							{
							"s": "WEX:BTCRUR"
							},
							{
							"s": "CME:BTC1!"
							}
						],
						"title": "Bitcoin"
						},
						{
						"title_raw": "Ethereum",
						"symbols": [
							{
							"s": "COINBASE:ETHUSD"
							},
							{
							"s": "KRAKEN:ETHEUR"
							},
							{
							"s": "KRAKEN:ETHGBP"
							},
							{
							"s": "KRAKEN:ETHJPY"
							},
							{
							"s": "POLONIEX:ETHBTC"
							},
							{
							"s": "WEX:ETHLTC"
							}
						],
						"title": "Ethereum"
						},
						{
						"title_raw": "Bitcoin Cash",
						"symbols": [
							{
							"s": "COINBASE:BCHUSD"
							},
							{
							"s": "BITSTAMP:BCHEUR"
							},
							{
							"s": "CEXIO:BCHGBP"
							},
							{
							"s": "POLONIEX:BCHBTC"
							},
							{
							"s": "HITBTC:BCHETH"
							},
							{
							"s": "WEX:BCHLTC"
							}
						],
						"title": "Bitcoin Cash"
						}
					],
					"plotLineColorFalling": "rgba(255, 74, 104, 1)",
					"plotLineColorGrowing": "rgba(60, 188, 152, 1)",
					"showChart": true,
					"title_link": "/markets/cryptocurrencies/prices-all/",
					"locale": "en",
					"symbolActiveColor": "rgba(242, 250, 254, 1)",
					"belowLineFillColorFalling": "rgba(255, 74, 104, 0.05)",
					"height": 500,
					"width": 500
					}
					</script>
				</div>
			</div>
			<div class="col-lg-6 col-md-5 col-sm-6 col-md-offset-1">
				<div class="intro-cta">
					<h1>BITCOIN, BITCOIN CASH, LTC, ETH EXCHANGE TO XAF & BLOCKCHAIN WALLET</h1>
					<div class="cta-container">
						<div class="vtable">
							<div class="vcell">
								<h2>Open a Free Blockchain Wallet </h2>
								<button class="btn signup col-lg-4 signup-btn">Sign up now </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<nav id="secondary-nav" style="margin-top: 50px">
	<div class="container">
		<div class="row">
			<ul>
				<li class="col-md-3 col-sm-6 bitcoin-exchange">
					<a href="#index_section2">
						<div class="icon icon-1"></div>
						<span class="title">
							Cryptocurrency <span>Exchange</span>
						</span>
						
					</a>
				</li>
				<li class="col-md-3 col-sm-6 bitcoin-debit-card">
					<a href="#index_section5">
						<div class="icon icon-2"></div>
						<span class="title">
							<span>YusCard</span>
						</span>
						
					</a>
				</li>
				<li class="col-md-3 col-sm-6 bitcoin-mobile-wallet">
					<a href="#index_section7">
						<div class="icon icon-3"></div>
						<span class="title">
							Blockchain <span>Wallet</span>
						</span>
						
					</a>
				</li>
				<li class="col-md-3 col-sm-6 bitcoin-accept-business">
					<a href="#index_section9">
						<div class="icon icon-4"></div>
						<span class="title">
							Payment <span>Processing</span>
						</span>
						
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div id="index_section2" class="bg-section">
	<div class="container">
		<div class="row section-imgL-textR">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  section-left">
				<img src="{{ asset('/images/Cryptocurrencies-Logos.png') }}" alt="Ethereum, NEM, Dash and Bitcoin Exchange" />
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  section-right">
				<div class="section-title-major">Cryptocurrency Exchange</div>
				<div class="keypoint">
					<span class="icon-black icon-black-lightning"></span>
					<span class="keypoint-text">
						Instant exchange, use your funds immediately
					</span>
				</div>
				<div class="keypoint">
					<span class="icon-black icon-black-globe"></span>
					<span class="keypoint-text">
						For Cameroonians, by cameroonians. More than 3+ currenciens supported including Bitcoin
						,Ethereum and Litecoin
					</span>
				</div>
				<div class="keypoint">
					<span class="icon-black icon-black-exchange"></span>
					<span class="keypoint-text">
						Deposit and withdraw your money through Mobile Money , Orange Money , EU Mobile.
						We also accept credit or debit cards, bank transfers, and cash !
					</span>
				</div>
				<div class="bsC">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-sm-offset-2 col-md-8 col-lg-8 kac">
							<a href="en/bitcoin-exchange.html" class="btn-link-new">
								Buy/Sell Cryptocurrency
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="index_section5" class="bg-section bg-f8">
	<div class="container">
		<div class="row section-imgL-textR">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  section-left">
				<img src="{{ asset('/images/yuscard.png')}}" alt=" CamerBitcoin Prepaid Card" />
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  section-right">
				<div class="section-title-major">YusCard Prepaid Card</div>
				<div class="keypoint">
					<span class="icon-black icon-black-deposit"></span>
					<span class="keypoint-text">
						Use it at 30+ million ATMs and 25+ million shops worldwide
					</span>
				</div>
				<div class="keypoint">
					<span class="icon-black icon-black-withdraw"></span>
					<span class="keypoint-text">
						Use your Yuscard anywhere and anytime, for
						any transaction
					</span>
				</div>
				<div class="keypoint">
					<span class="icon-black icon-black-nostop"></span>
					<span class="keypoint-text">
						High deposit and withdrawal limits
					</span>
				</div>
				<div class="keypoints-action">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-sm-offset-0 col-md-6 col-lg-6 kac">
							<a href="yuscards.com/signup" role="button" class="btn-link-new">
								GET IT NOW
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="index_section6" class="bg-section section-more">
	<div class="container">
		<div class="row section-center">
			<div class="col-lg-12">
				<div class="section-title-center">
					Prepaid Card Benefits
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
							<div class="editor-text">
								<div style="text-align: justify;"><b>Convert your Bitcoin, Ether, BCH, LTC
								into XAF and other traditional currencies and pay wherever you want. </b>Yuscard prepaid card* is accepted in automated teller machines (ATMs) for cash withdrawal, online sites, and physical shops. The card can also be linked to PayPal or any other online wallet. <br /><br /><b>Virtual and physical Yuscard cards are available</b>. Virtual prepaid card is issued instantly and can be used to spend at online merchants. Physical prepaid card is delivered within 1-4 weeks and can be used to spend in-store or at online merchants. <br /><br /><b>Instant loading. </b>Your funds from CamerBitcoin blockchain wallet will be auto-converted to XAF, USD or EUR and loaded to your prepaid card instantly.<br /><br />. Various digital currencies including Bitcoin, LTC, Ether and BCH can be converted to USD, XAF, or EUR to fund the prepaid cards.<br /><br /><b>Low fees are guaranteed for Yuscards cardholders.</b>There is no loading fee.<br /><br /><b>Unlimited lifetime card withdrawals and deposits for verified Yuscard cardholders.</b></div>
								<br />
								<ul>
									<li style="text-align: justify; font-size: 11px;">The prepaid card is denominated in USD, EUR, XAF. It can only be loaded with fiat currency and only facilitates spending in USD, EUR, GBP. You can load the card with the USD, EUR, XAF that you receive in exchange for your virtual currency.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="index_section7" class="bg-section">
	<div class="container">
		<div class="row section-textL-imgR">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  section-left">
				<div class="section-title-major">CamerBitcoin Blockchain Wallet</div>
				<div class="keypoint">
					<span class="icon-black icon-black-bitcoin"></span>
					<span class="keypoint-text">
						Manage your Bitcoin, Ethereum, Bitcoin Cash and Litecoin anywhere from Cameroon and through the world
					</span>
				</div>
				<div class="keypoint">
					<span class="icon-black icon-black-chart"></span>
					<span class="keypoint-text">
						Easy, secure and instant cryptocurrency exchange on mobile phones or web browsers
					</span>
				</div>
				<div id="responsive_elem">
					<img src="#" alt=" CamerBitcoin Mobile Wallet" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  section-right">
				<img src="{{ asset('images/wallet.png')}}" alt=" CamerBitcoin Mobile Wallet" />
			</div>
			<div class="btn-wrapper">
				<div class="btn-more opt-inverse">
					Read more
				</div>
			</div>
		</div>
	</div>
</div>

@endsection