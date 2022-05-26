<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property-read string $id
 * @property-read string $block
 * @property-read int $height
 * @property-read string $dst
 * @property-read float $val
 * @property-read float $fee
 * @property-read string $signature
 * @property-read int $version
 * @property-read string $message
 * @property-read Carbon $date
 * @property-read string $public_key
 */
final class Transaction extends Model
{
    public $incrementing = false;

    public $timestamps = false;

    /** @var array<string, string> */
    protected $casts = [
        'height' => 'int',
        'val' => 'float',
        'fee' => 'float',
        'version' => 'int',
        'date' => 'date',
    ];

    protected $fillable = [];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'dst', 'id');
    }
}
