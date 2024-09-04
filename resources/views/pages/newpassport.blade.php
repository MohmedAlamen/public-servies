@extends('layouts.app')

@section('content')
  <div class="mt-5">
    <h4 class="d-flex text-start">الإدارة العامة للجوازات والهجرة</h4>
    <div class="row">
      <div class="col">
        <h4 class="d-flex text-start">نظام الاستخراج الالكتروني للجواز</h4>
        <p class="">بناءً على إلتزام وزارة الداخلية بخدمة المواطنين، تسعد الإدارة العامة للجوازات والهجرة بإطلاق خدمة الاستخراج الإلكتروني للحصول على جوازات السفر. هذه الخطوة تعبر عن رغبتنا الأكيدة في تبسيط وتسهيل الإجراءات على المواطنين، ونطمح لتحسين تجربة الحصول على جواز السفر بكفاءة ويسر.</p>
      </div>
    </div>
    <h4 class="d-flex text-start mt-5">استخراج الجواز</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
      <h6 class="d-flex text-start">فضلاً أدخل البيانات التالية :</h6>
    </div>
    <form action="{{ route('newpassport.store') }}" method="GET">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">  * الإسم باللغة العربية رباعي</label>
        <input type="name" class="form-control" name="arabic_name" id="exampleFormControlInput1" placeholder="الاسم باللغة العربية رباعي">
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput2" class="form-label"> * الإسم باللغة الانجليزية رباعي</label>
      <input type="name" class="form-control" name="english_name" id="exampleFormControlInput1" placeholder="الاسم باللغة الانجليزية رباعي">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label">* الرقم الوطني</label>
      <input type="numbre" class="form-control" name="sd_id" id="exampleFormControlInput1" placeholder="الرقم الوطني">
    </div>
    <div class="form-check">الجنس :
    <div class="form-check" style="width: fit-content !important;">
      <input class="form-check-input" type="radio" name="check_sex" id="flexRadioDefault1" value="ذكر">
      <label class="form-check-label" for="flexRadioDefault1">
        ذكر
      </label>
    </div>
    <div class="form-check" style="width: fit-content !important;">
      <input class="form-check-input" type="radio" name="check_sex" id="flexRadioDefault2" value="انثى">
      <label class="form-check-label" for="flexRadioDefault2">
        انثي
      </label>
    </div>
  </div>
  <div class="mb-3">
      <label for="exampleFormControlInput4" class="form-label">رقم الهاتف</label>
      <input type="text" class="form-control" name="phone_num" id="exampleFormControlInput1" placeholder="رقم الهاتف">
    </div>
    </div>
    <button type="submit" class="w-25 rounded btn btn-success me-5">
      <h5 class=""> ارسال</h5>
    </button>
  </form>
@endsection