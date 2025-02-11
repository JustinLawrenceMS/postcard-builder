<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipient extends Model
{
    /** @use HasFactory<\Database\Factories\RecipientFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
