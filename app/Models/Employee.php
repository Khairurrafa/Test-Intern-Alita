<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location_id',
        'birth_date',
    ];

    /**
     * Get the location that the employee belongs to.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
