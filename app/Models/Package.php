<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'amount',
    ];

    public function packageDetail()
    {
        return $this->hasMany(PackageDetail::class);
    }
    public function inquary()
    {
        return $this->hasMany(Inquary::class);
    }
}
