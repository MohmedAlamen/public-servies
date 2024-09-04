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
        Schema::create('national_id', function (Blueprint $table) {
            $table->id();
            $table->string('arabic_name');
            $table->string('mother_name');
            $table->string('date_address');
            $table->enum('chech_sex', ['ذكر', 'أنثى']);
            $table->date('date_brith');
            $table->string('status');
            $table->string('job');
            $table->timestamps();
        });
    }

    public function store(Request $request)
    {
        // الحصول على البيانات من الطلب
        $arabic_name = $request->input('arabic_name');
        $mother_name = $request->input('mother_name');
        $date_address = $request->input('date_address');
        $chech_sex = $request->input('chech_sex');
        $date_brith = $request->input('date_brith');
        $status = $request->input('status');
        $job = $request->input('job');
        
        // إدخال البيانات في جدول national_id
        DB::table('national_id')->insert([
            'arabic_name' => $arabic_name,
            'mother_name' => $mother_name,
            'date_address' => $date_address,
            'chech_sex' => $chech_sex,
            'date_brith' => $date_brith,
            'status' => $status,
            'job' => $job,
        ]);
    
        // يمكن إعادة توجيه المستخدم إلى صفحة أخرى أو عرض رسالة نجاح
        return redirect()->back()->with('success', 'تم إدخال البيانات بنجاح!');
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('national_id');
    }
};
