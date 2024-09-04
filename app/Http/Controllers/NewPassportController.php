<?php

namespace App\Http\Controllers;

use App\Models\newpassport;
use Illuminate\Http\Request;

class NewPassportController extends Controller
{
    public function store(Request $request)
    {
        // تحقق من صحة البيانات
        $validatedData = $request->validate([
            'arabic_name' => 'required|string|max:255',
            'english_name' => 'required|string|max:255',
            'sd_id' => 'required|string|max:20',
            'check_sex' => 'required|in:ذكر,أنثى',
            'phone_num' => 'nullable|string|max:20',
        ]);

        // إضافة البيانات إلى قاعدة البيانات
        newpassport::create($validatedData);

        return redirect()->back()->with('success', 'تم إدخال البيانات بنجاح');
        
    }
}
