<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    
    public array $fillable = [
        'user_id',
        'rubric_id',
        'image',
        'slug',
        'title',
        'excert',
        'content_html',
        'content_raw',
        'is_published',
        'published_at',
        'updated_at',
        'viewed',
        'keywords',
        'meta_desc',
    ];

    protected array $casts = [
        'is_published' => 'boolean',
    ];

    protected array $dates = [
        'created_at',
        'updated_at',
        'published_at',
        'delete_at',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
