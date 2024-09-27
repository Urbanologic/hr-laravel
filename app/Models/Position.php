<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    // Define the table if it's not plural or standard naming convention
    protected $table = 'positions';

    // Define the fillable fields
    protected $fillable = [
        'positions_name',
    ];
    

    // Relationships
    public function departments()
    {
        return $this->hasMany(Department::class, 'id_positions');
    }
}

