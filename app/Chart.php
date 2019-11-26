<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    protected $fillable = ['user_id','item_id','number_of_items'];
    protected $table = "chart";
}
