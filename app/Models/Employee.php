<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Define the table if it's not plural or standard naming convention
    protected $table = 'employees';

    // Define the fillable fields
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone_no',
        'id_countries',
        'id_departments',
        'id_employment',
    ];

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class, 'id_countries');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'id_departments');
    }
}

