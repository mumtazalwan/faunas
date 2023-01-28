<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

Use App\Models\Habitat;
Use App\Models\Founder;

class Animal extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $table = "animals";

    public function getAnimal()
    {
        return $this->belongsTo(Habitat::class, 'habitats_id');
    }

    public function getAnimal2()
    {
        return $this->belongsTo(Founder::class, 'founder_id');
    }
}
