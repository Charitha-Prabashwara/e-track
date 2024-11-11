<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    /** @use HasFactory<\Database\Factories\ExpenseFactory> */
    use HasFactory;
    protected $table = 'expenses';
<<<<<<< HEAD

=======
    protected $fillable = ['title', 'category', 'amount'];
>>>>>>> ebb63f5166c4a7c9625ceeb17449f188813fc9ee
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
