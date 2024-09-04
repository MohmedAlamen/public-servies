<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newpassport extends Model
{
    use HasFactory;
    // حدد اسم الجدول إذا لم يتبع صيغة الجمع الافتراضية
    protected $table = 'newpassport';

    // حدد الحقول التي يمكن تعبئتها
    protected $fillable = [
        'arabic_name',
        'english_name',
        'sd_id',
        'check_sex',
        'phone_num',
    ];
}
