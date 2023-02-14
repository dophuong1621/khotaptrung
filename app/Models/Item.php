<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'items';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'published_at'
    ];
    protected $attributes = [
        'locale' => 'vi'
    ];
    //Đừng có ông nào thay đổi hoặc xóa
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
        'image_logo',
        'url',
        'url_type',
        'author_id',
        'target',
        'price_ctv',
        'price_input',
        'price_old',
        'price',
        'ratio',
        'percent_sale',
        'order',
        'gate_id',
        'params',
        'params_plus',
        'total_item',
        'total_view',
        'total_order',
        'position',
        'display_type',
        'sticky',
        'is_display',
        'seo_title',
        'seo_description',
        'seo_robots',
        'status',
        'created_at',
        'ended_at',
        'started_at',
        'url_redirect_301',
        'published_at',
        'log_edit',
    ];
}
