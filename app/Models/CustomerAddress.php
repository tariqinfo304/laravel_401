<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $table="customer_address";
    public $timestamps=false;



    function customerInfo()
    {
    	return $this->belongsTo(Customer::class,"customer_id","c_id");
    }
}
