<?php

namespace App\Models;

use StevenLiebregt\CrispySystem\Database\Model;

class CarModel extends Model
{
    protected $table = 'cars';

    protected $fields = [
        'id',
        'name',
    ];
}