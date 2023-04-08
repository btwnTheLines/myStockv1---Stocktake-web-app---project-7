<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StocktakeItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'companyemail',
        'item_name',
        'no_of_items',
        'amount_of_item',
        'units'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'email');
    }

}
