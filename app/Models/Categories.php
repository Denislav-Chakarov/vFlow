<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function getCategories(): array
    {
        return DB::table($this->table)->where('is_active', 1)->get()->toArray();
    }
}