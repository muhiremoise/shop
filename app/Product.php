<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice(){
        return money_format('Rwf %i', $this->price / 10);
    }
}
