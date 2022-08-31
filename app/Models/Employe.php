<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $table ='employees';
   protected $fillable=[
    'comp_id',
    'name',
    'email',
    'phone',
   ];

    public function company()
    {
        return $this->belongsTo(Company::class , 'comp_id', 'id');
    }
}
