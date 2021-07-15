<?php

namespace App\Models;

use App\Models\User;
use App\Models\Phase;
use App\Models\Shirt;
use App\Models\Runner;
use App\Models\Promocode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inscription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'runner_id',
        'category',
        'phase_id',
        'total',
        'promo_code_id',
        'shirt_id',
        'resp_stamp',
        'conf_stamp',
        'pol_id',
        'pol_status',
        'payment_method',
        'payment_method_type',
        'authorization_code',
    ];

    /**
     * The attributes that are date data.
     *
     * @var array
     */
    protected $dates = [
        'resp_stamp',
        'conf_stamp',
    ];

    /**
     * Get the phase associated with the inscription.
     */
    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }

    /**
     * Get the shirt associated with the inscription.
     */
    public function shirt()
    {
        return $this->belongsTo(Shirt::class);
    }

    /**
     * Get the promocode associated with the inscription.
     */
    public function promocode()
    {
        return $this->belongsTo(Promocode::class);
    }

    /**
     * Get the runner associated with the inscription.
     */
    public function runner()
    {
        return $this->belongsTo(Runner::class);
    }

    /**
     * Get the user associated with the inscription.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'runner_id');
    }
}
