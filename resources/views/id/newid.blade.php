@extends('layouts.app')

@section('content')
  <div class="m-5">
    <h4 class="d-flex text-start">الادارة العامة للسجل المدني   </h4>
    <div class="row">
      <div class="col">
        <h4 class="d-flex text-start">نظام الاستخراج الالكتروني للرقم الوطني  </h4>
    </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <h6 class="d-flex text-start">فضلاً أدخل البيانات التالية :</h6>
    </div>
    <form action="{{ route('newid.store') }}" method="GET">
      @csrf
      @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">  * الإسم باللغة العربية رباعي</label>
        <input type="name" class="form-control" name="arabic_name" id="exampleFormControlInput1" placeholder="الاسم باللغة العربية رباعي">
    </div>
  <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label"> * اسم الوالدة رباعي</label>
    <input type="name" class="form-control" name="mother_name" id="exampleFormControlInput2" placeholder="اسم الوالدة رباعي">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">* مكان الميلاد </label>
    <input type="numbre" class="form-control" name="date_address" id="exampleFormControlInput3" placeholder="مكان الميلاد ">
  </div>
  <div class="form-check">الجنس :
  <div class="form-check" style="width: fit-content !important;">
    <input class="form-check-input" type="radio" name="check_sex" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
      ذكر
    </label>
  </div>
  <div class="form-check" style="width: fit-content !important;">
    <input class="form-check-input" type="radio" name="check_sex" id="flexRadioDefault2">
    <label class="form-check-label" for="flexRadioDefault2">
      انثي
    </label>
  </div>
</div>
 <div class="mb-3 "  style="width: fit-content !important;">
      <label for="exampleFormControlInput4" class="form-label">تاريخ الميلاد </label>
      <input type="date" class="form-control" name="date_brith" id="exampleFormControlInput4" placeholder="تاريخ الميلاد    ">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">* الحالة الاجتماعية  </label>
    <input type="numbre" class="form-control" name="status" id="exampleFormControlInput5" placeholder=" الحالة الاجتماعية ">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput4" class="form-label">المهنة  </label>
    <input type="text" class="form-control" name="job" id="exampleFormControlInput6" placeholder="المهنة     ">
</div>
  <button type="submit" class="w-25 rounded btn btn-success">
    <h5 class=""> ارسال</h5>
  </button>
  </div>
  </form>
  </div>
@endsection