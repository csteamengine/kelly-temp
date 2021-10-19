<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use HasFactory,
        InteractsWithMedia,
        SoftDeletes;

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected $fillable = [
        'title',
        'medium',
        'short_description',
        'description',
        'page_content',
        'external_url',
        'is_active',
        'order',
        'started_at',
        'finished_at',
    ];

    /**
     * @param Media|null $media
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        ini_set('memory_limit', '315M');
        if ($media->getTypeFromMime() == 'pdf') {
            $this->addMediaConversion('thumb');
            $this->addMediaConversion('preview');
        } else {
            $this->addMediaConversion('thumb')
                ->width(368)
                ->height(232);

            $this->addMediaConversion('preview')
                ->width(600)
                ->height(600);
        }
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->getMedia('images')->first()->getTypeFromMime() == 'pdf' ? $this->getMedia('images')->first()->getUrl() : route('frontend.projects.show', $this);
    }

    /**
     * @return bool
     */
    public function isPdf(): bool
    {
        return $this->getMedia('images')->first()->getTypeFromMime() == 'pdf';
    }
}
