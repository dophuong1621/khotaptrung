<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable,SoftDeletes;
    protected $table = 'users';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'shop_id',
        'account_type',
        'email',
        'email_verified_at',
        'password',
        'password2',
        'is_change_password2',
        'google2fa_secret',
        'google2fa_enable',
        'balance',
        'balance_in',
        'balance_out',
        'balance_in_refund',
        'image',
        'cover',
        'firstname',
        'lastname',
        'fullname',
        'url_display',
        'fullname_display',
        'is_kyc',
        'is_idol',
        'phone',
        'birtday',
        'gender',
        'address',
        'status',
        'verify_code',
        'verify_code_expired_at',
        'is_verify',
        'odp_code',
        'odp_expired_at',
        'odp_active',
        'odp_fail',
        'provider_id',
        'shop_access',
        'shop_expect',
        'last_add_balance',
        'last_minus_balance',
        'is_agency_card',
        'is_agency_charge',
        'lastlogin_at',
        'lastlogout_at',
        'created_by',
        'created_at',
        'ruby_num1',
        'ruby_num2',
        'ruby_num3',
        'ruby_num4',
        'ruby_num5',
        'ruby_num6',
        'ruby_num7',
        'ruby_num8',
        'ruby_num9',
        'ruby_num10',
        'balance_lock',
        'free_wheel',
        'free_wheel_type',
        'ip_allow',
        'utm_source',
        'utm_campain',
        'bonus_gift'

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

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }   
}
