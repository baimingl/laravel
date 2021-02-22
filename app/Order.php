<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    public $timestamps = false;
    protected $fillable = ['name','email','addr','frequency','amount','status','start_time','end_time'];
}
