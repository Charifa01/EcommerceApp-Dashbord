<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class, 'cart_items');
    }
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_items');
    }
    public function images(){
        return $this->hasMany(Product_images::class , 'product_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
