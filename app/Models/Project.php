<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'excerpt', 'description', 'order', 'slug', 'image', 'link', 'github_link', 'early_version'];

    public function techs()
    {
        return $this->belongsToMany(Tech::class);
    }
}
