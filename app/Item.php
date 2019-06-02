<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id',
        'item_code',
        'item_name',
        'description',
        'status',
        'terms_and_conditions',
        'amount',
        'html_desription',
        'brand',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    protected $primaryKey = "item_id";
}
