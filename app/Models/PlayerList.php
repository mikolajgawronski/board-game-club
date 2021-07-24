<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerList extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = [
        "name",
        "user_id",
        "room_id",
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function room():BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
