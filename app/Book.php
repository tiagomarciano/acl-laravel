<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function getUserId()
    {
        return $this->user_id;
    }
}
