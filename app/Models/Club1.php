<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Club1 extends Model
{
    use HasFactory;

    use HasFactory;

    use Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'clubname'
            ]
        ];
    }
}
