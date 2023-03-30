<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscapeRooms extends Model
{
    use HasFactory;
    protected $fillable = [
        "localName",
        "phone",
        "level",
        "price",
        "portalNum",
        "street",
        "postalCode",
        "city",
        "province"
    ];
    
}
