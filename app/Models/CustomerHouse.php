<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerHouse extends Model
{
    use HasFactory;

    protected $table="customer_house";
    public $timestamps=false;


    function customerInfo()
    {
    	//$this->belongsTo(Customer::class, 'foreign_key', 'owner_key');
    	return $this->belongsTo(Customer::class,"customer_id","c_id");
    }
}

