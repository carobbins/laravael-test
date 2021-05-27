<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductImages extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','image_filename'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
