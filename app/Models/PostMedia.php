<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMedia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_id',
        'type',
        'file_path',
    ];

    /**
     * The table associated with the model.
     */
    protected $table = 'post_media';

    /**
     * Relationship: Post that owns this media
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Accessor: Get the full URL for the media file
     */
    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }

    /**
     * Scope: Get images only
     */
    public function scopeImages($query)
    {
        return $query->where('type', 'image');
    }

    /**
     * Scope: Get videos only
     */
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }
}
