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
}
