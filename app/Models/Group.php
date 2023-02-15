<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, Notifiable,SoftDeletes;
    protected $table = 'groups';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    //Cấm ông nào thay đổi hoặc xóa
    //Chỉ cần insert array vào là nó tự parse json
    //Lúc lấy ra thì nó là object dùng assignment như bt ( Ví dụ: $data->title)

    protected $casts = [
        'params' => 'object',
        'params_plus' => 'object',

    ];


    protected $fillable = [
        'idkey',
        'shop_id',
        'module',
        'locale',
        'parent_id',
        'title',
        'slug',
        'is_slug_override',
        'duplicate',
        'description',
        'content',
        'image',
        'image_extension',
        'image_banner',
        'image_icon',
        'url',
        'type_url',
        'author_id',
        'target',
        'price',
        'params',
        'params_plus',
        'total_item',
        'total_view',
        'total_order',
        'order',
        'position',
        'display_type',
        'sticky',
        'is_display',
        'seo_title',
        'seo_description',
        'seo_robots',
        'status',
        'started_at',
        'ended_at',
        'published_at',
        'created_at',
        'account_fake',
    ];

    protected $attributes = [
        'locale' => 'vi',
    ];
}
