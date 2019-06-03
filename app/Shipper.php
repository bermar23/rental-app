<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name', 
        'contact_number', 
        'contact_person', 
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    protected $primaryKey = "shipper_id";

    /**
     * Get the invice items for the for the invoice.
     */
    public function transactions()
    {
        return $this->hasMany('App\Transactions');
    }
}
