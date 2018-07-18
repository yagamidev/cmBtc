@extends("layouts/mainLayout")


@section("script")

@parent
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js" /></script>
<script src="{{ asset('js/index.js')}}"></script>
<script src="{{ asset('js/utils.js')}}"></script>
<script src="{{ asset('js/common.js')}}"></script>

@endsection

@section("stylesheet")
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/header.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

@endsection
<!-- <script>
  'use strict';

  const SHARE = JSON.parse('{"tradeEnabled":true,"recaptchaEnabled":true,"my_portSSL":40443,"TRADE_MAIN_COIN":"Marycoin","TRADE_MAIN_COIN_TICKER":"MC","TRADE_DEFAULT_PAIR":"Litecoin"}');

  var grecaptcha;
  if (!SHARE.recaptchaEnabled) grecaptcha = null;

  const PORT_SSL = SHARE.my_portSSL;
  const MAIN_COIN = SHARE.TRADE_MAIN_COIN;
  const DEFAULT_PAIR = SHARE.TRADE_DEFAULT_PAIR;
</script> -->
<!-- <script src='/js/utils.js'></script> -->

@section("content")
  <div id="loader" style="display:none;"></div>
  <input id='id_lang' type='hidden' value='en'>






  <div class="container pt-2 mainContainer">


    <input id='id_token' type='hidden'>
    <div class='row'>
      <div class="col-md-2 p-0">
        <div class="card">
          <div class="card-header">
            Market
          </div>
          <div class="card-body p-0">
            <div id='market-flex' class="d-flex d-flex-market align-items-start bd-highlight mb-0">
              <div id='market-container' class='container p-0'>
                <table class="table table-sm  table-hover table-orders">
                  <thead>
                    <tr>
                      <th scope="col">Coin</th>
                      <th scope="col">Price</th>
                      <th scope="col">Vol</th>
                      <th scope="col">Ch (%)</th>
                    </tr>
                  </thead>
                  <tbody id='table-market'>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 p-1">
        <div class='container'>
          <div class='row'>
            <div class='col-md-12'>
              <nav aria-label="breadcrumb">
                <ol id='id_MC_info' class="breadcrumb"></ol>
              </nav>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-12'>
              <div id='chart_legend'></div>
              <div id="chart_div" style="height:400"></div>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-12'>
              <h5><div id='coin_legend' class='mt-4'></div></h5>
              <div id='coin_info'></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 p-0">
        <div class="card">
          <div id='id_chat_header' class="card-header">
            Chat
          </div>
          <div class="card-body p-0">
            <button id='id_btn_chat_ru' type="button" class="btn btn-outline-primary btn-sm">Fr</button>
            <button id='id_btn_chat_en' type="button" class="btn btn-outline-primary btn-sm">En</button>
            <div id='chat-flex' class="d-flex d-flex-chat align-items-start bd-highlight mb-0" style="height: 350px">
              <div id='chat-container_loading' class='container'>
                <div class='row'>
                  <div class='col-md-12'>Loading...</div>
                </div>
              </div>
              <div id='chat-container_ru' class='container font_14'>
              </div>
              <div id='chat-container_en' class='container font_14'>
              </div>
            </div>
            <div class="input-group">
              <input id='chat_message' type="text" class="form-control" maxlength="150">
              <span class="input-group-btn">
                  <button id='button_chat' class="btn btn-secondary" type="button">Submit</button>
                </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class='row'>
      <div class="col-md-3 p-1">
        <div class="card">
          <div id='header_buy' class="card-header">

          </div>
          <div class="card-body p-1">
            <div class="alert alert-secondary p-1" role="alert">
              <div class='container'>
                <div class='row'>
                  <div class='col-md-6'>
                    <table>
                      <thead>
                        <tr>
                          <th>Your balance:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span id='id_buy_balance'></span>
                            <div id="id_balance_spiner1">
                              <div id="circularG_1" class="circularG"></div>
                              <div id="circularG_2" class="circularG"></div>
                              <div id="circularG_3" class="circularG"></div>
                              <div id="circularG_4" class="circularG"></div>
                              <div id="circularG_5" class="circularG"></div>
                              <div id="circularG_6" class="circularG"></div>
                              <div id="circularG_7" class="circularG"></div>
                              <div id="circularG_8" class="circularG"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td id='id_buy_coin'></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class='col-md-6'>
                    <table>
                      <thead>
                        <tr>
                          <th>Highest Ask:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td id='id_max_ask'></td>
                        </tr>
                        <tr>
                          <td id='id_max_ask_coin'></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <form id="form_buy" class="p-3">
              <div class="form-group row">
                <label for="inputBuyAmount" class="col-md-4 col-form-label form-control-sm">Amount:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputBuyAmount" placeholder="0.0" aria-describedby="id_amount_buy" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 0 ">
                  <span class="currency" id="id_amount_buy"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputBuyPrice" class="col-md-4 col-form-label form-control-sm">Price:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputBuyPrice" placeholder="0.0" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 0 ">
                  <span class="currency" id="id_price_buy"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputBuyComission" class="col-md-4 col-form-label form-control-sm">Comission:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputBuyComission" readonly placeholder="0.0">
                  <span class="currency" id="id_comission_buy"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputBuyTotal" class="col-md-4 col-form-label form-control-sm">Total:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputBuyTotal" placeholder="0.0" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 0 ">
                  <span class="currency" id="id_total_buy"></span>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Buy</button>
            </form>

          </div>
        </div>
      </div>
      <div class="col-md-3 p-1">
        <div class="card">
          <div id='header_sell' class="card-header">

          </div>
          <div class="card-body p-1">
            <div class="alert alert-secondary p-1" role="alert">
              <div class='container'>
                <div class='row'>
                  <div class='col-md-6'>
                    <table>
                      <thead>
                        <tr>
                          <th>Your balance:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span id='id_sell_balance'></span>
                            <div id="id_balance_spiner2">
                              <div id="circularG_1" class="circularG"></div>
                              <div id="circularG_2" class="circularG"></div>
                              <div id="circularG_3" class="circularG"></div>
                              <div id="circularG_4" class="circularG"></div>
                              <div id="circularG_5" class="circularG"></div>
                              <div id="circularG_6" class="circularG"></div>
                              <div id="circularG_7" class="circularG"></div>
                              <div id="circularG_8" class="circularG"></div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td id='id_sell_coin'></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class='col-md-6'>
                    <table>
                      <thead>
                        <tr>
                          <th>Highest Bid:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td id='id_max_bid'></td>
                        </tr>
                        <tr>
                          <td id='id_max_bid_coin'></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <form id="form_sell" class="p-3">
              <div class="form-group row">
                <label for="inputSellAmount" class="col-md-4 col-form-label form-control-sm">Amount:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputSellAmount" placeholder="0.0" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 0 ">
                  <span class="currency" id="id_amount_sell"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputSellPrice" class="col-md-4 col-form-label form-control-sm">Price:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputSellPrice" placeholder="0.0" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 0 ">
                  <span class="currency" id="id_price_sell"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputSEllComission" class="col-md-4 col-form-label form-control-sm">Comission:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputSellComission" readonly placeholder="0.0">
                  <span class="currency" id="id_comission_sell"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputSellTotal" class="col-md-4 col-form-label form-control-sm">Total:</label>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="inputSellTotal" placeholder="0.0" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46 || event.charCode == 0 ">
                  <span class="currency" id="id_total_sell"></span>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sell</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-1">
        <div class="card">
          <!-- <div class="card-header">
              Your active orders:
            </div>-->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" id="active-orders-tab" data-toggle="tab" href="#active_orders" role="tab" aria-controls="active_orders" aria-selected="true">Your active orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="history-orders-tab" data-toggle="tab" href="#history-orders" role="tab" aria-controls="history-orders" aria-selected="false">Your history</a>
            </li>
          </ul>

          <div class="card-body div-orders p-2">
            <div class="tab-content" id="user-orders-tab-content">
              <div class="tab-pane fade show active" id="active_orders" role="tabpanel" aria-labelledby="active-orders-tab">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Time</th>
                      <th>Type</th>
                      <th>Amount</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id='id_user_orders'>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="history-orders" role="tabpanel" aria-labelledby="history-orders-tab">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Time</th>
                      <th>Type</th>
                      <th>Amount</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id='id_user_orders_history'>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class="col-md-3 p-1">
        <div class="card">
          <div class="card-header p-0">
            <table class='table table-orders m-0'>
              <tr>
                <td><strong>Sell orders</strong></td>
                <td class='form_title_volume' align="right">Volume:<span id='id_sell_volume'></span></td>
              </tr>
            </table>

          </div>
          <div class="card-body div-orders p-0">
            <table class="table table-striped table-sm table-orders table-hover">
              <thead>
                <tr id='id_sell_orders_header'>
                </tr>
              </thead>
              <tbody id='id_sell_orders_body'>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-3 p-1">
        <div class="card">
          <div class="card-header p-0">
            <table class='table table-orders m-0'>
              <tr>
                <td><strong>Buy orders</strong></td>
                <td class='form_title_volume' align="right">Volume:<span id='id_buy_volume'></span></td>
              </tr>
            </table>

          </div>
          <div class="card-body div-orders p-0">
            <table class="table table-striped table-sm table-orders table-hover">
              <thead>
                <tr id='id_buy_orders_header'>
                </tr>
              </thead>
              <tbody id='id_buy_orders_body'>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-1">
        <div class="card">
          <!-- <div class="card-header">
                Trade history:
              </div>-->
          <div class="card-header p-0">
            <table class='table table-orders m-0'>
              <tr>
                <td><strong>Trade history:</strong></td>
              </tr>
            </table>
          </div>


          <div class="card-body div-orders p-0">
            <table class="table table-striped table-sm table-orders">
              <thead>
                <tr>
                  <th>Time</th>
                  <th>Type</th>
                  <th>Volume</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id='id_trade_history'>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /container -->



  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="max-width:50%;">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button id='id_modal_cancel' type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button id='id_modal_ok' type="button" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


  <!-- <script src='https://www.google.com/recaptcha/api.js' async defer></script>

  <script src='/js/common.js'></script>

  <script src='/js/index.js'></script> -->
@endsection
@section("footer")

@endsection
