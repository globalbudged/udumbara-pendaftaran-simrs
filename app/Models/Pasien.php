<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory, HasUuid;
    protected $guarded = ['id'];

    protected $appends = [
        'created_ago', 'updated_ago'
    ];

    public function getCreatedAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function getUpdatedAgoAttribute()
    {
        return $this->updated_at->diffForHumans();
    }
}
