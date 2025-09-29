<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

final class Subreddit extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'banner',
        'user_id',
        'is_active',
    ];

    /**
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany<Post, $this>
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function boot(): void
    {
        parent::boot();

        self::creating(function ($subreddit): void {
            if (blank($subreddit->slug)) {
                $subreddit->slug = Str::slug($subreddit->name);
            }
        });
    }
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
