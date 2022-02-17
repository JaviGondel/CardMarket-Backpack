<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function collections()
    {
        return $this->belongsToMany('App\Models\Collection', 'cards_collections');
    }


}
