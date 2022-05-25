<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read string $public_key
 * @property-read int $height
 * @property-read string $ip
 * @property-read int $last_won
 * @property-read int $blacklist
 * @property-read int $fails
 * @property-read int $status
 */
final class Masternode extends Model
{
    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'public_key';

    protected $table = 'masternode';

    /** @var array<string, string> */
    protected $casts = [
        'height' => 'int',
        'last_won' => 'int',
        'blacklist' => 'int',
        'fails' => 'int',
        'status' => 'int',
    ];

    protected $fillable = [];
}
