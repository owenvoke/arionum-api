<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * @property-read string $id
 * @property-read int $height
 * @property-read string $src
 * @property-read string $dst
 * @property-read float $val
 * @property-read float $fee
 * @property-read string $signature
 * @property-read int $version
 * @property-read string $message
 * @property-read string $public_key
 * @property-read Carbon $date
 * @property-read string $peer
 */
final class Mempool extends Model
{
    public $incrementing = false;

    public $timestamps = false;

    protected $table = 'mempool';

    /** @var array<string, string> */
    protected $casts = [
        'height' => 'int',
        'val' => 'float',
        'fee' => 'float',
        'version' => 'int',
        'date' => 'date',
    ];

    protected $fillable = [];

    public function source(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'src', 'id');
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'dst', 'id');
    }
}
