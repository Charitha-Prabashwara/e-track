<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    /** @use HasFactory<\Database\Factories\ExpenseFactory> */
    use HasFactory;
    protected $table = 'expenses';
    protected $fillable = ['title', 'category', 'amount'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
