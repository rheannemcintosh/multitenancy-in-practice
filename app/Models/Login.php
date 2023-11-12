<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use BelongsToTenant;

    protected $guarded = [];
}
