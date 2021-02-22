<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['name','email','addr','frequency','amount','status','start_time','end_time'];
}
