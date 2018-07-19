<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ["user_id","name","email","question","phone","subject"];
    protected $table = "contact";

}
