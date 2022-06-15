<?php

namespace client_product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client_product extends Model 
{

    protected $table = 'client_product';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}