<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id',
        'unit_price',
        'item_code'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'invoice_date' => 'datetime',
    ];

    protected $primaryKey = "invoice_id";

    /**
     * Get the images for the for the item.
     */
    public function images()
    {
        return $this->hasMany('App\ItemImage');
    }
}
