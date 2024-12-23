<?php

namespace App\Models\Social;

use App\Enums\Social\ArticleTypeEnum;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pharaonic\Laravel\Categorizable\Traits\Categorizable;

class Article extends Model
{
    use Categorizable, HasFactory;

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'timestamp',
        'publish_social_at' => 'timestamp',
        'type' => ArticleTypeEnum::class,
        "status" => "string"
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'user_id');
    }

    public function cercle()
    {
        return $this->belongsTo(Cercle::class);
    }
}
