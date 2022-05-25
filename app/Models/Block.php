<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property-read string $id
 * @property-read string $generator
 * @property-read int $height
 * @property-read Carbon $date
 * @property-read string $nonce
 * @property-read string $signature
 * @property-read int $difficulty
 * @property-read string $argon
 * @property-read int $transactions
 */
final class Block extends Model
{
    public $incrementing = false;

    public $timestamps = false;

    /** @var array<string, string> */
    protected $casts = [
        'height' => 'int',
        'difficulty' => 'int',
        'transactions' => 'int',
        'date' => 'date',
    ];

    protected $fillable = [];
}
