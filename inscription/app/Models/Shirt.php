<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'size',
        'quantity_in',
        'quantity_out',
        'status',
    ];

    /**
     * Get the inscriptions associated with the shirt.
     */
    public function inscription(){
        return $this->hasMany(Inscription::class);
    }
}
