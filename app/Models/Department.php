<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Define the table if it's not plural or standard naming convention
    protected $table = 'departments';

    // Define the fillable fields
    protected $fillable = [
        'dept_name',
        'id_positions',
        'id_manager',
    ];

    // Relationships
    public function position()
    {
        return $this->belongsTo(Position::class, 'id_positions');
    }

    public function manager()
    {
        return $this->belongsTo(Employee::class, 'id_manager');
    }
}

