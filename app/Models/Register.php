<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use HasFactory, SoftDeletes;

    // Define the table associated with the model
    protected $table = 'register';

    // Specify the fillable fields to prevent mass assignment vulnerabilities
    protected $fillable = [
        'user_unique_id',
        'fullname', 
        'email', 
        'mobile', 
        'kmc_id', 
        'working_place', 
        'departuring_place', 
        'departuring_date', 
        'departuring_time', 
        'arrival_date', 
        'arrival_time', 
        'accommodation_assistance', 
        'accommodation_at', 
        'fees_type',
        'fees_no',
        'fees_paid'
    ];

}