@extends('layouts.app')

@section('content')
  <img src="{{asset('asset/10.jpg')}}" class="" alt="">
  <div class="mt-3">
    <h4 class="d-flex text-start">وزارة الداخلية</h4>
    <h4 class="d-flex text-start">الادارة العامة للمرور     </h4>
    <div class="row">
      <div class="col">
        <h4 class="d-flex text-start">نظام استخراج  الرخصة والترخيص   </h4>
    </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <h6 class="d-flex text-start">فضلاً أدخل البيانات التالية :</h6>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">  * الإسم باللغة العربية رباعي</label>
        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="الاسم باللغة العربية رباعي">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label"> * ادخل الرقم الوطني /رقم الجواز  </label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="الرقم الوطني رقم الجواز    ">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">*  مكان الميلاد </label>
    <input type="numbre" class="form-control" id="exampleFormControlInput1" placeholder="مكان الميلاد ">
  </div>
  <label>الجنس :</label>
  <div class="form-check" style="width: fit-content !important;">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
      ذكر
    </label>
  </div>
  <div class="form-check" style="width: fit-content !important;">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
    <label class="form-check-label" for="flexRadioDefault2">
      انثي
    </label>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">* نوع الرخصه   </label>
    <input type="numbre" class="form-control" id="exampleFormControlInput1" placeholder=" ملاكي/عامة  ">
  </div>
 <div class="mb-3">
      <label for="exampleFormControlInput4" class="form-label">تاريخ الميلاد </label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="تاريخ الميلاد    ">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">* مكان استخراج الرخصة   </label>
    <input type="numbre" class="form-control" id="exampleFormControlInput1" placeholder=" مكان استخراج الرخصة  ">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput4" class="form-label">المهنة  </label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="المهنة     ">
</div>
  <div class="mb-3">
    <label for="exampleFormControlInput4" class="form-label">رقم الهاتف  </label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="رقم الهاتف     ">
</div>
  <button class="w-25 rounded btn btn-success">
    <h5 class=""> ارسال  </h5>
  </button>
    </div>
  </div>
@endsection