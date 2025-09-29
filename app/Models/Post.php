<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

final class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'type',
        'url',
        'subreddit_id',
        'user_id',
        'score',
        'upvotes',
        'downvotes',
        'comments_count',
        'is_pinned',
        'is_locked',
    ];

    /**
     * @return BelongsTo<Subreddit, $this>
     */
    public function subreddit(): BelongsTo
    {
        return $this->belongsTo(Subreddit::class);
    }

    /**
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany<Comment, $this>
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    /**
     * @return HasMany<Comment, $this>
     */
    public function allComments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return MorphMany<Vote, $this>
     */
    public function votes(): MorphMany
    {
        return $this->morphMany(Vote::class, 'votable');
    }

    public function upvotes(): MorphMany
    {
        return $this->votes()->where('vote_type', 1);
    }

    public function downvotes(): MorphMany
    {
        return $this->votes()->where('vote_type', -1);
    }
    protected function casts(): array
    {
        return [
            'is_pinned' => 'boolean',
            'is_locked' => 'boolean',
        ];
    }
}
