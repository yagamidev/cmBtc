@extends("layouts.mainLayout")

@section("content")

<div class="container">
<section id="content" class="content trade-mode">
<div class="row">
<div class="col-xs-12 text-center">
<div id="pairs" class="btn-toolbar graph-tabs toolbar-btn" data-toggle="buttons-radio">
<div id="ticker-BTC-USD" class="active graph-tab">
<a id="ticker-BTC-USD-a" href="trade-home.html" class="btn btn-sm btn-small btn-white highlight-green-ticker">BTC/USD<br>
<span class="btn_caption" id="ticker-BTC-USD-price">10895.9</span>
</a>
</div>
<div id="ticker-ETH-USD" class="graph-tab">
<a id="ticker-ETH-USD-a" href="trade-home-eth.html" class="btn btn-sm btn-small btn-white">ETH/USD<br>
<span class="btn_caption" id="ticker-ETH-USD-price">
959.99
</span>
</a>
</div>
<div id="ticker-BCH-USD" class="graph-tab">
<a id="ticker-BCH-USD-a" href="trade-home-bch.html" class="btn btn-sm btn-small btn-white">BCH/USD<br>
<span class="btn_caption" id="ticker-BCH-USD-price">
1517.84
</span>
</a>
</div>
<div id="ticker-XRP-USD" class="graph-tab">
<a id="ticker-XRP-USD-a" href="trade-home-xrp.html" class="btn btn-sm btn-small btn-white">XRP/USD<br>
<span class="btn_caption" id="ticker-XRP-USD-price">1.1349</span>
</a>
</div>
<div id="ticker-BTC-EUR" class="graph-tab">
<a id="ticker-BTC-EUR-a" href="trade-home-btc-e.html" class="btn btn-sm btn-small btn-white">BTC/EUR<br>
<span class="btn_caption" id="ticker-BTC-EUR-price">
8598.0
</span>
</a>
</div>
<div id="ticker-ETH-EUR" class="graph-tab">
<a id="ticker-ETH-EUR-a" href="trade-home-eth-e.html" class="btn btn-sm btn-small btn-white">ETH/EUR<br>
<span class="btn_caption" id="ticker-ETH-EUR-price">
757.88
</span>
</a>
</div>
<div id="ticker-XRP-EUR" class="graph-tab">
<a id="ticker-XRP-EUR-a" href="trade-home-xrp-e.html" class="btn btn-sm btn-small btn-white">XRP/EUR<br>
<span class="btn_caption" id="ticker-XRP-EUR-price">
0.9024
</span>
</a>
</div>

<div id="ticker-ETH-BTC" class="graph-tab">
<a id="ticker-ETH-BTC-a" href="trade-home-eth-b.html" class="btn btn-sm btn-small btn-white">ETH/BTC<br>
<span class="btn_caption" id="ticker-ETH-BTC-price">
0.088153
</span>
</a>
</div>
<div id="ticker-BCH-BTC" class="graph-tab">
<a id="ticker-BCH-BTC-a" href="trade-home-bch-b.html" class="btn btn-sm btn-small btn-white">BCH/BTC<br>
<span class="btn_caption" id="ticker-BCH-BTC-price">
0.140994
</span>
</a>
</div>
<div id="ticker-XRP-BTC" class="graph-tab">
<a id="ticker-XRP-BTC-a" href="trade-home-xrp-b.html" class="btn btn-sm btn-small btn-white">XRP/BTC<br>
<span class="btn_caption" id="ticker-XRP-BTC-price">
0.00010502
</span>
</a>
</div>
</div>
</div>
</div>
<div class="row">
<div id="markets-list" class="col-xs-3">
<div class="market-prices">
<div class="market-price-block-header">
<div class="market-price-search">
<input class="market-price-search-input form-control" id="market-price-search-input" type="text">
<label for="market-price-search-input" class="market-price-search-button"><i class="icn icn-search" aria-hidden="true" data-icon="7"></i></label>
</div>
<div class="market-switch">
<button id="market-switch-base" class="market-switch-btn active">Base/</button>
<a href="trade-home-q.html"><button id="market-switch" class="market-switch-btn" onclick=".market-switch-btn.active">/Quote</button></a>
</div>
</div>
<div id="market-pairs-base" class="market-price-block active">
<p class="market-name ">

<span class="market-symbol ">BTC</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-BTC-USD-left" href="#" class="market-pair current-ticker ">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/USD</span>
<span class="pair-value ticker-BTC-USD-price-left">10895.9</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTC-USD-change-left pair-change-down">-16.1 USD (-0.15%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-USD-volume-left">2091.43397831 BTC</span>
</div>
</a>
 </li>
<li style="display: none;">



<a id="ticker-BTC-EUR-left" href="https://bitexchange.systems/trade/BTC-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/EUR</span>
<span class="pair-value ticker-BTC-EUR-price-left">8598.0</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTC-EUR-change-left  pair-change-up ">68.6 EUR (0.80%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-EUR-volume-left">120.22198783 BTC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BTC-GBP-left" href="https://bitexchange.systems/trade/BTC-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/GBP</span>
<span class="pair-value ticker-BTC-GBP-price-left">7712.5</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTC-GBP-change-left  pair-change-down ">-74.9 GBP (-0.96%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-GBP-volume-left">47.08463448 BTC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BTC-RUB-left" href="https://bitexchange.systems/trade/BTC-RUB" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/RUB</span>
<span class="pair-value ticker-BTC-RUB-price-left">624000.0</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>

