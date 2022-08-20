<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rate extends Model
{
    use HasFactory;
    public $timestaps = false;
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $table = "response";
    protected $guarded = [];
}
