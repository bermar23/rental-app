<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id',
        'transaction_id',
        'amount',
        'item_code'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
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
