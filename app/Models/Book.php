<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ['author_id', 'name', 'price'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
