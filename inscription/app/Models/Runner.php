<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Runner extends Model
{
    use HasFactory;

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'document_number',
        'document_type',
        'name',
        'last_name',
        'email',
        'birthdate',
        'gender',
        'country',
        'state',
        'city',
        'address',
        'eps',
        'blood',
        'phone',
    ];

    /**
     * The attributes that are date data.
     *
     * @var array
     */
    protected $dates = [
        'birthdate',
    ];

    /**
     * Get the inscription associated with the runner.
     */
    public function inscription(){
        return $this->hasMany(Inscription::class);
    }

    /**
     * Get the user associated with the runner.
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
