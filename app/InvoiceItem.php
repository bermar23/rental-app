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
        'invoice_date' => 'datetime:Y-m-d',
    ];

    protected $primaryKey = "invoice_item_id";

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
    
    public function item()
    {
        return $this->hasOne('App\Item');
    }
}
