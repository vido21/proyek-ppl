<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{

            //         $table->string('title',100);
        //         $table->string('seller',30);
        //         $table->string('description',1000);
        //         $table->string('image',1000);
        //         $table->float('price',10,2);
        //         $table->bigInteger('stock');
    protected $fillable = ['title','seller','description','image','price','stock'];
}
