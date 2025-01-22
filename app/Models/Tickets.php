<?php

namespace App\Models;

use App\Models\Airports;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tickets extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'image',
    //     'category',
    //     'price',
    //     'tax',
    // ];

    protected $guarded = ["id"];

    // relationship
    public function airport() {
        return $this->belongsTo(Airports::class);
    }
}
