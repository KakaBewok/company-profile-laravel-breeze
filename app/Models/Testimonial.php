<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'message',
        'project_client_id'
    ];

    public function client()
    {
        return $this->belongsTo(ProjectClient::class, 'project_client_id');
    }
}
