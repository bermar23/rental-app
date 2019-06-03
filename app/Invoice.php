<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'transaction_id', 
        'invoice_date', 
        'invoice_status', 
        'invoice_number', 
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
     * Get the invice items for the for the invoice.
     */
    public function invoiceItems()
    {
        return $this->hasMany('App\InvoiceItem');
    }
    
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
