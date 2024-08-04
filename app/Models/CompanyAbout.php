<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAbout extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'type'
    ];

    //relation
    public function keypoints()
    {
        return $this->hasMany(CompanyKeyPoint::class);
    }
}