<span class="pair-change ticker-BTC-RUB-change-left  pair-change-up ">37878.8 RUB (6.46%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-RUB-volume-left">4.21351122 BTC</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">ETH</span>
</p>

<ul class="market-price-list">
<li>



<a id="ticker-ETH-USD-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/USD</span>
<span class="pair-value ticker-ETH-USD-price-left">959.99</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ETH-USD-change-left  pair-change-down ">-24.01 USD (-2.44%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-USD-volume-left">2748.76143100 ETH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ETH-EUR-left" href="https://bitexchange.systems/trade/ETH-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/EUR</span>
<span class="pair-value ticker-ETH-EUR-price-left">757.88</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ETH-EUR-change-left  pair-change-down ">-13.84 EUR (-1.79%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-EUR-volume-left">317.00218700 ETH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ETH-GBP-left" href="https://bitexchange.systems/trade/ETH-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/GBP</span>
<span class="pair-value ticker-ETH-GBP-price-left">704.86</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ETH-GBP-change-left  pair-change-down ">-1.14 GBP (-0.16%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-GBP-volume-left">53.08974100 ETH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ETH-BTC-left" href="https://bitexchange.systems/trade/ETH-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/BTC</span>
<span class="pair-value ticker-ETH-BTC-price-left">0.088153</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ETH-BTC-change-left  pair-change-down ">-0.002183 BTC (-2.42%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-BTC-volume-left">588.57229400 ETH</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">BCH</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-BCH-USD-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/USD</span>
<span class="pair-value ticker-BCH-USD-price-left">1517.84</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>

<span class="pair-change ticker-BCH-USD-change-left  pair-change-down ">-44.25 USD (-2.83%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-USD-volume-left">470.62111530 BCH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BCH-EUR-left" href="https://bitexchange.systems/trade/BCH-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/EUR</span>
<span class="pair-value ticker-BCH-EUR-price-left">1202.03</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BCH-EUR-change-left  pair-change-down ">-27.97 EUR (-2.27%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-EUR-volume-left">55.75310141 BCH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BCH-GBP-left" href="https://bitexchange.systems/trade/BCH-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/GBP</span>
<span class="pair-value ticker-BCH-GBP-price-left">1086.47</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BCH-GBP-change-left  pair-change-down ">-31.63 GBP (-2.83%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-GBP-volume-left">22.64424668 BCH</span>
</div>
</a>
</li>
<li style="display: none;">



 <a id="ticker-BCH-BTC-left" href="https://bitexchange.systems/trade/BCH-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/BTC</span>
<span class="pair-value ticker-BCH-BTC-price-left">0.140994</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BCH-BTC-change-left  pair-change-down ">-0.003037 BTC (-2.11%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-BTC-volume-left">104.94303494 BCH</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">BTG</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-BTG-USD-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTG/USD</span>
<span class="pair-value ticker-BTG-USD-price-left">141.81</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTG-USD-change-left  pair-change-down">-0.53 USD (-0.37%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTG-USD-volume-left">1062.79150209 BTG</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BTG-EUR-left" href="https://bitexchange.systems/trade/BTG-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTG/EUR</span>
<span class="pair-value ticker-BTG-EUR-price-left">110.15</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTG-EUR-change-left  pair-change-down ">-2.79 EUR (-2.47%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTG-EUR-volume-left">59.03324252 BTG</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BTG-BTC-left" href="https://bitexchange.systems/trade/BTG-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTG/BTC</span>
<span class="pair-value ticker-BTG-BTC-price-left">0.013130</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTG-BTC-change-left  pair-change-up ">0.000020 BTC (0.15%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTG-BTC-volume-left">217.63825302 BTG</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">DASH</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-DASH-USD-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/USD</span>
<span class="pair-value ticker-DASH-USD-price-left">705.52</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-DASH-USD-change-left  pair-change-down ">-32.62 USD (-4.42%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-USD-volume-left">155.22777353 DASH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-DASH-EUR-left" href="https://bitexchange.systems/trade/DASH-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/EUR</span>
<span class="pair-value ticker-DASH-EUR-price-left">595.76</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-DASH-EUR-change-left  pair-change-up ">16.81 EUR (2.90%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-EUR-volume-left">11.57702142 DASH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-DASH-GBP-left" href="https://bitexchange.systems/trade/DASH-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/GBP</span>
<span class="pair-value ticker-DASH-GBP-price-left">514.11</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-DASH-GBP-change-left  pair-change-down ">-22.03 GBP (-4.11%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-GBP-volume-left">4.71221143 DASH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-DASH-BTC-left" href="https://bitexchange.systems/trade/DASH-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/BTC</span>
<span class="pair-value ticker-DASH-BTC-price-left">0.066245</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-DASH-BTC-change-left  pair-change-down ">-0.001686 BTC (-2.48%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-BTC-volume-left">41.31288048 DASH</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">XRP</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-XRP-USD-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XRP/USD</span>
<span class="pair-value ticker-XRP-USD-price-left">1.1349</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XRP-USD-change-left  pair-change-down">-0.0199 USD (-1.72%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XRP-USD-volume-left">4576671.418541 XRP</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XRP-EUR-left" href="https://bitexchange.systems/trade/XRP-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XRP/EUR</span>
<span class="pair-value ticker-XRP-EUR-price-left">0.9024</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XRP-EUR-change-left  pair-change-up ">0.0003 EUR (0.03%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XRP-EUR-volume-left">359282.611708 XRP</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XRP-BTC-left" href="https://bitexchange.systems/trade/XRP-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XRP/BTC</span>
<span class="pair-value ticker-XRP-BTC-price-left">0.00010502</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XRP-BTC-change-left  pair-change-down ">-0.00000074 BTC (-0.70%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XRP-BTC-volume-left">695074.104487 XRP</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">XLM</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-XLM-USD-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XLM/USD</span>
<span class="pair-value ticker-XLM-USD-price-left">0.4598</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XLM-USD-change-left  pair-change-down ">-0.0702 USD (-13.25%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XLM-USD-volume-left">3800790.5818440 XLM</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XLM-EUR-left" href="https://bitexchange.systems/trade/XLM-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XLM/EUR</span>
<span class="pair-value ticker-XLM-EUR-price-left">0.3620</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XLM-EUR-change-left  pair-change-down ">-0.0528 EUR (-12.73%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XLM-EUR-volume-left">146746.2555805 XLM</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XLM-BTC-left" href="https://bitexchange.systems/trade/XLM-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XLM/BTC</span>
<span class="pair-value ticker-XLM-BTC-price-left">0.00004212</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XLM-BTC-change-left  pair-change-down ">-0.00000659 BTC (-13.53%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XLM-BTC-volume-left">1369236.8206818 XLM</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">ZEC</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-ZEC-USD-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/USD</span>
<span class="pair-value ticker-ZEC-USD-price-left">478.00</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-USD-change-left  pair-change-down ">-19.50 USD (-3.92%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-USD-volume-left">396.72211478 ZEC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ZEC-EUR-left" href="https://bitexchange.systems/trade/ZEC-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/EUR</span>
<span class="pair-value ticker-ZEC-EUR-price-left">379.02</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-EUR-change-left  pair-change-down ">-7.84 EUR (-2.03%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-EUR-volume-left">39.04934957 ZEC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ZEC-GBP-left" href="https://bitexchange.systems/trade/ZEC-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/GBP</span>
<span class="pair-value ticker-ZEC-GBP-price-left">337.82</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-GBP-change-left  pair-change-down ">-13.50 GBP (-3.84%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-GBP-volume-left">6.58495582 ZEC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ZEC-BTC-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/BTC</span>
<span class="pair-value ticker-ZEC-BTC-price-left">0.044259</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-BTC-change-left  pair-change-down ">-0.001189 BTC (-2.62%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-BTC-volume-left">79.77785335 ZEC</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">GHS</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-GHS-BTC-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">GHS/BTC</span>
<span class="pair-value ticker-GHS-BTC-price-left">0.00001176</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-GHS-BTC-change-left  pair-change-down ">-0.00000024 BTC (-2.00%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-GHS-BTC-volume-left">8495.42925097 GHS</span>
</div>
</a>
</li>
</ul>
</div>
<div id="market-pairs" class="market-price-block">
<p class="market-name market-open">

<span class="market-symbol">USD</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-BTC-USD-left" href="#" class="market-pair current-ticker">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/USD</span>
<span class="pair-value ticker-BTC-USD-price-left">10895.9</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTC-USD-change-left pair-change-down">-16.1 USD (-0.15%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-USD-volume-left">2091.43397831 BTC</span>
</div>
</a>
</li>
<li style="">



<a id="ticker-ETH-USD-left" href="https://bitexchange.systems/trade/ETH-USD" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/USD</span>
<span class="pair-value ticker-ETH-USD-price-left">959.99</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ETH-USD-change-left  pair-change-down ">-24.01 USD (-2.44%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-USD-volume-left">2748.76143100 ETH</span>
</div>
</a>
</li>
<li style="">



<a id="ticker-BCH-USD-left" href="https://bitexchange.systems/trade/BCH-USD" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/USD</span>
<span class="pair-value ticker-BCH-USD-price-left">1517.84</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BCH-USD-change-left  pair-change-down ">-44.25 USD (-2.83%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-USD-volume-left">470.62111530 BCH</span>
</div>
</a>
</li>
<li style="">



<a id="ticker-BTG-USD-left" href="https://bitexchange.systems/trade/BTG-USD" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTG/USD</span>
<span class="pair-value ticker-BTG-USD-price-left">141.81</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTG-USD-change-left  pair-change-down">-0.53 USD (-0.37%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTG-USD-volume-left">1062.79150209 BTG</span>
</div>
</a>
</li>

<li style="">



<a id="ticker-DASH-USD-left" href="https://bitexchange.systems/trade/DASH-USD" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/USD</span>
<span class="pair-value ticker-DASH-USD-price-left">705.52</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-DASH-USD-change-left  pair-change-down ">-32.62 USD (-4.42%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-USD-volume-left">155.22777353 DASH</span>
</div>
</a>
</li>
<li style="">



<a id="ticker-XRP-USD-left" href="https://bitexchange.systems/trade/XRP-USD" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XRP/USD</span>
<span class="pair-value ticker-XRP-USD-price-left">1.1349</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XRP-USD-change-left  pair-change-down">-0.0199 USD (-1.72%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XRP-USD-volume-left">4576671.418541 XRP</span>
</div>
</a>
</li>
<li style="">



<a id="ticker-XLM-USD-left" href="https://bitexchange.systems/trade/XLM-USD" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XLM/USD</span>
<span class="pair-value ticker-XLM-USD-price-left">0.4598</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XLM-USD-change-left  pair-change-down ">-0.0702 USD (-13.25%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XLM-USD-volume-left">3800790.5818440 XLM</span>
</div>
</a>
</li>
<li style="">



<a id="ticker-ZEC-USD-left" href="https://bitexchange.systems/trade/ZEC-USD" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/USD</span>
<span class="pair-value ticker-ZEC-USD-price-left">478.00</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-USD-change-left  pair-change-down ">-19.50 USD (-3.92%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-USD-volume-left">396.72211478 ZEC</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">EUR</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-BTC-EUR-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/EUR</span>
<span class="pair-value ticker-BTC-EUR-price-left">8598.0</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTC-EUR-change-left  pair-change-up ">68.6 EUR (0.80%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-EUR-volume-left">120.22198783 BTC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ETH-EUR-left" href="https://bitexchange.systems/trade/ETH-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/EUR</span>
<span class="pair-value ticker-ETH-EUR-price-left">757.88</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>

<span class="pair-change ticker-ETH-EUR-change-left  pair-change-down ">-13.84 EUR (-1.79%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-EUR-volume-left">317.00218700 ETH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BCH-EUR-left" href="https://bitexchange.systems/trade/BCH-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/EUR</span>
<span class="pair-value ticker-BCH-EUR-price-left">1202.03</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BCH-EUR-change-left  pair-change-down ">-27.97 EUR (-2.27%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-EUR-volume-left">55.75310141 BCH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BTG-EUR-left" href="https://bitexchange.systems/trade/BTG-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTG/EUR</span>
<span class="pair-value ticker-BTG-EUR-price-left">110.15</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTG-EUR-change-left  pair-change-down ">-2.79 EUR (-2.47%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTG-EUR-volume-left">59.03324252 BTG</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-DASH-EUR-left" href="https://bitexchange.systems/trade/DASH-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/EUR</span>
<span class="pair-value ticker-DASH-EUR-price-left">595.76</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>

<span class="pair-change ticker-DASH-EUR-change-left  pair-change-up ">16.81 EUR (2.90%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-EUR-volume-left">11.57702142 DASH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XRP-EUR-left" href="https://bitexchange.systems/trade/XRP-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XRP/EUR</span>
<span class="pair-value ticker-XRP-EUR-price-left">0.9024</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XRP-EUR-change-left  pair-change-up ">0.0003 EUR (0.03%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XRP-EUR-volume-left">359282.611708 XRP</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XLM-EUR-left" href="https://bitexchange.systems/trade/XLM-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XLM/EUR</span>
<span class="pair-value ticker-XLM-EUR-price-left">0.3620</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XLM-EUR-change-left  pair-change-down ">-0.0528 EUR (-12.73%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XLM-EUR-volume-left">146746.2555805 XLM</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ZEC-EUR-left" href="https://bitexchange.systems/trade/ZEC-EUR" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/EUR</span>
<span class="pair-value ticker-ZEC-EUR-price-left">379.02</span>
</div>
 <div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-EUR-change-left  pair-change-down ">-7.84 EUR (-2.03%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-EUR-volume-left">39.04934957 ZEC</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">GBP</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-BTC-GBP-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/GBP</span>
<span class="pair-value ticker-BTC-GBP-price-left">7712.5</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTC-GBP-change-left  pair-change-down ">-74.9 GBP (-0.96%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-GBP-volume-left">47.08463448 BTC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ETH-GBP-left" href="https://bitexchange.systems/trade/ETH-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/GBP</span>
<span class="pair-value ticker-ETH-GBP-price-left">704.86</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ETH-GBP-change-left  pair-change-down ">-1.14 GBP (-0.16%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-GBP-volume-left">53.08974100 ETH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BCH-GBP-left" href="https://bitexchange.systems/trade/BCH-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/GBP</span>
<span class="pair-value ticker-BCH-GBP-price-left">1086.47</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BCH-GBP-change-left  pair-change-down ">-31.63 GBP (-2.83%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-GBP-volume-left">22.64424668 BCH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-DASH-GBP-left" href="https://bitexchange.systems/trade/DASH-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/GBP</span>
<span class="pair-value ticker-DASH-GBP-price-left">514.11</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-DASH-GBP-change-left  pair-change-down ">-22.03 GBP (-4.11%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-GBP-volume-left">4.71221143 DASH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ZEC-GBP-left" href="https://bitexchange.systems/trade/ZEC-GBP" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/GBP</span>
<span class="pair-value ticker-ZEC-GBP-price-left">337.82</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-GBP-change-left  pair-change-down ">-13.50 GBP (-3.84%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-GBP-volume-left">6.58495582 ZEC</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">RUB</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-BTC-RUB-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTC/RUB</span>
<span class="pair-value ticker-BTC-RUB-price-left">624000.0</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTC-RUB-change-left  pair-change-up ">37878.8 RUB (6.46%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTC-RUB-volume-left">4.21351122 BTC</span>
</div>
</a>
</li>
</ul>
<p class="market-name">

<span class="market-symbol">BTC</span>
</p>
<ul class="market-price-list">
<li>



<a id="ticker-ETH-BTC-left" href="#" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ETH/BTC</span>
<span class="pair-value ticker-ETH-BTC-price-left">0.088153</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ETH-BTC-change-left  pair-change-down ">-0.002183 BTC (-2.42%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ETH-BTC-volume-left">588.57229400 ETH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BCH-BTC-left" href="https://bitexchange.systems/trade/BCH-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BCH/BTC</span>
<span class="pair-value ticker-BCH-BTC-price-left">0.140994</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>

<span class="pair-change ticker-BCH-BTC-change-left  pair-change-down ">-0.003037 BTC (-2.11%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BCH-BTC-volume-left">104.94303494 BCH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-BTG-BTC-left" href="https://bitexchange.systems/trade/BTG-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">BTG/BTC</span>
<span class="pair-value ticker-BTG-BTC-price-left">0.013130</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-BTG-BTC-change-left  pair-change-up ">0.000020 BTC (0.15%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-BTG-BTC-volume-left">217.63825302 BTG</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-DASH-BTC-left" href="https://bitexchange.systems/trade/DASH-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">DASH/BTC</span>
<span class="pair-value ticker-DASH-BTC-price-left">0.066245</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-DASH-BTC-change-left  pair-change-down ">-0.001686 BTC (-2.48%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-DASH-BTC-volume-left">41.31288048 DASH</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XRP-BTC-left" href="https://bitexchange.systems/trade/XRP-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XRP/BTC</span>
<span class="pair-value ticker-XRP-BTC-price-left">0.00010502</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XRP-BTC-change-left  pair-change-down ">-0.00000074 BTC (-0.70%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XRP-BTC-volume-left">695074.104487 XRP</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-XLM-BTC-left" href="https://bitexchange.systems/trade/XLM-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">XLM/BTC</span>
<span class="pair-value ticker-XLM-BTC-price-left">0.00004212</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-XLM-BTC-change-left  pair-change-down ">-0.00000659 BTC (-13.53%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-XLM-BTC-volume-left">1369236.8206818 XLM</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-ZEC-BTC-left" href="https://bitexchange.systems/trade/ZEC-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">ZEC/BTC</span>
<span class="pair-value ticker-ZEC-BTC-price-left">0.044259</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-ZEC-BTC-change-left  pair-change-down ">-0.001189 BTC (-2.62%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-ZEC-BTC-volume-left">79.77785335 ZEC</span>
</div>
</a>
</li>
<li style="display: none;">



<a id="ticker-GHS-BTC-left" href="https://bitexchange.systems/trade/GHS-BTC" class="market-pair">
<div class="market-pair-row market-pair-row-value">
<span class="pair-name">GHS/BTC</span>
<span class="pair-value ticker-GHS-BTC-price-left">0.00001176</span>
</div>
<div class="market-pair-row market-pair-row-change">
<span>24h Change</span>
<span class="pair-change ticker-GHS-BTC-change-left  pair-change-down ">-0.00000024 BTC (-2.00%)</span>
</div>
<div class="market-pair-row market-pair-row-volume">
<span>24h Volume</span>
<span class="pair-volume ticker-GHS-BTC-volume-left">8495.42925097 GHS</span>
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-xs-9">
<div class="chart">
<div class="market-data">
<div class="row">
<span class="col-xs-2 pair-name">
<span class="title"><nobr><span class="symbol1">BTC</span>/<span class="symbol2">USD</span></nobr></span>
</span>
<span class="col-xs-8">
<div class="row text-center">
<span class="col-xs-3 last-price">
<span class="name">Last price:</span>
<span class="value live_price" id="ohlcv-close"><i class="icn icn-USD"></i>10895.9</span>
</span>
<span class="col-xs-3 daily-change">
<span class="name">Daily change:</span>
<span class="value" id="ohlcv-change"><i class="icn icn-USD"></i>-18.2</span>
</span>
<span class="col-xs-3 day-range hide">
<span class="name">Day's range:</span>
<span class="value" id="days-range"><nobr><span id="ohlcv-low"><i class="icn icn-USD"></i>10630.0</span> - <span id="ohlcv-high"><i class="icn icn-USD"></i>11536.8</span></nobr></span>
</span>
<span class="col-xs-3 today-open">
<span class="name">Today's open:</span>
<span class="value" id="ohlcv-open"><i class="icn icn-USD"></i>10912.0</span>
</span>
<span class="col-xs-3 24h-volume">
<span class="name">24h volume:</span>
<span class="value" id="ohlcv-volume"><i class="icn icn-BTC"></i>2091.43397831</span>
</span>
</div>
</span>
<span class="col-xs-2 text-right">
<a class="btn btn-tradingview-chart pull-right" data-chart-height="768" data-chart-width="1024" href="#" title="TradingView chart (opens new window)"><p>Chart</p></a>
</span>
</div>
</div>
</div>
<div class="chart-iq">
<cq-context class="chart-iq-wrapper" style="height: 400px;">
<cq-ui-manager></cq-ui-manager>
<div class="chartContainer" id="chart-iq-trade" style="height: 800px;"><iframe src="https://sslcharts.forexprostools.com/index.php?force_lang=56&amp;pair_ID=1&amp;timescale=300&amp;candles=50&amp;style=candles" width="770" height="778"></iframe><br><div style="width:500px"><a target="_blank" href="https://in.investing.com/">

<span style="float:right"><span style="font-size: 11px;color: #333333;text-decoration: none;">
</span></span></a><a href="https://in.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link"></a></div>
<defs>
<filter id="ciq-hu-shadow" height="130%">
<fegaussianblur in="SourceAlpha" stddeviation="1"></fegaussianblur>
<feoffset dx="0" dy="1" result="offsetblur"></feoffset>
<fecomponenttransfer>
 <fefunca type="linear" slope="0.2"></fefunca>
</fecomponenttransfer>
<femerge>
<femergenode></femergenode>
<femergenode in="SourceGraphic"></femergenode>
</femerge>
</filter>
</defs>
<polygon class="ciq-hu-bg" fill="#2A51D0" points="198.4,124.4 1,124.4 1,1 214,1 214,137.8" filter="url(#ciq-hu-shadow)"></polygon>
<path class="ciq-hu-stroke" fill="#398DFF" d="M213,2v133.6l-13.7-11.8l-0.6-0.5H198H2V2H213 M215,0H0v125.4h198l17,14.6V0L215,0z"></path>



<canvas height="800" width="848" style="position: absolute; left: 0px; width: 848px; height: 800px;"></canvas><canvas height="800" width="848" style="position: absolute; left: 0px; display: none; width: 848px; height: 800px;"></canvas><canvas height="800" width="848" style="position: absolute; left: 0px; display: none; width: 848px; height: 800px;"></canvas></div>
<div class="ciq-footer" style="display: block;">
<cq-show-range>
<div stxtap="set(60,'minute','minute',1);">1m</div>
<div stxtap="set(3,'hour','minute',3);">3m</div>
<div stxtap="set(5,'hour','minute',5);">5m</div>
<div stxtap="set(15,'hour','minute',15);" class="active-range">15m</div>
<div stxtap="set(30,'hour','minute',30);">30m</div>
<div stxtap="set(60,'hour','hour',1);">1h</div>
<div stxtap="set(120,'hour','hour',2);">2h</div>
<div stxtap="set(240,'hour','hour',4);">4h</div>
<div stxtap="set(360,'hour','hour',6);">6h</div>
<div stxtap="set(30,'day','hour',12);">12h</div>
<div stxtap="set(60,'day','day',1);">1d</div>
<div stxtap="set(6,'month','day',3);">3d</div>
<div stxtap="set(15,'month','day',7);">1w</div>
</cq-show-range>
</div>

<cq-loader></cq-loader>
</cq-context><div class="ciq-slider" style="height: 60px; padding-top: 5px; display: block;"><div class="chartContainer" id="sliderContainer" style="height: 55px;"><span class="stx-btn stx_annotation_save" style="display: none;" id="annotationSave">save</span><span class="stx-btn stx_annotation_cancel" style="display: none; margin-left:10px;" id="annotationCancel">cancel</span><div id="mSticky"> <span id="mStickyInterior"></span> <span id="mStickyRightClick" class=""><span class="overlayEdit stx-btn" style="display:none"><span>&nbsp;</span></span> <span id="overlayTrashCan" class="stx-btn" style="display:none"><span>&nbsp;</span></span> <span id="mouseDeleteInstructions"><span>(</span><span id="mouseDeleteText">right-click to delete</span><span id="mouseManageText">right-click to manage</span><span>)</span></span></span></div><div class="stx_crosshair stx_crosshair_x" style="display: none;" id="crossX"></div><div class="stx_crosshair stx_crosshair_y" style="display: none;" id="crossY"></div><div class="stx_chart_controls" style="display: none; bottom: 42px;" id="chartControls"><div id="chartSize"><span id="zoomOut" class="stx-zoom-out"></span><span id="zoomIn" class="stx-zoom-in"></span></div></div><div class="stx-float-date" style="visibility: hidden; left: 961.5px; bottom: 0px;" id="floatDate"></div><div class="stx-ico-handle" style="display: none;" id="handleTemplate"><span></span></div><div class="stx-panel-control" id="iconsTemplate"><div class="stx-panel-title"></div><div class="stx-btn-panel"><span class="stx-ico-up"></span></div><div class="stx-btn-panel"><span class="stx-ico-focus"></span></div><div class="stx-btn-panel"><span class="stx-ico-down"></span></div><div class="stx-btn-panel"><span class="stx-ico-edit"></span></div><div class="stx-btn-panel"><span class="stx-ico-close"></span></div></div><div class="stx-baseline-handle" style="display: none;" id="baselineHandle"></div><div class="stx-holder stx-panel-chart" cq-panel-name="chart" style="right: 0px; top: 0px; left: 0px; height: 55px; display: block;"><div class="stx-subholder" cq-panel-name="chart" style="z-index: 1; left: 0px; width: 798px; top: 0px; height: 25px;"><div class="stx-panel-control stx-show stx-chart-panel" id="iconsTemplate"><div class="stx-panel-title chart-title">BTC/USD</div><div class="stx-btn-panel" style="display: none;"><span class="stx-ico-up"></span></div><div class="stx-btn-panel" style="display: none;"><span class="stx-ico-focus"></span></div><div class="stx-btn-panel" style="display: none;"><span class="stx-ico-down"></span></div><div class="stx-btn-panel" style="display: none;"><span class="stx-ico-edit"></span></div><div class="stx-btn-panel" style="display: none;"><span class="stx-ico-close"></span></div></div><div id="home" class="stx_jump_today home" style="display:none"><span></span></div></div></div><div class="stx-ico-handle" style="display: none; left: 0px; width: 798px;" id="null"><span></span></div><canvas height="55" width="848" style="position: absolute; left: 0px; width: 848px; height: 55px;"></canvas><canvas height="55" width="848" style="position: absolute; left: 0px; display: none; width: 848px; height: 55px;"></canvas><canvas height="55" width="848" style="position: absolute; left: 0px; display: none; width: 848px; height: 55px;"></canvas></div></div>
</div>
<div id="market-depth-chart" class="market" style="overflow: hidden;display:block">
<h3>Market Depth</h3>
<div id="gcwarper" style="width: 200%;margin-left: -100%;min-height: 300px;">
<div id="loading-left" style="float: left; width: 50%; display: block; padding-top: 100px;"><div id="floatingCirclesG" class="loading_animation">		<div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02">	</div><div class="f_circleG" id="frotateG_03">	</div><div class="f_circleG" id="frotateG_04">	</div><div class="f_circleG" id="frotateG_05">	</div><div class="f_circleG" id="frotateG_06">	</div><div class="f_circleG" id="frotateG_07">	</div><div class="f_circleG" id="frotateG_08">	</div></div></div>
<div id="market-bars-google" style="float: left;width: 50%; display: none"><div id="google-visualization-errors-all-1" style="display: block; padding-top: 2px;"><div id="google-visualization-errors-0" style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 0.8em; line-height: normal; font-family: arial, sans-serif; margin-bottom: 5px;"><span style="background-color: rgb(192, 0, 0); color: white; padding: 2px;">Cannot draw chart: no data specified.</span></div></div></div>
<div id="market-depth-google" class="visible redrawed" style="float: right;width: 50%;"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 842px; height: 300px;"><div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart."><svg width="842" height="300" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_15"><rect x="60" y="10" width="758" height="240"></rect></clipPath></defs><rect x="0" y="0" width="842" height="300" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="60" y="10" width="758" height="240" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(https://bex.io/trade#_ABSTRACT_RENDERER_ID_15)"><g><rect x="60" y="249" width="758" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="60" y="189" width="758" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="60" y="130" width="758" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="60" y="70" width="758" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="60" y="10" width="758" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><g><path d="M60.5,249.5L60.5,249.5L60.5,137.90421964527502L67.57476635514018,143.17759980812917L74.64953271028037,144.02287958665417L81.72429906542055,146.52610591333334L88.79906542056075,152.41443587945832L95.87383177570094,152.58404445415L102.94859813084112,156.20465077373333L110.02336448598132,157.49440023646667L117.0981308411215,161.91128711025L124.17289719626169,164.50975303289584L131.24766355140187,168.0253434495625L138.32242990654206,170.75977761243752L145.39719626168224,174.10099761243748L152.47196261682242,178.16934848385415L159.54672897196264,180.68028967775416L166.62149532710282,184.43975967775418L173.696261682243,190.88590240626667L180.7710280373832,193.2179094157625L187.84579439252337,193.41686820222083L194.92056074766356,195.03337060185416L201.99532710280374,199.40476026852082L209.07009345794393,208.38794916410416L216.1448598130841,210.29576510064584L223.2196261682243,212.524450275075L230.29439252336448,212.91194198485L237.36915887850466,213.69954030439166L244.44392523364485,217.63019832651668L251.51869158878506,220.46045562875418L258.5934579439253,220.77035832674585L265.6682242990654,222.82906221395L272.74299065420564,223.411899139725L279.81775700934577,224.92794150025L286.892523364486,225.07955575896668L293.96728971962614,225.59217797015833L301.0420560747664,226.06734762560416L308.1168224299065,226.27809318502082L315.19158878504675,227.4878911289375L322.26635514018693,227.76248101129585L329.3411214953271,228.0786207249875L336.4158878504673,229.1594312870625L343.4906542056075,229.91782533222084L350.56542056074767,230.95912257499168L357.64018691588785,231.28783360901667L364.71495327102804,233.49845212615418L371.7897196261682,234.00370975947916L378.8644859813084,235.67510453091666L385.9392523364486,236.30863955475834L393.0140186915888,236.65181957210416L400.08878504672896,237.89557351869584L407.16355140186914,238.17911309065417L414.2383177570093,240.12791450285L421.3130841121495,242.01001718722083L428.3878504672897,243.855345041175L435.4626168224299,248.60654917198335L435.4626168224299,249.5L435.4626168224299,249.5Z" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#92b6e8"></path></g><g><path d="M442.5373831775701,249.5L442.5373831775701,249.5L442.5373831775701,249.0661480949375L449.6121495327103,243.39844846532915L456.6869158878505,243.2760468778625L463.7616822429907,242.3502401959875L470.83644859813086,242.057042312375L477.91121495327104,241.22910028595416L484.9859813084112,240.77609304972083L492.0607476635514,240.12907148193332L499.1355140186916,234.8029054305375L506.2102803738318,231.35959658153334L513.285046728972,226.00019946724166L520.3598130841121,224.88432457882917L527.4345794392523,222.62599603523333L534.5093457943925,221.28635756511667L541.5841121495328,220.3618608372625L548.6588785046729,220.11806943198334L555.733644859813,218.72354161241668L562.8084112149533,218.4343347908L569.8831775700935,218.41854639901666L576.9579439252336,218.26910846235L584.0327102803739,218.2247472570875L591.107476635514,217.37889868445416L598.1822429906542,217.2949703370875L605.2570093457944,216.49559517902082L612.3317757009346,216.47171011652085L619.4065420560747,203.51266387332916L626.481308411215,177.9140053272625L633.5560747663551,168.90028246984167L640.6308411214953,87.03408775938334L647.7056074766355,42.55451443075833L654.7803738317757,42.26858232938332L661.8551401869158,41.73281628730416L668.9299065420561,41.63323295397083L676.0046728971963,41.57109082985835L683.0794392523364,40.76707856292083L690.1542056074767,40.738411334483345L697.2289719626168,40.43131613264583L704.303738317757,40.03456308025835L711.3785046728972,39.90373475510833L718.4532710280374,39.703377048870834L725.5280373831775,39.277871515750036L732.6028037383178,38.3985228160125L739.6775700934579,38.144952557437534L746.7523364485982,37.383273034050006L753.8271028037383,35.56117306031251L760.9018691588785,35.4125514112167L767.9766355140187,35.19751151672918L775.0514018691589,34.167207822845825L782.126168224299,33.88146860940833L789.2009345794393,33.55996398504169L796.2757009345794,33.54820397311249L803.3504672897196,33.257766337345856L810.4252336448598,32.996474269595836L817.5,32.69780797835003L817.5,249.5L817.5,249.5Z" stroke="none" stroke-width="0" fill-opacity="0.3" fill="#aace6c"></path></g></g><g><rect x="60" y="249" width="758" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g><g><path d="M60.5,137.90421964527502L67.57476635514018,143.17759980812917L74.64953271028037,144.02287958665417L81.72429906542055,146.52610591333334L88.79906542056075,152.41443587945832L95.87383177570094,152.58404445415L102.94859813084112,156.20465077373333L110.02336448598132,157.49440023646667L117.0981308411215,161.91128711025L124.17289719626169,164.50975303289584L131.24766355140187,168.0253434495625L138.32242990654206,170.75977761243752L145.39719626168224,174.10099761243748L152.47196261682242,178.16934848385415L159.54672897196264,180.68028967775416L166.62149532710282,184.43975967775418L173.696261682243,190.88590240626667L180.7710280373832,193.2179094157625L187.84579439252337,193.41686820222083L194.92056074766356,195.03337060185416L201.99532710280374,199.40476026852082L209.07009345794393,208.38794916410416L216.1448598130841,210.29576510064584L223.2196261682243,212.524450275075L230.29439252336448,212.91194198485L237.36915887850466,213.69954030439166L244.44392523364485,217.63019832651668L251.51869158878506,220.46045562875418L258.5934579439253,220.77035832674585L265.6682242990654,222.82906221395L272.74299065420564,223.411899139725L279.81775700934577,224.92794150025L286.892523364486,225.07955575896668L293.96728971962614,225.59217797015833L301.0420560747664,226.06734762560416L308.1168224299065,226.27809318502082L315.19158878504675,227.4878911289375L322.26635514018693,227.76248101129585L329.3411214953271,228.0786207249875L336.4158878504673,229.1594312870625L343.4906542056075,229.91782533222084L350.56542056074767,230.95912257499168L357.64018691588785,231.28783360901667L364.71495327102804,233.49845212615418L371.7897196261682,234.00370975947916L378.8644859813084,235.67510453091666L385.9392523364486,236.30863955475834L393.0140186915888,236.65181957210416L400.08878504672896,237.89557351869584L407.16355140186914,238.17911309065417L414.2383177570093,240.12791450285L421.3130841121495,242.01001718722083L428.3878504672897,243.855345041175L435.4626168224299,248.60654917198335" stroke="#92b6e8" stroke-width="2" fill-opacity="1" fill="none"></path><path d="M442.5373831775701,249.0661480949375L449.6121495327103,243.39844846532915L456.6869158878505,243.2760468778625L463.7616822429907,242.3502401959875L470.83644859813086,242.057042312375L477.91121495327104,241.22910028595416L484.9859813084112,240.77609304972083L492.0607476635514,240.12907148193332L499.1355140186916,234.8029054305375L506.2102803738318,231.35959658153334L513.285046728972,226.00019946724166L520.3598130841121,224.88432457882917L527.4345794392523,222.62599603523333L534.5093457943925,221.28635756511667L541.5841121495328,220.3618608372625L548.6588785046729,220.11806943198334L555.733644859813,218.72354161241668L562.8084112149533,218.4343347908L569.8831775700935,218.41854639901666L576.9579439252336,218.26910846235L584.0327102803739,218.2247472570875L591.107476635514,217.37889868445416L598.1822429906542,217.2949703370875L605.2570093457944,216.49559517902082L612.3317757009346,216.47171011652085L619.4065420560747,203.51266387332916L626.481308411215,177.9140053272625L633.5560747663551,168.90028246984167L640.6308411214953,87.03408775938334L647.7056074766355,42.55451443075833L654.7803738317757,42.26858232938332L661.8551401869158,41.73281628730416L668.9299065420561,41.63323295397083L676.0046728971963,41.57109082985835L683.0794392523364,40.76707856292083L690.1542056074767,40.738411334483345L697.2289719626168,40.43131613264583L704.303738317757,40.03456308025835L711.3785046728972,39.90373475510833L718.4532710280374,39.703377048870834L725.5280373831775,39.277871515750036L732.6028037383178,38.3985228160125L739.6775700934579,38.144952557437534L746.7523364485982,37.383273034050006L753.8271028037383,35.56117306031251L760.9018691588785,35.4125514112167L767.9766355140187,35.19751151672918L775.0514018691589,34.167207822845825L782.126168224299,33.88146860940833L789.2009345794393,33.55996398504169L796.2757009345794,33.54820397311249L803.3504672897196,33.257766337345856L810.4252336448598,32.996474269595836L817.5,32.69780797835003" stroke="#aace6c" stroke-width="2" fill-opacity="1" fill="none"></path></g></g><g></g><g><g><text text-anchor="middle" x="60.5" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">5500.0</text></g><g><text text-anchor="middle" x="159.54672897196264" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">6900.0</text></g><g><text text-anchor="middle" x="258.5934579439253" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">8300.0</text></g><g><text text-anchor="middle" x="357.64018691588785" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">9700.0</text></g><g><text text-anchor="middle" x="456.6869158878505" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">11100.0</text></g><g><text text-anchor="middle" x="555.733644859813" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">12500.0</text></g><g><text text-anchor="middle" x="654.7803738317757" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">13900.0</text></g><g><text text-anchor="middle" x="753.8271028037383" y="269.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#222222">15300.0</text></g><g><text text-anchor="end" x="47" y="254.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="47" y="194.3" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#444444">600</text></g><g><text text-anchor="end" x="47" y="134.55" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#444444">1,200</text></g><g><text text-anchor="end" x="47" y="74.8" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#444444">1,800</text></g><g><text text-anchor="end" x="47" y="15.05" font-family="Open Sans" font-size="13" stroke="none" stroke-width="0" fill="#444444">2,400</text></g></g></g><g></g></svg></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 310px; left: 852px; white-space: nowrap; font-family: &quot;Open Sans&quot;; font-size: 13px;">...</div><div></div></div></div>
<div id="loading-right" style="float: left; width: 50%; display: none; padding-top: 100px;"><div id="floatingCirclesG" class="loading_animation">		<div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02">	</div><div class="f_circleG" id="frotateG_03">	</div><div class="f_circleG" id="frotateG_04">	</div><div class="f_circleG" id="frotateG_05">	</div><div class="f_circleG" id="frotateG_06">	</div><div class="f_circleG" id="frotateG_07">	</div><div class="f_circleG" id="frotateG_08">	</div></div></div>
</div>
<ul class="charts-switch">
<li class="gd ID-ID-modeSelector-0 bars ">A</li>
<li class="gd ID-ID-modeSelector-1 Ifb depth active">B</li>
</ul>
</div>
</div>
</div>
<div id="buy-sell-forms" class="flip clearfix">
<div id="trade-form-tabbed-selector-input" class="buy-sell-forms-tabs-list">
<li><a id="trade-form-tabbed-selector-limit" class="buy-sell-tabs-link active limit-trade">Limit</a></li>
<li><a id="trade-form-tabbed-selector-market" class="buy-sell-tabs-link market-trade">Market</a></li>
<li><a id="trade-form-tabbed-selector-margin" class="buy-sell-tabs-link margin-trade">Margin trading</a></li>
</div>
<div class="card">
<div id="trade-forms">

<div id="order-type-form-limit" class="buy-sell-block">
<div class="buy-sell">
<span class="or">or</span>
<div class="row">
<div class="col-xs-6">
<section id="limit-buy" class="panel">
<header class="panel-heading bg-white">
<span class="title">
Buy
<span id="limit-buy-title-currency" data-symbol1="">BTC</span>:
</span>
<span class="text-muted m-l-small pull-right">
<span id="limit-buy-balance-currency" data-symbol2="">USD</span>
balance:
<span id="limit-buy-balance-value" class="symbol2-available" data-balance="">0.00</span>
</span>
</header>
<div class="block1">
<form class="form" id="buy">
<fieldset>
<div id="limit-buy-amount" class="control-group form-group" data-amount-error="">
<label class="control-label" for="amount">Amount to Buy</label>
<div class="controls">
<div class="input-group">
<input id="limit-buy-amount-value" class="form-control input-small" name="amount" data-amount="" autocomplete="off" type="text">
<span id="limit-buy-amount-currency" class="input-group-addon" data-symbol1="">BTC</span>
</div>
<span id="limit-buy-amount-message" class="help-block" data-amount-error-message=""></span>
</div>
</div>
<div id="limit-buy-price" class="control-group form-group" data-price-error="">
<label class="control-label" for="price">Price per
<span id="limit-buy-price-message-currency" data-symbol1="">BTC</span>
</label>
<div class="controls">
<div class="input-group">
<input id="limit-buy-price-value" class="form-control input-small" name="price" data-price="" autocomplete="off" type="text">
<span id="limit-buy-price-currency" class="input-group-addon" data-symbol2="">USD</span>
</div>
<span id="limit-buy-price-message" class="help-block" data-price-error-message=""></span>
</div>
</div>
<div class="control-group mini form-group">
<button id="limit-buy-placeOrder" type="submit" class="btn btn-small btn-blue btn-sm" rel="tooltip" disabled="" data-submit="">Place order</button>
</div>
</fieldset>
<div class="total">
<b>Total:</b> &nbsp; &nbsp;
<span id="limit-buy-total-value" data-total="">0.00</span>
<span id="limit-buy-total-currency" data-symbol2="">USD</span>
&nbsp; &nbsp; &nbsp;
<span class="fee">
(Fee:
<span id="limit-buy-fee-value" data-maker-fee="">0.00</span> -
<span id="limit-buy-fee-value" data-taker-fee="">0.00</span>
<span id="limit-buy-fee-currency" data-symbol2="">USD</span>)
</span>
</div>
<div id="limit-buy-alerts" class="row row-alert">
<div class="alert" style="display:none" data-alert=""></div>
</div>
</form>
</div>
</section>
</div>
<div class="col-xs-6">
<section id="limit-sell" class="panel pull-right">
<header class="panel-heading bg-white">
<span class="title">
Sell
<span id="limit-sell-title-currency" data-symbol1="">BTC</span>:
</span>
<span class="text-muted m-l-small pull-right">
<span id="limit-sell-balance-currency" data-symbol1="">BTC</span>
balance:
<span class="symbol1-available" id="limit-sell-balance-value" data-balance="">0.00000000</span>
</span>
</header>
<div class="block1">
<form class="form" id="sell">
<fieldset>
<div id="limit-sell-amount" class="control-group form-group" data-amount-error="">
<label class="control-label" for="amount">Amount to Sell</label>
<div class="controls">
<div class="input-group">
<input id="limit-sell-amount-value" class="form-control input-small" name="amount" data-amount="" autocomplete="off" type="text">
<span id="limit-sell-amount-currency" class="input-group-addon" data-symbol1="">BTC</span>
</div>
<span id="limit-sell-amount-message" class="help-block" data-amount-error-message=""></span>
</div>
</div>
<div id="limit-sell-price" class="control-group form-group" data-price-error="">
<label class="control-label" for="price">Price per
<span id="limit-sell-price-message-currency" data-symbol1="">BTC</span>
</label>
<div class="controls">
<div class="input-group">
<input id="limit-sell-price-value" class="form-control input-small" name="price" data-price="" autocomplete="off" type="text">
<span id="limit-sell-price-currency" class="input-group-addon" data-symbol2="">USD</span>
</div>
<span id="limit-sell-price-message" class="help-block" data-price-error-message=""></span>
</div>
</div>
<div class="control-group mini form-group">
<button id="limit-sell-placeOrder" type="submit" class="btn btn-small btn-blue btn-sm" rel="tooltip" disabled="" data-submit="">Place order</button>
</div>
</fieldset>
<div class="total">
<b>Total:</b> &nbsp; &nbsp;
<span id="limit-sell-total-value" data-total="">0.00</span>
<span id="limit-sell-total-currency" data-symbol2="">USD</span>
&nbsp; &nbsp; &nbsp;
<span class="fee">
(Fee:
<span id="limit-sell-fee-value" data-maker-fee="">0.00</span> -
<span id="limit-sell-fee-value" data-taker-fee="">0.00</span>
<span id="limit-sell-fee-currency" data-symbol2="">USD</span>)
</span>
</div>
<div id="limit-sell-alerts" class="row row-alert">
<div class="alert" style="display:none" data-alert=""></div>
</div>
</form>
</div>
</section>
</div>
</div>
</div>
</div>

<div id="order-type-form-market" class="buy-sell-block" style="display: none">
<div class="buy-sell">
<span class="or">or</span>
<div class="row">
<div class="col-xs-6">
<section id="market-buy" class="panel">
<header class="panel-heading bg-white">
<span class="title">
Instant buy
<span data-symbol1="">BTC</span>:
</span>
<span class="text-muted m-l-small pull-right">
<span data-symbol2="">USD</span> balance: <span class="symbol2-available" data-balance="">0.00</span></span>
</header>
<div class="block">
<form class="form">
<fieldset>
<div class="control-group form-group" data-spend-error="">
<label class="control-label" for="amount">
<span data-symbol2="">USD</span> to Spend
</label>
<div class="controls">
<div class="input-group">
<input class="form-control input-small" autocomplete="off" data-spend="" type="text">
<span class="input-group-addon" data-symbol2="">USD</span>
</div>
<span class="help-block" data-spend-error-message=""></span>
</div>
</div>
<div class="control-group form-group" data-amount-error="">
<label class="control-label">
Estimated <span data-symbol1="">BTC</span> amount: *
</label>
<div class="controls">
<div class="input-group">
<input class="form-control input-small" disabled="" data-amount="" type="text">
<span class="input-group-addon" data-symbol1="">BTC</span>
</div>
<span class="help-block" data-amount-error-message=""></span>
</div>
</div>
<div class="control-group mini form-group">
<button type="submit" class="btn btn-small btn-blue btn-sm" rel="tooltip" disabled="" data-submit="">Buy now</button>
</div>
</fieldset>
<div class="total">
* The estimated <span data-symbol1="">BTC</span> amount is calculated from the lowest price offered to a higher price until all <span data-symbol2="">USD</span> is spent
</div>
<div id="market-buy-alerts" class="row row-alert">
<div class="alert" style="display:none" data-alert=""></div>
</div>
</form>
</div>
</section>
</div>
<div class="col-xs-6">
<section id="market-sell" class="panel pull-right">
<header class="panel-heading bg-white">
<span class="title">
Instant sell
<span data-symbol1="">BTC</span>:
</span>
<span class="text-muted m-l-small pull-right">
<span data-symbol1="">BTC</span> balance: <span class="symbol1-available" data-balance="">0.00000000</span>
</span>
</header>
<div class="block">
<form class="form" id="isell">
<fieldset>
<div class="control-group form-group" data-spend-error="">
<label class="control-label" for="amount">
<span data-symbol1="">BTC</span>
to Sell
</label>
<div class="controls">
<div class="input-group">
<input class="form-control input-small" autocomplete="off" data-spend="" type="text">
<span class="input-group-addon" data-symbol1="">BTC</span>
</div>
<span class="help-block" data-spend-error-message=""></span>
</div>
</div>
<div class="control-group form-group" data-amount-error="">
<label class="control-label" for="amount">
Estimated <span data-symbol2="">USD</span> amount:*
</label>
<div class="controls">
<div class="input-group">
<input class="form-control input-small" name="sum" disabled="" data-amount="" type="text">
<span class="input-group-addon" data-symbol2="">USD</span>
</div>
<span class="help-block" data-amount-error-message=""></span>
</div>
</div>
<div class="control-group mini form-group">
<button type="submit" class="btn btn-small btn-blue btn-sm" rel="tooltip" disabled="" data-submit="">Sell now</button>
</div>
</fieldset>
<div class="total">
* The estimated <span data-symbol2="">USD</span> amount is calculated from the highest price offered to a lower price until all <span data-symbol1="">BTC</span> is sold
</div>
<div id="market-sell-alerts" class="row row-alert">
<div class="alert" style="display:none" data-alert=""></div>
</div>
</form>
</div>
</section>
</div>
</div>
</div>
</div>

<div id="order-type-form-margin" class="margin buy-sell-block" style="display: none">
<div id="mt-trade-forms">
<div id="mt-enabled-for-pair" class="buy-sell">
<div class="total">
<i class="arrow up"></i>Position can be profitable if price grows
</div>
<div class="total right">
<i class="arrow down"></i>Position can be profitable if price falls
</div>
<span class="or">or</span>
<div class="row">

<div class="col-xs-6">
<section class="panel">
<header class="panel-heading bg-white">
<p class="block-title">Choose collateral currency:</p>
<span class="title btn-group">
<button class="btn btn-small btn-default btn-sm" id="mt-msymbol-s1-long"></button>
<button class="btn btn-small btn-default btn-sm" id="mt-msymbol-s2-long"></button>
</span>
<span class="text-muted m-l-small pull-right" role="button">
<span class="symbol2" id="mt-user-balance-symbol-long">USD</span> balance: <span class="symbol2-available" id="mt-user-balance-amount-long"></span>
</span>
</header>
<div class="block">
<form class="form" id="mt-long-form" novalidate="novalidate">
<fieldset>
<div class="margin-row">
<div id="mt-amount-control-group-long" class="control-group form-group">
<label class="control-label" for="mt-amount-input-long">Position amount</label>
<div class="controls">
<div class="input-group">
<input id="mt-amount-input-long" class="form-control input-small" name="amount" numbers-and-one-dot-only="" autocomplete="off" type="text">
<span id="mt-amount-symbol-long" class="input-group-addon"></span>
</div>
<span id="mt-amount-help-inline-long" class="help-block"></span>
</div>
</div>
<div class="control-group mini form-group">
<label class="control-label"> Leverage</label>
<span class="leverage-step">
1 :
</span>
<div id="mt-leverage-long-input" class="btn-group">

</div>
</div>
<div id="mt-stoploss-control-group-long" class="control-group form-group">
<label class="control-label" for="liquidation-buy"> Stop loss price</label>
<div class="controls">
<div class="input-group">
<input id="mt-stoploss-input-long" class="form-control input-small" name="stoploss" numbers-and-one-dot-only="" autocomplete="off" type="text">
<span class="input-group-addon symbol2">USD</span>
</div>
<span id="mt-stoploss-help-inline-long" class="help-block"></span>
</div>
</div>
</div>
<table class="fee-table total-table">
<tbody><tr>
<td>Estimated open price:</td>
<td><span id="mt-estimated-oprice-long"></span></td>
</tr>
<tr>
<td>Open fee:</td>
<td><span id="mt-fee-long-ofee-amount"></span> <span id="mt-fee-long-ofee-symbol"></span> (<span id="mt-fee-long-ofee"></span>%)</td>
</tr>
<tr>
<td>Rollover fee per <span id="mt-fee-long-pfee-interval"></span>:</td>
<td><span id="mt-fee-long-pfee"></span>% <span id="mt-fee-long-pfee-symbol"></span></td>
</tr>
<tr>
<td>Margin:</td>
<td><span id="mt-omamount-long"></span> <span id="mt-omamount-symbol-long"></span></td>
</tr>
</tbody></table>
<div class="text-center button-holder">
<a style="left: 0;" id="mt-open-position-more-info-link-long" class="margin-tooltip-link" href="#"><i></i>More info</a>
<button id="mt-open-position-button-long" class="btn btn-blue">Open long position</button>
</div>
</fieldset>
<div class="row row-alert">
<div id="mt-open-position-result-long" class="alert hide fade in alert-danger">
<button type="button" class="btn btn-info btn-mini" data-dismiss="alert">×</button>
<span></span>
</div>
</div>
</form>
</div>
<div id="mt-open-position-more-info-tooltip-long" class="margin-tooltip">
<p>Position amount - total position amount (own and borrowed funds)</p>
<p>Leverage — ratio of your own funds to the total sum of your own funds and borrowed money for position opening.</p>
<p>Stop loss price — price near which your position will be closed automatically in case of unfavorable market conditions.</p>
<p>Estimated open price — estimated maximum price at which your position will be opened.</p>
<p>Open fee — estimated fee charged for opening a position.</p>
<p>Rollover fee — estimated fee that will be charged from your balance to rollover a position for the next 4 hours.</p>
<p>Margin — estimated maximum amount of your own funds used to open position, excluding fees.</p>
<p>Collateral currency is a currency in which margin will be reserved from your account balance.</p>
<button style="right: 20px;  bottom: 10px;" id="mt-open-position-more-info-tooltip-close-long" type="button" class="btn btn-info btn-mini">Close</button>
</div>
</section>
</div>

<div class="col-xs-6">
<section class="panel pull-right">
<header class="panel-heading bg-white">
<p class="block-title">Choose collateral currency:</p>
<span class="title btn-group">
<button class="btn btn-small btn-default btn-sm" id="mt-msymbol-s1-short"></button>
<button class="btn btn-small btn-default btn-sm" id="mt-msymbol-s2-short"></button>
</span>
<span class="text-muted m-l-small pull-right">
<span class="symbol2" id="mt-user-balance-symbol-short">USD</span> balance: <span class="symbol2-available" id="mt-user-balance-amount-short"></span>
</span>
</header>
<div class="block">
<form class="form" id="mt-short-form" novalidate="novalidate">
<fieldset>
<div class="margin-row">
<div id="mt-amount-control-group-short" class="control-group form-group">
<label class="control-label" for="mt-amount-input-short">Position amount</label>
<div class="controls">
<div class="input-group">
<input id="mt-amount-input-short" class="form-control input-small" name="amount" numbers-and-one-dot-only="" autocomplete="off" type="text">
<span id="mt-amount-symbol-short" class="input-group-addon"></span>
</div>
<span id="mt-amount-help-inline-short" class="help-block"></span>
</div>
</div>
<div class="control-group mini form-group">
<label class="control-label"> Leverage</label>
<span class="leverage-step">1 :</span>
<div id="mt-leverage-short-input" class="btn-group">

</div>
</div>
<div id="mt-stoploss-control-group-short" class="control-group form-group">
<label class="control-label" for="mt-stoploss-input-short"> Stop loss price</label>
<div class="controls">
<div class="input-group">
<input id="mt-stoploss-input-short" class="form-control input-small" name="stoploss" numbers-and-one-dot-only="" autocomplete="off" type="text">
<span class="input-group-addon symbol2">USD</span>
</div>
<span id="mt-stoploss-help-inline-short" class="help-block"></span>
</div>
</div>
</div>
<table class="fee-table total-table">
<tbody><tr>
<td>Estimated open price:</td>
<td><span id="mt-estimated-oprice-short"></span></td>
</tr>
<tr>
<td>Open fee:</td>
<td><span id="mt-fee-short-ofee-amount"></span> <span id="mt-fee-short-ofee-symbol"></span> (<span id="mt-fee-short-ofee"></span>%)</td>
</tr>
<tr>
<td>Rollover fee per <span id="mt-fee-short-pfee-interval"></span>:</td>
<td><span id="mt-fee-short-pfee"></span>% <span id="mt-fee-short-pfee-symbol"></span></td>
</tr>
<tr>
<td>Margin:</td>
<td><span id="mt-omamount-short"></span> <span id="mt-omamount-symbol-short"></span></td>
</tr>
</tbody></table>
<div class="text-center button-holder">
<button id="mt-open-position-button-short" class="btn btn-blue">Open short position</button>
<a style="right: 0;" id="mt-open-position-more-info-link-short" class="margin-tooltip-link" href="#"><i></i>More info</a>
</div>
</fieldset>
<div class="row row-alert">
<div id="mt-open-position-result-short" class="alert hide fade in alert-danger">
<button type="button" class="btn btn-info btn-mini" data-dismiss="alert">×</button>
<span></span>
</div>
</div>
</form>
</div>
<div id="mt-open-position-more-info-tooltip-short" class="margin-tooltip">
<p>Position amount - total position amount (own and borrowed funds)</p>
<p>Leverage — ratio of Bitcoins that you can buy using your own funds to the total amount of Bitcoins, including borrowed funds.</p>
<p>Stop loss price — price near which your position will be closed automatically in case of unfavorable market conditions.</p>
<p>Estimated open price — estimated minimum price at which your position will be opened.</p>
<p>Open fee — estimated fee charged for opening a position.</p>
<p>Rollover fee — estimated fee that will be charged from your balance to rollover a position for the next 4 hours.</p>
<p>Margin — estimated maximum amount of your own funds used to open position, excluding fees.</p>
<p>Collateral currency is a currency in which margin will be reserved from your account balance.</p>
<button style="right: 20px; bottom: 10px;" id="mt-open-position-more-info-tooltip-close-short" type="button" class="btn btn-info btn-mini">Close</button>
</div>
</section>
</div>
</div>
</div>
</div>
<div id="mt-disabled-for-selected-pair" class="margin no-margin-block text-center" style="display: none;">
<h3>For this pair margin trading is temporarily unavailable.</h3>
<p>Please choose another trading pair:</p>
<span id="mt-disabled-for-selected-pair-alternatives">

</span>
</div>
</div>
<div id="mt-open-disabled" class="margin margin-trading-block text-center margin-open-disabled-warning" style="display: none;">
<img src="../../img/mt-open-disabled.html" alt="MT open position disabled">
<h3></h3>
</div>
<div id="mt-not-available" class="margin margin-trading-block text-center alert alert-warning" style="display: none;">
<div class="margin-trading-text alert alert-danger" id="mt-not-available-error" style="display: none;"></div>
<h3>Margin trading not supported</h3>
<p class="margin-trading-text">Unfortunately, margin trading is not available for you. Please, contact our support team if you have any questions.</p>
</div>
<div id="mt-not-available-us" class="margin margin-trading-block text-center alert alert-warning" style="display: none;">
<div class="margin-trading-text alert alert-danger" id="mt-not-available-us-error" style="display: none;"></div>
<h3>Margin trading not supported in the USA</h3>
<p class="margin-trading-text">Unfortunately, margin trading is not available for users from the USA.</p>
<p class="margin-trading-text">If you are not a US resident, please, complete identity verification first.</p>
<a class="btn btn-info modal-button-main" href="https://bitexchange.systems/verification">Go to Verification</a>
</div>
<div id="mt-disclaimer" class="margin margin-trading-block text-center alert alert-warning" style="display: none;">
<div class="margin-trading-text alert alert-danger" id="mt-disclaimer-error" style="display: none;">
</div>
<h3>Margin Trading: High Risk Involved</h3>
<form class="form" id="mt-disclaimer-form" novalidate="novalidate">
<p class="margin-trading-text">Please be aware that Margin trading is considered as high-risk activity. By using Margin trading option, you confirm that you understand the risk and undertake full responsibility on all actions made on Margin trading page.</p>
<p class="margin-trading-text margin-top">
<input class="margin-trading-checkbox" name="accept-tos" value="true" id="mt-disclaimer-accept-tos" type="checkbox">
<label for="mt-disclaimer-accept-tos">I fully acknowledge and undertake the high risk of margin trading activity.</label>
</p>
<p class="margin-trading-text margin-top">
<input class="margin-trading-checkbox" name="accept-residence" value="true" id="mt-disclaimer-accept-residence" type="checkbox">
<label for="mt-disclaimer-accept-residence">I confirm that I am not a resident of the United States of America.</label>
</p>
<button class="btn btn-blue disabled" id="mt-disclaimer-form-submit">Confirm</button>
</form>
</div>
</div>
</div>
</div>
<div id="mt-active-positions-element" class="active-orders margin-active-orders" style="display: none;">
<div class="row">
<div class="col-xs-12">
<h3>Active Positions <button style="float: right;" id="mt-close-all-positions-button" class="btn btn-red btn-mini"><i class="icn-remove icon-white"></i>Close All</button></h3>
<div class="row">
<div class="col-xs-12">
<div id="mt-close-position-result" class="alert hide fade in">
<button type="button" class="btn btn-info btn-mini" data-dismiss="alert">×</button>
<span></span>
</div>
</div>
</div>
<div style="overflow-y: hidden; height: 233px; background: #f7f8f9; border-bottom: 1px solid #dddddd;">
<table id="mt-active-positions-table" class="table table-bordered">
<thead>
<tr>
<th>Position #</th>
<th>Open date</th>
<th>Type</th>
<th>Amount</th>
<th>Margin</th>
<th>Open price</th>
<th>Current price</th>
<th>Stop loss</th>
<th>Fee</th>
<th>Unrealized P/L</th>
<th>Actions</th>
</tr>
</thead>
<tbody id="mt-active-positions-tbody">
</tbody>
</table>

</div>
<br>
</div>
</div>
</div>
<div id="ghs-unprofitable" class="margin ghs-unprofitable-block text-center alert alert-warning" role="alert" style="display: none;">
<h3>Warning! Cloud-based GHS mining is paused.</h3>
<form class="form" id="mt-disclaimer-form" novalidate="novalidate">
<p class="ghs-unprofitable-text"><input class="ghs-unprofitable-checkbox" name="ghs-unprofitable-accept" value="true" id="ghs-unprofitable-accept" type="checkbox">I understand that cloud-based GHS mining is paused due to unprofitability. I am fully aware that unprofitable mining can decrease my balance, and even run it into negative values. I undertake full responsibility for all my activities with cloud-based GHS mining, including, but not limited to trading GHS.</p>
<button class="btn btn-red disabled" id="ghs-unprofitable-form-submit">Confirm</button>
</form>
</div>
<div class="buy-sell-orders">
<div class="row">
<div class="col-xs-6">
<div style="width: 96%">
<header>
<span class="title">Sell Orders</span>
<span class="text-muted pull-right">
<i class="icn-time"></i> Total <span class="symbol1">BTC</span> available: <span id="md-sell-total">2297.53076684</span>
</span>
</header>
<div style="overflow-y: hidden;height: 408px;width: 106%;">
<table id="md-sell" class="table table-bordered md-table">
<thead>
<tr>
<th>Price per <span class="symbol1">BTC</span></th>
<th><span class="symbol1">BTC</span> Amount</th>
<th>Total: (<span class="symbol2">USD</span>)</th>
</tr>
</thead>
<tbody id="md-sell-tbody"><tr id="md-sell-10895-9" price="10895.9" amount="28212906" t="sell" class="highlight-green" style="cursor: pointer;"><td>10895.9</td><td class="amount"><i class="icn icn-BTC"></i>0.28212906</td><td class="amount-sum"><i class="icn icn-USD"></i>3074.06</td></tr><tr id="md-sell-10896-0" price="10896.0" amount="20000000" t="sell" class="highlight-green" style="cursor: pointer;"><td>10896.0</td><td class="amount"><i class="icn icn-BTC"></i>0.20000000</td><td class="amount-sum"><i class="icn icn-USD"></i>2179.20</td></tr><tr id="md-sell-10897-0" price="10897.0" amount="6000000" t="sell" style="cursor: pointer;"><td>10897.0</td><td class="amount"><i class="icn icn-BTC"></i>0.06000000</td><td class="amount-sum"><i class="icn icn-USD"></i>653.82</td></tr><tr id="md-sell-10900-0" price="10900.0" amount="412604200" t="sell" style="cursor: pointer;"><td>10900.0</td><td class="amount"><i class="icn icn-BTC"></i>4.12604200</td><td class="amount-sum"><i class="icn icn-USD"></i>44973.86</td></tr><tr id="md-sell-10900-3" price="10900.3" amount="4000000" t="sell" style="cursor: pointer;"><td>10900.3</td><td class="amount"><i class="icn icn-BTC"></i>0.04000000</td><td class="amount-sum"><i class="icn icn-USD"></i>436.02</td></tr><tr id="md-sell-10901-3" price="10901.3" amount="396649028" t="sell" style="cursor: pointer;"><td>10901.3</td><td class="amount"><i class="icn icn-BTC"></i>3.96649028</td><td class="amount-sum"><i class="icn icn-USD"></i>43239.91</td></tr><tr id="md-sell-10902-0" price="10902.0" amount="3000000000" t="sell" style="cursor: pointer;"><td>10902.0</td><td class="amount"><i class="icn icn-BTC"></i>30.00000000</td><td class="amount-sum"><i class="icn icn-USD"></i>327060.00</td></tr><tr id="md-sell-10906-9" price="10906.9" amount="5758317" t="sell" style="cursor: pointer;"><td>10906.9</td><td class="amount"><i class="icn icn-BTC"></i>0.05758317</td><td class="amount-sum"><i class="icn icn-USD"></i>628.06</td></tr><tr id="md-sell-10908-7" price="10908.7" amount="70000000" t="sell" style="cursor: pointer;"><td>10908.7</td><td class="amount"><i class="icn icn-BTC"></i>0.70000000</td><td class="amount-sum"><i class="icn icn-USD"></i>7636.09</td></tr><tr id="md-sell-10924-9" price="10924.9" amount="10000000" t="sell" style="cursor: pointer;"><td>10924.9</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1092.49</td></tr><tr id="md-sell-10945-4" price="10945.4" amount="1640740000" t="sell" style="cursor: pointer;"><td>10945.4</td><td class="amount"><i class="icn icn-BTC"></i>16.40740000</td><td class="amount-sum"><i class="icn icn-USD"></i>179585.56</td></tr><tr id="md-sell-10950-0" price="10950.0" amount="2129957" t="sell" style="cursor: pointer;"><td>10950.0</td><td class="amount"><i class="icn icn-BTC"></i>0.02129957</td><td class="amount-sum"><i class="icn icn-USD"></i>233.24</td></tr><tr id="md-sell-10954-1" price="10954.1" amount="55096256" t="sell" style="cursor: pointer;"><td>10954.1</td><td class="amount"><i class="icn icn-BTC"></i>0.55096256</td><td class="amount-sum"><i class="icn icn-USD"></i>6035.30</td></tr><tr id="md-sell-10960-2" price="10960.2" amount="222611" t="sell" style="cursor: pointer;"><td>10960.2</td><td class="amount"><i class="icn icn-BTC"></i>0.00222611</td><td class="amount-sum"><i class="icn icn-USD"></i>24.40</td></tr><tr id="md-sell-10960-8" price="10960.8" amount="233426738" t="sell" style="cursor: pointer;"><td>10960.8</td><td class="amount"><i class="icn icn-BTC"></i>2.33426738</td><td class="amount-sum"><i class="icn icn-USD"></i>25585.44</td></tr><tr id="md-sell-10961-5" price="10961.5" amount="190203929" t="sell" style="cursor: pointer;"><td>10961.5</td><td class="amount"><i class="icn icn-BTC"></i>1.90203929</td><td class="amount-sum"><i class="icn icn-USD"></i>20849.21</td></tr><tr id="md-sell-10965-0" price="10965.0" amount="10000000" t="sell" style="cursor: pointer;"><td>10965.0</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1096.50</td></tr><tr id="md-sell-10971-9" price="10971.9" amount="10000000" t="sell" style="cursor: pointer;"><td>10971.9</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1097.19</td></tr><tr id="md-sell-10974-6" price="10974.6" amount="211670" t="sell" style="cursor: pointer;"><td>10974.6</td><td class="amount"><i class="icn icn-BTC"></i>0.00211670</td><td class="amount-sum"><i class="icn icn-USD"></i>23.23</td></tr><tr id="md-sell-10979-6" price="10979.6" amount="10000000" t="sell" style="cursor: pointer;"><td>10979.6</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1097.96</td></tr><tr id="md-sell-10988-6" price="10988.6" amount="250555" t="sell" style="cursor: pointer;"><td>10988.6</td><td class="amount"><i class="icn icn-BTC"></i>0.00250555</td><td class="amount-sum"><i class="icn icn-USD"></i>27.54</td></tr><tr id="md-sell-10990-0" price="10990.0" amount="10000000" t="sell" style="cursor: pointer;"><td>10990.0</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1099.00</td></tr><tr id="md-sell-10994-0" price="10994.0" amount="500000" t="sell" style="cursor: pointer;"><td>10994.0</td><td class="amount"><i class="icn icn-BTC"></i>0.00500000</td><td class="amount-sum"><i class="icn icn-USD"></i>54.97</td></tr><tr id="md-sell-11000-0" price="11000.0" amount="10224793" t="sell" style="cursor: pointer;"><td>11000.0</td><td class="amount"><i class="icn icn-BTC"></i>0.10224793</td><td class="amount-sum"><i class="icn icn-USD"></i>1124.73</td></tr><tr id="md-sell-11034-3" price="11034.3" amount="953689" t="sell" style="cursor: pointer;"><td>11034.3</td><td class="amount"><i class="icn icn-BTC"></i>0.00953689</td><td class="amount-sum"><i class="icn icn-USD"></i>105.24</td></tr><tr id="md-sell-11043-1" price="11043.1" amount="16070000" t="sell" style="cursor: pointer;"><td>11043.1</td><td class="amount"><i class="icn icn-BTC"></i>0.16070000</td><td class="amount-sum"><i class="icn icn-USD"></i>1774.63</td></tr><tr id="md-sell-11050-0" price="11050.0" amount="42300000" t="sell" style="cursor: pointer;"><td>11050.0</td><td class="amount"><i class="icn icn-BTC"></i>0.42300000</td><td class="amount-sum"><i class="icn icn-USD"></i>4674.15</td></tr><tr id="md-sell-11051-0" price="11051.0" amount="200000" t="sell" style="cursor: pointer;"><td>11051.0</td><td class="amount"><i class="icn icn-BTC"></i>0.00200000</td><td class="amount-sum"><i class="icn icn-USD"></i>22.11</td></tr><tr id="md-sell-11056-6" price="11056.6" amount="10000000" t="sell" style="cursor: pointer;"><td>11056.6</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1105.66</td></tr><tr id="md-sell-11059-5" price="11059.5" amount="200000" t="sell" style="cursor: pointer;"><td>11059.5</td><td class="amount"><i class="icn icn-BTC"></i>0.00200000</td><td class="amount-sum"><i class="icn icn-USD"></i>22.12</td></tr><tr id="md-sell-11065-0" price="11065.0" amount="10000000" t="sell" style="cursor: pointer;"><td>11065.0</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1106.50</td></tr><tr id="md-sell-11075-0" price="11075.0" amount="2850000" t="sell" style="cursor: pointer;"><td>11075.0</td><td class="amount"><i class="icn icn-BTC"></i>0.02850000</td><td class="amount-sum"><i class="icn icn-USD"></i>315.64</td></tr><tr id="md-sell-11077-4" price="11077.4" amount="1879759" t="sell" style="cursor: pointer;"><td>11077.4</td><td class="amount"><i class="icn icn-BTC"></i>0.01879759</td><td class="amount-sum"><i class="icn icn-USD"></i>208.23</td></tr><tr id="md-sell-11078-1" price="11078.1" amount="200000" t="sell" style="cursor: pointer;"><td>11078.1</td><td class="amount"><i class="icn icn-BTC"></i>0.00200000</td><td class="amount-sum"><i class="icn icn-USD"></i>22.16</td></tr><tr id="md-sell-11080-0" price="11080.0" amount="9019422" t="sell" style="cursor: pointer;"><td>11080.0</td><td class="amount"><i class="icn icn-BTC"></i>0.09019422</td><td class="amount-sum"><i class="icn icn-USD"></i>999.36</td></tr><tr id="md-sell-11088-0" price="11088.0" amount="20000000" t="sell" style="cursor: pointer;"><td>11088.0</td><td class="amount"><i class="icn icn-BTC"></i>0.20000000</td><td class="amount-sum"><i class="icn icn-USD"></i>2217.60</td></tr><tr id="md-sell-11100-0" price="11100.0" amount="9240858" t="sell" style="cursor: pointer;"><td>11100.0</td><td class="amount"><i class="icn icn-BTC"></i>0.09240858</td><td class="amount-sum"><i class="icn icn-USD"></i>1025.74</td></tr><tr id="md-sell-11102-9" price="11102.9" amount="200000" t="sell" style="cursor: pointer;"><td>11102.9</td><td class="amount"><i class="icn icn-BTC"></i>0.00200000</td><td class="amount-sum"><i class="icn icn-USD"></i>22.21</td></tr><tr id="md-sell-11107-0" price="11107.0" amount="200000" t="sell" style="cursor: pointer;"><td>11107.0</td><td class="amount"><i class="icn icn-BTC"></i>0.00200000</td><td class="amount-sum"><i class="icn icn-USD"></i>22.22</td></tr><tr id="md-sell-11110-0" price="11110.0" amount="3592324" t="sell" style="cursor: pointer;"><td>11110.0</td><td class="amount"><i class="icn icn-BTC"></i>0.03592324</td><td class="amount-sum"><i class="icn icn-USD"></i>399.11</td></tr><tr id="md-sell-11121-5" price="11121.5" amount="10000000" t="sell" style="cursor: pointer;"><td>11121.5</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1112.15</td></tr><tr id="md-sell-11135-6" price="11135.6" amount="2950000" t="sell" style="cursor: pointer;"><td>11135.6</td><td class="amount"><i class="icn icn-BTC"></i>0.02950000</td><td class="amount-sum"><i class="icn icn-USD"></i>328.51</td></tr><tr id="md-sell-11139-2" price="11139.2" amount="30000000" t="sell" class="highlight-green" style="cursor: pointer;"><td>11139.2</td><td class="amount"><i class="icn icn-BTC"></i>0.30000000</td><td class="amount-sum"><i class="icn icn-USD"></i>3341.76</td></tr><tr id="md-sell-11144-3" price="11144.3" amount="856913000" t="sell" style="cursor: pointer;"><td>11144.3</td><td class="amount"><i class="icn icn-BTC"></i>8.56913000</td><td class="amount-sum"><i class="icn icn-USD"></i>95496.96</td></tr><tr id="md-sell-11150-0" price="11150.0" amount="1000000" t="sell" style="cursor: pointer;"><td>11150.0</td><td class="amount"><i class="icn icn-BTC"></i>0.01000000</td><td class="amount-sum"><i class="icn icn-USD"></i>111.50</td></tr><tr id="md-sell-11155-0" price="11155.0" amount="10000000" t="sell" style="cursor: pointer;"><td>11155.0</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1115.50</td></tr><tr id="md-sell-11184-9" price="11184.9" amount="346750" t="sell" style="cursor: pointer;"><td>11184.9</td><td class="amount"><i class="icn icn-BTC"></i>0.00346750</td><td class="amount-sum"><i class="icn icn-USD"></i>38.79</td></tr><tr id="md-sell-11199-9" price="11199.9" amount="1004926" t="sell" class="highlight-green" style="cursor: pointer;"><td>11199.9</td><td class="amount"><i class="icn icn-BTC"></i>0.01004926</td><td class="amount-sum"><i class="icn icn-USD"></i>112.56</td></tr><tr id="md-sell-11200-0" price="11200.0" amount="13473350" t="sell" class="highlight-green" style="cursor: pointer;"><td>11200.0</td><td class="amount"><i class="icn icn-BTC"></i>0.13473350</td><td class="amount-sum"><i class="icn icn-USD"></i>1509.02</td></tr><tr id="md-sell-11203-8" price="11203.8" amount="12551795" t="sell" class="highlight-green" style="cursor: pointer;"><td>11203.8</td><td class="amount"><i class="icn icn-BTC"></i>0.12551795</td><td class="amount-sum"><i class="icn icn-USD"></i>1406.28</td></tr></tbody>
</table>
<div id="md-sell-loading" style="display: none;"><div id="floatingCirclesG" class="loading_animation">		<div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02">	</div><div class="f_circleG" id="frotateG_03">	</div><div class="f_circleG" id="frotateG_04">	</div><div class="f_circleG" id="frotateG_05">	</div><div class="f_circleG" id="frotateG_06">	</div><div class="f_circleG" id="frotateG_07">	</div><div class="f_circleG" id="frotateG_08">	</div></div></div>
</div>
<div id="md-sell-help-text"></div>
</div>
</div>
<div class="col-xs-6">
<div style="width: 95%" class="pull-right">
<header>
<span class="title">Buy Orders</span>
<span class="text-muted pull-right">
<i class="icn-time"></i> Total <span class="symbol2">USD</span> available: <span id="md-buy-total">8918685.11</span>
</span>
</header>
<div style="height: 408px;overflow-y: hidden;width: 106%;">
<table id="md-buy" class="table table-bordered md-table">
<thead>
<tr>
<th>Price per <span class="symbol1">BTC</span></th>
<th><span class="symbol1">BTC</span> Amount</th>
<th>Total: (<span class="symbol2">USD</span>)</th>
</tr>
</thead>
<tbody id="md-buy-tbody"><tr id="md-buy-10864-9" price="10864.9" amount="30068000" t="buy" style="cursor: pointer;"><td>10864.9</td><td class="amount"><i class="icn icn-BTC"></i>0.30068000</td><td class="amount-sum"><i class="icn icn-USD"></i>3266.86</td></tr><tr id="md-buy-10855-4" price="10855.4" amount="30000000" t="buy" class="highlight-green" style="cursor: pointer;"><td>10855.4</td><td class="amount"><i class="icn icn-BTC"></i>0.30000000</td><td class="amount-sum"><i class="icn icn-USD"></i>3256.62</td></tr><tr id="md-buy-10853-1" price="10853.1" amount="29000000" t="buy" style="cursor: pointer;"><td>10853.1</td><td class="amount"><i class="icn icn-BTC"></i>0.29000000</td><td class="amount-sum"><i class="icn icn-USD"></i>3147.40</td></tr><tr id="md-buy-10852-8" price="10852.8" amount="333700000" t="buy" style="cursor: pointer;"><td>10852.8</td><td class="amount"><i class="icn icn-BTC"></i>3.33700000</td><td class="amount-sum"><i class="icn icn-USD"></i>36215.80</td></tr><tr id="md-buy-10850-9" price="10850.9" amount="3621451" t="buy" style="cursor: pointer;"><td>10850.9</td><td class="amount"><i class="icn icn-BTC"></i>0.03621451</td><td class="amount-sum"><i class="icn icn-USD"></i>392.97</td></tr><tr id="md-buy-10840-3" price="10840.3" amount="4000000" t="buy" style="cursor: pointer;"><td>10840.3</td><td class="amount"><i class="icn icn-BTC"></i>0.04000000</td><td class="amount-sum"><i class="icn icn-USD"></i>433.62</td></tr><tr id="md-buy-10825-8" price="10825.8" amount="30000000" t="buy" style="cursor: pointer;"><td>10825.8</td><td class="amount"><i class="icn icn-BTC"></i>0.30000000</td><td class="amount-sum"><i class="icn icn-USD"></i>3247.74</td></tr><tr id="md-buy-10825-7" price="10825.7" amount="1903249" t="buy" style="cursor: pointer;"><td>10825.7</td><td class="amount"><i class="icn icn-BTC"></i>0.01903249</td><td class="amount-sum"><i class="icn icn-USD"></i>206.05</td></tr><tr id="md-buy-10825-4" price="10825.4" amount="25037874" t="buy" style="cursor: pointer;"><td>10825.4</td><td class="amount"><i class="icn icn-BTC"></i>0.25037874</td><td class="amount-sum"><i class="icn icn-USD"></i>2710.46</td></tr><tr id="md-buy-10825-0" price="10825.0" amount="2794734" t="buy" style="cursor: pointer;"><td>10825.0</td><td class="amount"><i class="icn icn-BTC"></i>0.02794734</td><td class="amount-sum"><i class="icn icn-USD"></i>302.53</td></tr><tr id="md-buy-10824-7" price="10824.7" amount="9813220" t="buy" style="cursor: pointer;"><td>10824.7</td><td class="amount"><i class="icn icn-BTC"></i>0.09813220</td><td class="amount-sum"><i class="icn icn-USD"></i>1062.26</td></tr><tr id="md-buy-10818-8" price="10818.8" amount="26222779" t="buy" style="cursor: pointer;"><td>10818.8</td><td class="amount"><i class="icn icn-BTC"></i>0.26222779</td><td class="amount-sum"><i class="icn icn-USD"></i>2837.00</td></tr><tr id="md-buy-10818-6" price="10818.6" amount="241683" t="buy" style="cursor: pointer;"><td>10818.6</td><td class="amount"><i class="icn icn-BTC"></i>0.00241683</td><td class="amount-sum"><i class="icn icn-USD"></i>26.15</td></tr><tr id="md-buy-10810-4" price="10810.4" amount="22221380" t="buy" style="cursor: pointer;"><td>10810.4</td><td class="amount"><i class="icn icn-BTC"></i>0.22221380</td><td class="amount-sum"><i class="icn icn-USD"></i>2402.23</td></tr><tr id="md-buy-10810-1" price="10810.1" amount="50882333" t="buy" style="cursor: pointer;"><td>10810.1</td><td class="amount"><i class="icn icn-BTC"></i>0.50882333</td><td class="amount-sum"><i class="icn icn-USD"></i>5500.44</td></tr><tr id="md-buy-10810-0" price="10810.0" amount="100000000" t="buy" style="cursor: pointer;"><td>10810.0</td><td class="amount"><i class="icn icn-BTC"></i>1.00000000</td><td class="amount-sum"><i class="icn icn-USD"></i>10810.00</td></tr><tr id="md-buy-10805-0" price="10805.0" amount="100000000" t="buy" style="cursor: pointer;"><td>10805.0</td><td class="amount"><i class="icn icn-BTC"></i>1.00000000</td><td class="amount-sum"><i class="icn icn-USD"></i>10805.00</td></tr><tr id="md-buy-10800-1" price="10800.1" amount="46073144" t="buy" style="cursor: pointer;"><td>10800.1</td><td class="amount"><i class="icn icn-BTC"></i>0.46073144</td><td class="amount-sum"><i class="icn icn-USD"></i>4975.95</td></tr><tr id="md-buy-10800-0" price="10800.0" amount="101000000" t="buy" style="cursor: pointer;"><td>10800.0</td><td class="amount"><i class="icn icn-BTC"></i>1.01000000</td><td class="amount-sum"><i class="icn icn-USD"></i>10908.00</td></tr><tr id="md-buy-10776-3" price="10776.3" amount="405919294" t="buy" style="cursor: pointer;"><td>10776.3</td><td class="amount"><i class="icn icn-BTC"></i>4.05919294</td><td class="amount-sum"><i class="icn icn-USD"></i>43743.09</td></tr><tr id="md-buy-10775-0" price="10775.0" amount="129814757" t="buy" style="cursor: pointer;"><td>10775.0</td><td class="amount"><i class="icn icn-BTC"></i>1.29814757</td><td class="amount-sum"><i class="icn icn-USD"></i>13987.55</td></tr><tr id="md-buy-10771-9" price="10771.9" amount="3000000000" t="buy" style="cursor: pointer;"><td>10771.9</td><td class="amount"><i class="icn icn-BTC"></i>30.00000000</td><td class="amount-sum"><i class="icn icn-USD"></i>323157.00</td></tr><tr id="md-buy-10768-5" price="10768.5" amount="1105903946" t="buy" style="cursor: pointer;"><td>10768.5</td><td class="amount"><i class="icn icn-BTC"></i>11.05903946</td><td class="amount-sum"><i class="icn icn-USD"></i>119089.27</td></tr><tr id="md-buy-10765-0" price="10765.0" amount="2400000" t="buy" style="cursor: pointer;"><td>10765.0</td><td class="amount"><i class="icn icn-BTC"></i>0.02400000</td><td class="amount-sum"><i class="icn icn-USD"></i>258.36</td></tr><tr id="md-buy-10750-0" price="10750.0" amount="5238884" t="buy" style="cursor: pointer;"><td>10750.0</td><td class="amount"><i class="icn icn-BTC"></i>0.05238884</td><td class="amount-sum"><i class="icn icn-USD"></i>563.19</td></tr><tr id="md-buy-10745-6" price="10745.6" amount="10000000" t="buy" style="cursor: pointer;"><td>10745.6</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1074.56</td></tr><tr id="md-buy-10708-5" price="10708.5" amount="10000000" t="buy" style="cursor: pointer;"><td>10708.5</td><td class="amount"><i class="icn icn-BTC"></i>0.10000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1070.85</td></tr><tr id="md-buy-10706-9" price="10706.9" amount="16000000" t="buy" style="cursor: pointer;"><td>10706.9</td><td class="amount"><i class="icn icn-BTC"></i>0.16000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1713.11</td></tr><tr id="md-buy-10700-0" price="10700.0" amount="72382150" t="buy" style="cursor: pointer;"><td>10700.0</td><td class="amount"><i class="icn icn-BTC"></i>0.72382150</td><td class="amount-sum"><i class="icn icn-USD"></i>7744.90</td></tr><tr id="md-buy-10680-8" price="10680.8" amount="323673" t="buy" style="cursor: pointer;"><td>10680.8</td><td class="amount"><i class="icn icn-BTC"></i>0.00323673</td><td class="amount-sum"><i class="icn icn-USD"></i>34.58</td></tr><tr id="md-buy-10657-0" price="10657.0" amount="1640740000" t="buy" style="cursor: pointer;"><td>10657.0</td><td class="amount"><i class="icn icn-BTC"></i>16.40740000</td><td class="amount-sum"><i class="icn icn-USD"></i>174853.67</td></tr><tr id="md-buy-10650-0" price="10650.0" amount="3630000" t="buy" style="cursor: pointer;"><td>10650.0</td><td class="amount"><i class="icn icn-BTC"></i>0.03630000</td><td class="amount-sum"><i class="icn icn-USD"></i>386.60</td></tr><tr id="md-buy-10643-9" price="10643.9" amount="1300000" t="buy" style="cursor: pointer;"><td>10643.9</td><td class="amount"><i class="icn icn-BTC"></i>0.01300000</td><td class="amount-sum"><i class="icn icn-USD"></i>138.38</td></tr><tr id="md-buy-10639-0" price="10639.0" amount="740000" t="buy" style="cursor: pointer;"><td>10639.0</td><td class="amount"><i class="icn icn-BTC"></i>0.00740000</td><td class="amount-sum"><i class="icn icn-USD"></i>78.73</td></tr><tr id="md-buy-10630-0" price="10630.0" amount="66506662" t="buy" style="cursor: pointer;"><td>10630.0</td><td class="amount"><i class="icn icn-BTC"></i>0.66506662</td><td class="amount-sum"><i class="icn icn-USD"></i>7069.66</td></tr><tr id="md-buy-10620-0" price="10620.0" amount="1500000" t="buy" style="cursor: pointer;"><td>10620.0</td><td class="amount"><i class="icn icn-BTC"></i>0.01500000</td><td class="amount-sum"><i class="icn icn-USD"></i>159.30</td></tr><tr id="md-buy-10605-1" price="10605.1" amount="13000000" t="buy" style="cursor: pointer;"><td>10605.1</td><td class="amount"><i class="icn icn-BTC"></i>0.13000000</td><td class="amount-sum"><i class="icn icn-USD"></i>1378.67</td></tr><tr id="md-buy-10604-1" price="10604.1" amount="10500000" t="buy" style="cursor: pointer;"><td>10604.1</td><td class="amount"><i class="icn icn-BTC"></i>0.10500000</td><td class="amount-sum"><i class="icn icn-USD"></i>1113.44</td></tr><tr id="md-buy-10603-4" price="10603.4" amount="1083371" t="buy" style="cursor: pointer;"><td>10603.4</td><td class="amount"><i class="icn icn-BTC"></i>0.01083371</td><td class="amount-sum"><i class="icn icn-USD"></i>114.88</td></tr><tr id="md-buy-10602-0" price="10602.0" amount="64816828" t="buy" style="cursor: pointer;"><td>10602.0</td><td class="amount"><i class="icn icn-BTC"></i>0.64816828</td><td class="amount-sum"><i class="icn icn-USD"></i>6871.89</td></tr><tr id="md-buy-10601-0" price="10601.0" amount="700000" t="buy" style="cursor: pointer;"><td>10601.0</td><td class="amount"><i class="icn icn-BTC"></i>0.00700000</td><td class="amount-sum"><i class="icn icn-USD"></i>74.21</td></tr><tr id="md-buy-10600-0" price="10600.0" amount="48208357" t="buy" style="cursor: pointer;"><td>10600.0</td><td class="amount"><i class="icn icn-BTC"></i>0.48208357</td><td class="amount-sum"><i class="icn icn-USD"></i>5110.09</td></tr><tr id="md-buy-10596-9" price="10596.9" amount="600000" t="buy" style="cursor: pointer;"><td>10596.9</td><td class="amount"><i class="icn icn-BTC"></i>0.00600000</td><td class="amount-sum"><i class="icn icn-USD"></i>63.59</td></tr><tr id="md-buy-10596-0" price="10596.0" amount="1500000" t="buy" style="cursor: pointer;"><td>10596.0</td><td class="amount"><i class="icn icn-BTC"></i>0.01500000</td><td class="amount-sum"><i class="icn icn-USD"></i>158.94</td></tr><tr id="md-buy-10572-0" price="10572.0" amount="1000000" t="buy" style="cursor: pointer;"><td>10572.0</td><td class="amount"><i class="icn icn-BTC"></i>0.01000000</td><td class="amount-sum"><i class="icn icn-USD"></i>105.72</td></tr><tr id="md-buy-10570-3" price="10570.3" amount="9500000" t="buy" style="cursor: pointer;"><td>10570.3</td><td class="amount"><i class="icn icn-BTC"></i>0.09500000</td><td class="amount-sum"><i class="icn icn-USD"></i>1004.18</td></tr><tr id="md-buy-10570-0" price="10570.0" amount="197622233" t="buy" style="cursor: pointer;"><td>10570.0</td><td class="amount"><i class="icn icn-BTC"></i>1.97622233</td><td class="amount-sum"><i class="icn icn-USD"></i>20888.68</td></tr><tr id="md-buy-10568-8" price="10568.8" amount="293214" t="buy" style="cursor: pointer;"><td>10568.8</td><td class="amount"><i class="icn icn-BTC"></i>0.00293214</td><td class="amount-sum"><i class="icn icn-USD"></i>30.99</td></tr><tr id="md-buy-10561-6" price="10561.6" amount="4000000" t="buy" style="cursor: pointer;"><td>10561.6</td><td class="amount"><i class="icn icn-BTC"></i>0.04000000</td><td class="amount-sum"><i class="icn icn-USD"></i>422.47</td></tr><tr id="md-buy-10561-0" price="10561.0" amount="4258215" t="buy" class="highlight-green" style="cursor: pointer;"><td>10561.0</td><td class="amount"><i class="icn icn-BTC"></i>0.04258215</td><td class="amount-sum"><i class="icn icn-USD"></i>449.72</td></tr></tbody>
</table>
<div id="md-buy-loading" style="display: none;"><div id="floatingCirclesG" class="loading_animation">		<div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02">	</div><div class="f_circleG" id="frotateG_03">	</div><div class="f_circleG" id="frotateG_04">	</div><div class="f_circleG" id="frotateG_05">	</div><div class="f_circleG" id="frotateG_06">	</div><div class="f_circleG" id="frotateG_07">	</div><div class="f_circleG" id="frotateG_08">	</div></div></div>
</div>
<div id="md-buy-help-text"></div>
</div>
</div>
</div>
</div>

<div class="active-orders">
<div class="row">
<div class="col-xs-12">
<h3>Trade History</h3>
<div style="overflow-y: hidden; height: 418px;">
<table id="history" class="table table-bordered">
<thead>
<tr>
<th>Date</th>
<th>Type</th>
<th>Amount <span class="symbol1">BTC</span></th>
<th>Price</th>
<th>Total</th>
</tr>
</thead>
<tbody id="history-tbody"><tr price="10895.9"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.01787094</td><td class="price">10895.9</td><td><i class="icn icn-USD"></i>194.72</td></tr><tr price="10880.5"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.03766152</td><td class="price">10880.5</td><td><i class="icn icn-USD"></i>409.78</td></tr><tr price="10880.5"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.02896833</td><td class="price">10880.5</td><td><i class="icn icn-USD"></i>315.19</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.02656416</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>288.92</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05553277</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>603.98</td></tr><tr price="10876.1"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.05204714</td><td class="price">10876.1</td><td><i class="icn icn-USD"></i>566.07</td></tr><tr price="10876"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.00348603</td><td class="price">10876</td><td><i class="icn icn-USD"></i>37.92</td></tr><tr price="10876"><td>2018-02-18 07:15:11</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.10051397</td><td class="price">10876</td><td><i class="icn icn-USD"></i>1093.19</td></tr><tr price="10893.8"><td>2018-02-18 07:14:52</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.27000000</td><td class="price">10893.8</td><td><i class="icn icn-USD"></i>2941.33</td></tr><tr price="10893.2"><td>2018-02-18 07:14:49</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.27959644</td><td class="price">10893.2</td><td><i class="icn icn-USD"></i>3045.70</td></tr><tr price="10892.9"><td>2018-02-18 07:14:49</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.16000000</td><td class="price">10892.9</td><td><i class="icn icn-USD"></i>1742.87</td></tr><tr price="10892.7"><td>2018-02-18 07:14:49</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.22707000</td><td class="price">10892.7</td><td><i class="icn icn-USD"></i>2473.41</td></tr><tr data="#" price="10856.6"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05533961</td><td class="price">10856.6</td><td><i class="icn icn-USD"></i>600.81</td></tr><tr data="#" price="10856.6"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05533961</td><td class="price">10856.6</td><td><i class="icn icn-USD"></i>600.81</td></tr><tr data="#" price="10856.6"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05179891</td><td class="price">10856.6</td><td><i class="icn icn-USD"></i>562.37</td></tr><tr data="#" price="10863.3"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.00357000</td><td class="price">10863.3</td><td><i class="icn icn-USD"></i>38.79</td></tr><tr data="#" price="10863.3"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.03643000</td><td class="price">10863.3</td><td><i class="icn icn-USD"></i>395.76</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.01639404</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>178.10</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.00251392</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>27.31</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05533627</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05533627</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05533627</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05533627</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05533627</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10863.4"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.02080473</td><td class="price">10863.4</td><td><i class="icn icn-USD"></i>226.02</td></tr><tr data="#" price="10892.8"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.03443924</td><td class="price">10892.8</td><td><i class="icn icn-USD"></i>375.14</td></tr><tr data="#" price="10892.8"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05518692</td><td class="price">10892.8</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10892.8"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05518692</td><td class="price">10892.8</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10892.8"><td>2018-02-18 07:14:44</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.05518692</td><td class="price">10892.8</td><td><i class="icn icn-USD"></i>601.15</td></tr><tr data="#" price="10892.5"><td>2018-02-18 07:14:34</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.02000000</td><td class="price">10892.5</td><td><i class="icn icn-USD"></i>217.85</td></tr><tr data="#" price="10834.9"><td>2018-02-18 07:14:10</td><td>SELL</td><td><i class="icn icn-BTC"></i>0.00272894</td><td class="price">10834.9</td><td><i class="icn icn-USD"></i>29.57</td></tr><tr data="#" price="10867.5"><td>2018-02-18 07:14:10</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.00041683</td><td class="price">10867.5</td><td><i class="icn icn-USD"></i>4.53</td></tr><tr data="#" price="10846.5"><td>2018-02-18 07:14:10</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.00200000</td><td class="price">10846.5</td><td><i class="icn icn-USD"></i>21.70</td></tr><tr data="#" price="10851.7"><td>2018-02-18 07:14:02</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.09957524</td><td class="price">10851.7</td><td><i class="icn icn-USD"></i>1080.57</td></tr><tr data="#" price="10850.0"><td>2018-02-18 07:14:02</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.01639404</td><td class="price">10850.0</td><td><i class="icn icn-USD"></i>177.88</td></tr><tr data="#" price="10850.0"><td>2018-02-18 07:14:02</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.08796763</td><td class="price">10850.0</td><td><i class="icn icn-USD"></i>954.45</td></tr><tr data="#" price="10850.0"><td>2018-02-18 07:14:02</td><td>BUY</td><td><i class="icn icn-BTC"></i>0.18000000</td><td class="price">10850.0</td><td><i class="icn icn-USD"></i>1953.00</td></tr></tbody>
</table>
<div id="history-loading" style="display: none;"><div id="floatingCirclesG" class="loading_animation">		<div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02">	</div><div class="f_circleG" id="frotateG_03">	</div><div class="f_circleG" id="frotateG_04">	</div><div class="f_circleG" id="frotateG_05">	</div><div class="f_circleG" id="frotateG_06">	</div><div class="f_circleG" id="frotateG_07">	</div><div class="f_circleG" id="frotateG_08">	</div></div></div>
</div>
<br>
</div>
</div>
</div>
</section>
</div>

@endsection