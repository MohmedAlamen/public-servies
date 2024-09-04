@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h4 class="d-flex text-start">الإدارة العامة للجوازات والهجرة</h4>
    <div class="row">
      <div class="col">
       <h4 class="d-flex text-start">نظام الاستعلام  الإلكتروني</h4>
       <h6 class="d-flex text-start">الإستعلام عن حالة جواز</h6>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
     <h6 class="d-flex text-start">فضلاً أدخل البيانات التالية :</h6>
    </div>
    <div class="mb-3">
     <label for="exampleFormControlInput3" class="form-label"> الرقم الوطني</label>
      <input type="numbre" class="form-control" id="exampleFormControlInput1" placeholder="الرقم الوطني">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput3" class="form-label"> رقم هاتفك*</label>
      <input type="numbre" class="form-control" id="exampleFormControlInput1" placeholder="الرقم الوطني">
    </div>
    <button class="w-25 rounded btn btn-success">
      <h5 class=""> فحص الجواز </h5>
    </button>
  </div>
@endsection