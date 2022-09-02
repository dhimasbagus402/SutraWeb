<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Blog extends Model
{
    use HasFactory;
    use Sortable;
    protected $fillable = [
        'nama','deskripsi','gambar','tanggal'
    ];
    public $sortable = ['id', 'nama','deskripsi','gambar','tanggal', 'created_at', 'updated_at'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}