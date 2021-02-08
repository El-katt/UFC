<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distination extends Model
{
    use HasFactory;
    protected $fillable = [
        "lbl_distination",
        'Addr1_dest',
        'Addr2_dest',
        'cp_dest',
        'city_dest',
        'tele_dest',
        'fax_dest',
        'mail_dest'
    ];
}
