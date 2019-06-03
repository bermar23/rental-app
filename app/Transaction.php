<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference_number',
        'date_to',
        'date_from',
        'status',
        'date_returned',
        'transaction_date',
        'user_id',
        'shipper_id',
        'shipped_date',
        'shipped_to_name',
        'shipped_to_address',
        'shipped_to_city',
        'shipped_to_country',
        'shipped_to_postal_code',
        'shipped_to_tracking_number',
        'shipped_remarks',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_returned'=>'datetime:Y-m-d H:i:s',
        'transaction_date'=>'datetime:Y-m-d H:i:s',
        'shipped_date'=>'datetime:Y-m-d H:i:s',
    ];

    protected $primaryKey = "transaction_id";
    
    public function transactionItem()
    {
        return $this->hasMany('App\TransactionItem');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function shipper()
    {
        return $this->hasOne('App\Shipper');
    }
}
