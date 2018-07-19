<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Trucates exising records to start from scratch
        User::truncate();

        $faker = \Faker\Factory::create();

        User::create([
          'username'=> "t@gml.com",
          'email' => "t@gml.com",
          'password'=>bcrypt("t@gml.com")
        ]);

        DB::table("activations")->insert([
          'user_id'=>1,
          'code'=>'4rxpG9JWnDDTv3SNUHjsC3RsUwhlZgez',
          'completed'=> 1,
          'completed_at'=>Carbon::now(),
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
        ]);


    }

    public function wallets(){

      return $this->hasMany("App\wallets");
    }
}
