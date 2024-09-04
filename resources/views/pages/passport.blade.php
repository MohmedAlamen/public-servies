@extends('layouts.app')

@section('content')
<img src="{{asset('asset/9.png')}}" class="mx-auto d-block" alt="">
<div class="mt-3">
        <div class="row">
            <div class="col">
                <h4 class="d-flex text-start">نظام الاستخراج الالكتروني للجواز</h4>
                <p class="">بناءً على إلتزام وزارة الداخلية بخدمة المواطنين، تسعد الإدارة العامة للجوازات والهجرة بإطلاق خدمة الاستخراج الإلكتروني للحصول على جوازات السفر. هذه الخطوة تعبر عن رغبتنا الأكيدة في تبسيط وتسهيل الإجراءات على المواطنين، ونطمح لتحسين تجربة الحصول على جواز السفر بكفاءة ويسر.</p>
            </div>
            <div class="col">
                <h4 class="d-flex text-start">الأسئلة المهمة</h4>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ماهي المطلوبات لاستخراج جواز سفر جديد للبالغين؟
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            - صورة مطبوعة من الرقم الوطني.                </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ماهي المطلوبات لاستخراج جواز سفر جديد للأطفال؟
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            ١- صورة مطبوعة من الرقم الوطني، أو صورة مطبوعة من إفادة الرقم الوطني
                            <br>
                            ٢- حضور احد الوالدين مع اثبات شخصية . 
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ماهي المطلوبات لاستخراج بدل الفاقد؟
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            ١- شهادة الفقدان من اقرب قسم شرطة
                            <br>
                            ٢-صورة مطبوعة من الجواز المفقود.
                            <br>
                            ٣-صورة مطبوعة من الرقم الوطني.

                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ماهي الإجراءات التي يمكن القيام بها بناء على هذا الحجز الالكتروني؟                  </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            يمكن فقط اجراء استخراج جواز سفر أو تجديده أو استخراج بدل فاقد.                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            <div class="col">
                <div class="card">
                    <a class="btn card-body rounded btn-success" href="{{ route('newpassport') }}">
                    <h5 class="card-title p-3 text-light">استخراج الجواز</h5>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a class="btn card-body rounded btn-success" href="{{ route('renewpassport') }}">
                    <h5 class="card-title p-3 text-light">تجديد الجواز</h5>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a class="btn card-body rounded btn-success" href="{{ route('infopassport') }}">
                    <h5 class="card-title p-3 text-light">الاستعلام عن الجواز</h5>
                    </a>
                </div>
            </div>
         </div>
        </div>
  </div>
@endsection