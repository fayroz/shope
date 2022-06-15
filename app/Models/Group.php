<?php

namespace Group;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model 
{

    protected $table = 'groups';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function Department()
    {
        return $this->belongsTo('Department');
    }

}