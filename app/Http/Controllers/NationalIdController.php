<?php

namespace App\Http\Controllers;

use App\Models\national_id;
use Illuminate\Http\Request;

class NationalIdController extends Controller
{
    public function store(Request $request)
    {
        // تحقق من صحة البيانات
        $validatedData = $request->validate([
            'arabic_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'date_address' => 'required|string|max:20',
            'check_sex' => 'required|in:ذكر,أنثى',
            'date_brith' => 'required|date|max:20',
            'status' => 'required|string|max:20',
            'job' => 'required|string|max:20',
        ]);

        // إضافة البيانات إلى قاعدة البيانات
        national_id::create($validatedData);

        return redirect()->back()->with('success', 'تم إدخال البيانات بنجاح');
    }
}
