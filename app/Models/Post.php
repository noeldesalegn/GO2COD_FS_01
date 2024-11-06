<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','title','subTitle','body','second_body','logo','url',]; // or protected $guarded = []; to allow all fields to be mass assignable
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function getLogoUrlAttribute()
    {
        return $this->logo ? asset('storage/' . $this->logo) : null;
    }
}
