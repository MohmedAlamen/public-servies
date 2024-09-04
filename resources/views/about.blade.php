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
    <h1 class="text-success ">من نحن</h1>
    مجمع خدمات الجمهور السوداني هو مركز حكومي يهدف إلى تحسين تقديم الخدمات العامة للمواطنين في السودان. يعمل المجمع كحلقة وصل بين المواطنين والجهات الحكومية المختلفة، ويُسهم في تسريع وتبسيط إجراءات الحصول على الخدمات.

أبرز ملامح مجمع خدمات الجمهور السوداني:

توفير خدمات متكاملة: يُقدّم المجمع مجموعة متنوعة من الخدمات الحكومية، مثل استخراج الوثائق الرسمية، التراخيص، والمعاملات الإدارية، في مكان واحد لتسهيل الوصول إليها.

تحديث وتطوير: يهدف المجمع إلى تحديث وتطوير الإجراءات الحكومية بحيث تكون أكثر كفاءة وسرعة، مما يقلل من البيروقراطية ويُحسن تجربة المواطن.

الرقمنة والتكنولوجيا: يعتمد المجمع على تقنيات المعلومات والاتصالات لتحسين جودة الخدمات وتسهيل الإجراءات عبر النظم الإلكترونية، مما يتيح للمواطنين الاستفادة من الخدمات بشكل أسرع.

خدمة العملاء: يركز المجمع على تقديم خدمات متميزة من خلال توفير موظفين مدربين لخدمة المواطنين ومساعدتهم في إنهاء معاملاتهم بأسرع وقت ممكن.

التسهيل والمرونة: يهدف المجمع إلى تقديم خدمة متكاملة في مكان واحد، مما يوفر الوقت والجهد على المواطنين ويسهم في رفع مستوى رضاهم.

المجمع يمثل خطوة نحو تحسين فعالية وكفاءة الخدمات العامة في السودان ويُساهم في تعزيز الشفافية وتسهيل الإجراءات الحكومية.
@endsection
