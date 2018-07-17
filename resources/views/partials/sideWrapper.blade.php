<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <aside id="sidebarWrapper">
        <aside class="a_b">
            <ul class="a_c">
                @foreach( $wallets as $wallet)
                <li class="a_e">
                    <a href="/en/account/history/{{ strtolower($wallet->currency_name) }}" class="a_j v_o a_o sidebar-link" >
                        <div class="v_i a_i sidebar-link-container">
                            <div class="v_f a_f v_o a_o v_w" data-value="{{$wallet->currency_name}}">
                                <span class="bt-stack bt-lg">
                                    <i class="bt bt-circle bt-stack-2x"></i>
                                    <i class="bt bt-{{ strtolower($wallet->currency_name) }} bt-stack-1x bt-inverse"></i>
                                </span>
                            </div>
                            <div class="a_m">
                                <span class="wallet-currency-name">{{$wallet->currency_name}}</span>
                                <span class="wallet-balance">{{ $wallet->balance }}</span>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </aside>
    </aside>
</div>