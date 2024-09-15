<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquary extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'type',
        'message',
        'package_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

}
