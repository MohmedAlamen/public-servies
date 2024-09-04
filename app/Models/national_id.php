<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class national_id extends Model
{
    use HasFactory;

    // حدد اسم الجدول إذا لم يتبع صيغة الجمع الافتراضية
    protected $table = 'national_id';

    // حدد الحقول التي يمكن تعبئتها
    protected $fillable = [
        'arabic_name',
        'mother_name',
        'date_address',
        'check_sex',
        'date_brith',
        'status',
        'job',
    ];
}
