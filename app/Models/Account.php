<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property-read string $id
 * @property-read string $public_key
 * @property-read string $block
 * @property-read float $balance
 * @property-read string $alias
 * @property-read Collection|Transaction $transactionsFrom
 * @property-read Collection|Transaction $transactionsTo
 */
final class Account extends Model
{
    public $incrementing = false;

    public $timestamps = false;

    /** @var array<string, string> */
    protected $casts = [
        'balance' => 'float',
    ];

    protected $fillable = [];

    public function blocks(): HasMany
    {
        return $this->hasMany(Block::class, 'generator', 'id');
    }

    public function transactionsFrom(): HasMany
    {
        return $this->hasMany(Transaction::class, 'public_key', 'public_key');
    }

    public function transactionsTo(): HasMany
    {
        return $this->hasMany(Transaction::class, 'dst', 'id');
    }
}
