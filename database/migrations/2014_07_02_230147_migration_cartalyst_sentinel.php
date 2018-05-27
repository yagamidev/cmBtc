<?php

/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    2.0.17
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2017, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MigrationCartalystSentinel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('persistences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('code');
        });

        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->text('permissions')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('slug');
        });

        Schema::create('role_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->nullableTimestamps();

            $table->engine = 'InnoDB';
            $table->primary(['user_id', 'role_id']);
        });

        Schema::create('throttle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('ip')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->index('user_id');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',200);
            $table->string('email');
            $table->string('password');
            $table->text('permissions')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nationality')->nullable(); 
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('email');
        });

        Schema::create('orders',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type',6);
            $table->decimal('price_per_btc',18,9);
            $table->decimal('btc_amount',18,9);
            $table->timestamp('sell_order_date');
            $table->timestamps();
        });

        Schema::create('trade_history',function(Blueprint $table){
                $table->increments('id');
                $table->integer('seller_id');
                $table->integer('buyer_id');
                $table->decimal('price_in_xaf',18,9);
                $table->decimal('btc_amount',18,9);
                $table->string('type',100);
                $table->timestamp('trade_date');
        });

        Schema::create('transactions',function(Blueprint $table){
                $table->increments("id");
                $table->integer("from_user_id");
                $table->integer("to_user_id");
                $table->string("tx_type",30);  // sending or receiving 
                $table->decimal("amount",18,9);
                $table->string("status",20);

        });

        Schema::create('active_orders',function(Blueprint $table){
            $table->increments('id');
            $table->integer('seller_id');
            $table->integer('buyer_id');
            $table->string('type',10);
            $table->decimal('btc_amount',18,9);
            $table->decimal('price',18,9);

        });

        Schema::create('wallets',function(Blueprint $table){

            $table->increments('id');
            $table->integer('user_id');
            $table->string("currency_name",10);
            $table->string("address",255)->nullable();
            $table->string("label",30); 
            $table->decimal("balance",18,9)->default(0.0000000); 
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activations');
        Schema::drop('persistences');
        Schema::drop('reminders');
        Schema::drop('roles');
        Schema::drop('role_users');
        Schema::drop('throttle');
        Schema::drop('users');
        Schema::drop('orders');
        Schema::drop('active_orders');
        Schema::drop('trade_history');
    }
}
