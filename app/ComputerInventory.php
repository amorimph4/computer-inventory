<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComputerInventory extends Model
{
    use SoftDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'launch_year', 
        'manufacturer', 
        'operational_system',
        'cpu',
        'memory',
        'storage',
        'initial_price',
        'image',
        'comments'
    ];

    protected $dates = ['deleted_at'];
}
