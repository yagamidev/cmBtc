@extends('layouts/mainLayout')


@section("content")

<div class="container">
    <h1>Current exchange rates of crypto currencies</h1>
    <form action="" class="exchange-form d-flex">
        <div class="">
            <div class="form-group">
                <select class="form-control" aria-label="Currency I have">
                    <option value="BTC" selected>Bitcoin</option>
                    <option value="LTC">Litecoin</option>
                    <option value="ETH">Ethereum</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" min="0" value="1.00" aria-label="Amount">
            </div>
        </div>
        <div>
            <button class="btn btn-orange">
                <i class="fa fa-exchange"></i>
            </button>
        </div>
        <div>
            <div class="form-group">
                <select class="form-control" aria-label="Currency I want">
                    <option value="BTC">Bitcoin</option>
                    <option value="LTC" selected>Litecoin</option>
                    <option value="ETH">Ethereum</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" min="0" value="1.00" aria-label="Amount">
            </div>
        </div>
    </form>
</div>

@endsection

