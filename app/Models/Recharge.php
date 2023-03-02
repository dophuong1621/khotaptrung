<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recharge extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes;
    protected $table = 'charge';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shop_id',
        'type_charge',
        'user_id',
        'gate_id',
        'telecom_key',
        'money_received',
        'pin',
        'serial',
        'declare_amount',
        'amount',
        'ratio',
        'real_received_amount',
        'txns_id',
        'response_code',
        'response_mess',
        'tranid',
        'description',
        'ip',
        'processor_id',
        'process_at',
        'process_log',
        'api_type',
        'status',
        'status_callback',
        'request_at',
        'request_id',
        'finish_at',
        'created_at',
    ];


    protected $meta_field = [
        'avatar',
        'cover',
        'follower',
        'booking_quantity',
        'booking_complete_rate',
        'camera',
        'voice',
        'mic',
        'game_play',
        'album_image',
        'album_video',
        'album_timeline',
        'is_online',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'password2',
        'remember_token',
        'refresh_token',
        'token',
        'exp_token_refresh',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
