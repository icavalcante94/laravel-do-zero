<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes; // usado para se ter acesso a todos os métodos do SoftDeletes

    protected $fillable = [
        'name',
        'image'
    ];

    protected $dates = [
        'deleted_at'
    ];

    // relacionamento com os produtos
    // uma categoria tem muitos produtos
    public function products()
    {
        return $this -> hasMany(related: Product::class);
    }


}
