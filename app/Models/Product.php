<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    // protected $with = ['category'];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(
            function ($model) {
                if ($model->getKey() == null) {
                    $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
                }
            }
        );
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama_produk',
        'slug',
        'deskripsi_singkat',
        'deskripsi',
        'harga_normal',
        'harga_diskon',
        'SKU',
        'status_stok',
        'fitur',
        'jumlah_stok',
        'image',
        'images',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
