<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table="customer";
    protected $primaryKey="c_id";

    public $timestamps=false;


    //The attributes that are mass assignable.
    protected $fillable = ['name','date_added'];


    //1-1
    function houseInfo()
    {
    	//$this->hasOne(CustomerHouse::class, 'foreign_key', 'local_key');
    	return $this->hasOne(CustomerHouse::class,"customer_id","c_id");
    }
    //1-n
    function listOfAddress()
    {
    	return $this->hasMany(CustomerAddress::class,"customer_id","c_id");
    }


}
