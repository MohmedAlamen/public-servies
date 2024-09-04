@extends('layouts.app')

@section('content')
  <div class="mt-5">
      <h4 class="d-flex text-start">الإدارة العامة للجوازات والهجرة</h4>
      <div class="row">
        <div class="col">
          <h5 class="d-flex text-start">نظام التجديد الالكتروني للجواز</h5>
          <p class="">بناءً على إلتزام وزارة الداخلية بخدمة المواطنين، تسعد الإدارة العامة للجوازات والهجرة بإطلاق خدمة الحجز الإلكتروني للحصول على جوازات السفر. هذه الخطوة تعبر عن رغبتنا الأكيدة في تبسيط وتسهيل الإجراءات على المواطنين، ونطمح لتحسين تجربة الحصول على جواز السفر بكفاءة ويسر.</p>
        </div>
        <h4 class="d-flex text-start mt-5">تجديد الجواز</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
          <h6 class="d-flex text-start">فضلاً أدخل البيانات التالية :</h6>
        </div>
      </div>
      <form action="" method="GET">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> الإسم باللغة العربية رباعي</label>
        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="الاسم باللغة العربية رباعي">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label"> الإسم باللغة الانجليزية رباعي</label>
        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="الاسم باللغة الانجليزية رباعي">
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label"> الرقم الوطني</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="الرقم الوطني">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput4" class="form-label">رقم الهاتف</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="رقم الهاتف   ">
    </div>
    <button type="submit" class="w-25 rounded btn btn-success">
    <h5 class=""> ارسال</h5>
    </button>
  </form>
  </div>
@endsection