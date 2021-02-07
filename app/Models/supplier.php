<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_supplier',
        'Addr1_supplier',
        'Addr2_supplier',
        'cp_supplier',
        'city_supplier',
        'tele_supplier',
        'fax_supplier',
        'mail_supplier',
        'interlocutor',
        'tele_interlocutor'
    ];
    public function product()
    {
        return $this->belongsToMany(product::class);
    }
}
