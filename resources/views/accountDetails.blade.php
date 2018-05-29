@extends("layouts.mainLayout")
<div id="wallet">
    <div id="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="loaderUI" style="display: none;"></div>
                    <section id="dashboard-content" style="">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="content-title">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h1><a href="/en/account.html"><i class="fa fa-angle-left"></i></a> BTC
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-header">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="price-eur text-centered">
                                                <h3>Your Balance</h3> <b>
                                                {{ $accountInfo->balance }} {{ $accountInfo->currency_name}}
                                                <span class="reserved-balance" style="display: none;">
                                                    Reserved amount
                                                    0.00000000 BTC
                                                </span> <i class="reserved-balance" style="display: none;">
                                                ≈
                                                <span data-convert-from="BTC" class="convertAmount">$0.00 </span></i></b></div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <h3>Operations</h3>
                                                <div class="controls">
                                                    <div class="row text-centered"><a class="send" href="/en/bitcoin/send"><span class="icon-container"><span class="icon icon-1"></span></span> <span>Send</span></a> <a class="receive" href="/en/deposit/btc"><span class="icon-container"><span class="icon icon-2"></span></span> <span>Receive</span></a> <a href="/en/exchange/currency.html" class="buy"><span class="icon-container"><span class="icon icon-3"></span></span> <span>Buy/Sell</span></a> <a style="display: none;" href="/en/account/claim-iban/7800557/btc.html"><span class="icon-container"><span class="icon icon-iban"></span></span> <span>Claim IBAN</span></a></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12" style="">
                                                <h3>Wallet Address</h3>
                                                <div class="row">
                                                    <!---->
                                                    <div class="col-lg-2 col-md-3 col-xs-12">
                                                        <div class="btc-wallet-address text-center">
                                                            <div class="deposit-bitcoin-qr-code"><img src="https://chart.googleapis.com/chart?chs=160x160&amp;chld=M|0&amp;cht=qr&amp;chl={{$accountInfo->address}}" alt="{{ $accountInfo->address}}"></div>
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <div class="col-lg-10 col-md-9 col-xs-12">
                                                        <div class="btc-wallet-address">
                                                            <div class="code"><span style="text-align: center; text-transform: uppercase; color: rgb(163, 163, 163); font-weight: 300; display: none;">Address: </span> <span class="inlineBlock">19TQx62JaDqYVjVm73JpJEZCouRcZWwxkZ</span> <br style="display: none;"> <span style="text-align: center; text-transform: uppercase; color: rgb(163, 163, 163); font-weight: 300; display: none;">Message: </span> <span style="display: none;"></span></div>
                                                            <div class="col-xs-12">
                                                                <div class="ui-buttons-line align-btn-left mt30">
                                                                    <div class="row copybox-buttons"><button class="ui-button" style="background: transparent none repeat scroll 0% 0%;"><span>Copy address</span> <span class="ui-button-icon icon-1"></span> <span style="display: none;"></span> <span class="ui-button-icon icon-6" style="display: none;"></span></button> <button class="ui-button" style="background: transparent none repeat scroll 0% 0%; display: none;"><span>Copy message</span> <span class="ui-button-icon icon-1"></span> <span style="display: none;"></span> <span class="ui-button-icon icon-6" style="display: none;"></span></button> <button class="ui-button" style=""><span></span> <span>Get a new address</span> <span class="ui-button-icon icon-5"></span></button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12" style="display: none;">
                                                <h3>Your IBAN Address</h3>
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 deposit-bitcoin-section">
                                                        <div class="iban-box"><b></b> ( )
                                                        </div>
                                                        <div class="ui-buttons-line align-btn-center mt30"><button class="ui-button" style="background: transparent none repeat scroll 0% 0%;"><span></span> <span class="ui-button-icon icon-1"></span> <span style="display: none;"></span> <span class="ui-button-icon icon-6" style="display: none;"></span></button> <button class="ui-button"><span></span> <span></span> <span class="ui-button-icon icon-3" style="transform: rotateZ(45deg);"></span></button></div>
                                                    </div>
                                                    <div class="col-lg-6 col-lg-offset-3 exchange-info mt30">
                                                        <div class="exchange-info-container iban-form">
                                                            <div class="exchange-info-line">
                                                                <div class="info-line-title"></div>
                                                                <div class="info-line-value"><b>Lyte Yagami</b></div>
                                                            </div>
                                                            <div class="exchange-info-line">
                                                                <div class="info-line-title"></div>
                                                                <div class="info-line-value"><b></b></div>
                                                            </div>
                                                            <div class="exchange-info-line">
                                                                <div class="info-line-title"></div>
                                                                <div class="info-line-value"><b></b></div>
                                                            </div>
                                                            <div class="exchange-info-line">
                                                                <div class="info-line-title"></div>
                                                                <div class="info-line-value"><b></b></div>
                                                            </div>
                                                            <div class="exchange-info-line">
                                                                <div class="info-line-title"></div>
                                                                <div class="info-line-value"><b></b></div>
                                                            </div>
                                                            <div class="ui-buttons-line align-btn-center mt30 mb30"><button class="ui-button"><span></span> <span class="ui-button-icon icon-4"></span></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <h3>Your latest transactions</h3>
                                            </div>
                                            <div class="col-xs-12 mt30 mt50"></div>
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
