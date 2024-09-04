<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // هنا يمكنك معالجة إرسال البريد الإلكتروني أو تخزين البيانات في قاعدة البيانات

        return redirect()->route('contact')->with('success', 'تم إرسال الرسالة بنجاح!');
    }
}
