<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promocode extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'expire_date',
        'value',
        'type',
        'uses_in',
        'uses_out',
        'status',
    ];

    /**
     * The attributes that are date data.
     *
     * @var array
     */
    protected $dates = [
        'expire_date'
    ];

    /**
     * Get the inscriptions associated with the promocode.
     */
    public function inscription(){
        return $this->hasMany(Inscription::class);
    }
}
