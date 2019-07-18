<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['first_name', 'surname', 'other_name', 'phone_number', 'email_address'];
}
