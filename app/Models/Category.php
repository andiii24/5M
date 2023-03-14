<?php

namespace App\Models;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }
}
