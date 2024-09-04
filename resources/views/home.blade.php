@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
      <h1>وزارة الداخلية</h1>
      <h2> رئاسة قوات الشرطة</h2>
      <h3 class="display-4">مجمع خدمات الجمهور </h3>
        <p class="lead">نحن هنا لتقديم أفضل الخدمات للمجتمع السوداني.</p>
        {{-- Start Corasoul --}}
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('asset/1.jpg')}}" class="d-block mx-auto w-50" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('asset/7.png')}}" class="d-block mx-auto w-50" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('asset/4.jpg')}}" class="d-block mx-auto w-50" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    {{-- End Corasoul --}}
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <div class="col">
          <div class="card">
            <a class="btn card-body rounded btn-success" href="{{ route('passport') }}">
              <h5 class="card-title text-light p-3">الجوازات</h5>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="btn card-body rounded btn-success" href="{{ route('id') }}">
              <h5 class="card-title text-light p-3">الرقم الوطني</h5>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a class="btn card-body rounded btn-success" href="{{ route('newlicense') }}">
              <h5 class="card-title text-light p-3">الرخصة والترخيص </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
    {{-- Start list --}}
    <ul class="list-group mt-5 text-right p-5 m-5">
    <h4 class="list-group-item border-0">التفاصيل</h4>
    <li class="list-group-item border-0">مجمع خدمات الجمهور يقدم المجمع الخدمات الأتية:-</li>
    <li class="list-group-item border-0">الجوازات</li>
    <li class="list-group-item border-0">السجل المدني</li>
    <li class="list-group-item border-0">المستفيدين من قانون الجنسية</li>
    <li class="list-group-item border-0">المرور</li>
    <li class="list-group-item border-0">المباحث</li>
    <li class="list-group-item border-0">الادلة الجنائية</li>
    <li class="list-group-item border-0">الدفاع المدني</li>
    </ul>
    {{-- End list --}}
@endsection
