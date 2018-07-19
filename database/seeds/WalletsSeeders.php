<?php

use Illuminate\Database\Seeder;
use App\Wallets;

class WalletsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        $curr = [ 1=> ["name"=>"BTC","address"=>"34yhQ8niX6Ycuh3rho6EJbfJXsGM36QPZf","label"=> "BTC"],
                   2=>["name"=>"LTC","address"=>"METiGSE1Q6tVgW6VGrQ1Lucq2bfakJoWcE","label"=> "LTC"],
                   3=>["name"=>"BCH","address"=>"METiGSE1Q6tVgW6VGrQ1Lucq2bfakJoWcE","label"=> "BCH"],
                   4=>["name"=>"ETH","address"=>"0x1C5061Ea528a845E1CF08647C05D9F2286D38B7F","label"=> "ETH"],
                   5=>["name"=>"XAF","address"=>"","label"=> "XAF"],
                 ];

      for ($i=1; $i < sizeof($curr); $i++) {

        Wallets::create([
          'user_id'=>1,
          'currency_name'=> $curr[$i]["name"],
          'address' => $curr[$i]["address"],
          'label' => $curr[$i]["label"],
          'balance'=> 0.00000000,
        ]);
    }
  }
}
