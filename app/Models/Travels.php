<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Travels extends Model
{
    use HasFactory;
    protected $fillable = [
        'IsPublic',
        'Slug',
        'Name',
        'Description',
        'NumberOfDays'
    ];
    public function number_of_nights():Attribute
    {
        return Attribute::make(
            get:fn($value,$attributes)=>$attributes['NumberOfDays']-1
        );
    }
    public function NumberOfNights()
    {
        $Nights = $this->NumberOfDays ;
        return $Nights;
    }


}
