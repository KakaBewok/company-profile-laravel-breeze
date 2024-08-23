<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyKeyPoint extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'keypoint',
        'company_about_id'
    ];

    public function about(): BelongsTo
    {
        return $this->belongsTo(CompanyAbout::class);
    }
}
