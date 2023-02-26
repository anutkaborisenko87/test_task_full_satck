<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'Reviewer',
        'Email',
        'Review',
        'Rating',
        'Employee',
        'Employees_position',
        'Unique_employee_number',
        'Company',
        'Company description'
    ];
    public $timestamps = false;
}
