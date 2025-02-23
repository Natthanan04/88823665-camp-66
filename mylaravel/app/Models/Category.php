<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    public $timestamps = false;

    public function user()
    {
        return $this->hasMany(User::class); // ระบุ FK ชัดเจน
    }

    public function productList()
    {
        return $this->hasMany(ProductList::class); // ระบุ FK ชัดเจน
    }
}
