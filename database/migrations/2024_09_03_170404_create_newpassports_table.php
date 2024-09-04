<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('newpassport', function (Blueprint $table) {
            $table->id();
            $table->string('arabic_name');
            $table->string('english_name');
            $table->string('sd_id');
            $table->enum('chech_sex', ['ذكر', 'أنثى']);
            $table->string('phone_num')->nullable();
            $table->timestamps();
        });
    }

    public function store(Request $request)
{
    // الحصول على البيانات من الطلب
    $arabic_name = $request->input('arabic_name');
    $english_name = $request->input('english_name');
    $sd_id = $request->input('sd_id');
    $chech_sex = $request->input('chech_sex');
    $phone_num = $request->input('phone_num');

    // إدخال البيانات في جدول newpassport
    DB::table('newpassport')->insert([
        'arabic_name' => $arabic_name,
        'english_name' => $english_name,
        'sd_id' => $sd_id,
        'chech_sex' => $chech_sex,
        'phone_num' => $phone_num,
    ]);

    // يمكن إعادة توجيه المستخدم إلى صفحة أخرى أو عرض رسالة نجاح
    return redirect()->back()->with('success', 'تم إدخال البيانات بنجاح!');
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newpassport');
    }
};
