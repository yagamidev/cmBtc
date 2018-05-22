<div id="profile-component" class="profile-component">
	<span>
		<i class="fa fa-user" aria-hidden="true"></i>
	</span>
	<div id="notification-count" class="notification-count"></div>
	<ul id="notification" class="profile-component-options">
		<ul id="profile-information">
			<li id="userMail" class="userMail copy-element title-tooltip" title-tooltip="" title="{{ Sentinel::check()->email }} ">{{Sentinel::check()->email }} </li>
		</ul>
		<li>
			<a href="/en/walletAPI.html">
				Wallet API
			</a>
		</li>
		<li>
			<a href="/en/referralURL.html">
				Referral
			</a>
		</li>
		<li>
			<a href="/en/verify.html">
				Verification
			</a>
		</li>
		<li>
			<a href="/en/linkedCardsTP.html">
				Linked cards
			</a>
		</li>
		<li>
			<a href="/en/profile.html">
				Settings
			</a>
		</li>
		<li>
			<a href="/en/setPass.html">
				Set password
			</a>
		</li>
		<li>
			<a href="{{ route('logout') }}">
				<i class="fa fa-power-off" aria-hidden="true"></i>
				Logout
			</a>
		</li>
	</ul>
</div>