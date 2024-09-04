@extends('layouts.app')

@section('content')
    <h1>اتصل بنا</h1>
    <form action="{{ route('contact.send') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">الاسم:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">الرسالة:</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
    <p>معلومات الاتصال: هاتف - 1234567890، بريد إلكتروني - example@example.com</p>
@endsection
