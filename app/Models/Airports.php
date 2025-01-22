<?php

namespace App\Models;

use App\Models\Tickets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Airports extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'take_off',
        'take_off_time',
        'landing',
        'landing_time',
        'capacity',
    ]; 

    // relationship
    public function tickets() {
        return $this->hasMany(Tickets::class);
    }
}
