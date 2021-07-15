<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'value',
        'date_in',
        'status',
    ];

    /**
     * The attributes that are date data.
     *
     * @var array
     */
    protected $dates = [
        'date_in'
    ];

    /**
     * Get the inscriptions associated with the phase.
     */
    public function inscription(){
        return $this->hasMany(Inscription::class);
    }
}
