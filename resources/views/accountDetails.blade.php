@extends("layouts.mainLayout")
<div id="wallet">
    <div id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                    Your latest transactions ...
                </div>
                <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12">
                    <div class="loaderUI" style="display: none;"></div>
                    <section id="dashboard-content" style="">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="content-title">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h1><i class="bt bt-{{strtolower($accountInfo->currency_name)}} pull-left"></i>{{$accountInfo->currency_name}}
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-header">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="price-eur text-centered">
                                                <h3>Your Balance</h3> <b>
                                                {{ $accountInfo->balance }} {{ $accountInfo->currency_name}}</b>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <h3>Operations</h3>
                                            <div class="controls">
                                                <div class="row text-centered"><a class="send" href="/en/bitcoin/send"><span class="icon-container"><span class="icon icon-1"></span></span> <span>Send</span></a> <a class="receive" href="/en/deposit/btc"><span class="icon-container"><span class="icon icon-2"></span></span> <span>Receive</span></a> <a href="/en/exchange/currency.html" class="buy"><span class="icon-container"><span class="icon icon-3"></span></span> <span>Buy/Sell</span></a></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12" style="">
                                            <h3>Wallet Address</h3>
                                            <div class="row">
                                                <!---->
                                                <div class="col-lg-3 col-md-3 col-xs-12">
                                                    <div class="btc-wallet-address text-center">
                                                        <div class="deposit-bitcoin-qr-code"><img src="https://chart.googleapis.com/chart?chs=160x160&amp;chld=M|0&amp;cht=qr&amp;chl={{$accountInfo->address}}" alt="{{ $accountInfo->address}}"></div>
                                                    </div>
                                                </div>
                                                <!---->
                                                <div class="col-lg-8 col-md-9 col-xs-12">
                                                    <div class="btc-wallet-address">
                                                        <div class="code">
                                                            <span style="text-align: center; color: rgb(163, 163, 163); font-weight: bold;word-wrap:break-word">
                                                                {{ $accountInfo->address}}
                                                            </span>
                                                            <br/>
                                                            <br/>

                                                            <button class="btn btn-default">
                                                                Copy address <i class="fa fa-copy"></i>
                                                            </button> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>