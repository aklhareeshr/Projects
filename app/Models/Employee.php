<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';

    protected $fillable = ['f_name', 'l_name', 'companies','emp_email','emp_phone'];

    public function company()
    {
        return $this->belongsTo(Company::class,'companies');
    }
}
