<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Define the table if it's not plural or standard naming convention
    protected $table = 'countries';

    // Define the fillable fields
    protected $fillable = [
        'country_name',
    ];

    // Relationships
    public function employees()
    {
        return $this->hasMany(Employee::class, 'id_countries');
    }
}

