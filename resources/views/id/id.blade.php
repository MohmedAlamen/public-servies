@extends('layouts.app')

@section('content')
  <img src="{{asset('asset/6.jpg')}}" class="" alt="">
  <div class="mt-3">
    <div class="row">
      <div class="col">
        <h4 class="d-flex text-start">نظام الاستخراج الالكتروني للرقم الوطني</h4>
        <p class="">  هو نظام يُستخدم     لتسهيل عملية استخراج الرقم الوطني أو الهوية الوطنية للمواطنين والمقيمين بطريقة إلكترونية. هذا النظام يعزز من كفاءة وسرعة الحصول على الرقم الوطني ويُقلل من الحاجة للذهاب إلى المكاتب الحكومية بشكل شخصي.
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
      <div class="col">
        <div class="card">
          <a class="btn card-body rounded btn-success" href="{{ route('newid') }}">
            <h5 class="card-title p-3 text-light">استخراج الرقم الوطني</h5>
          </a>
        </div>
      </div>
      <div class="col">
       <div class="card">
        <a class="btn card-body rounded btn-success" href="{{ route('lostid') }}">
          <h5 class="card-title p-3 text-light">استخراج بدل فاقد </h5>
        </a>
     </div>
      </div>
    </div>
  </div>
@endsection