@extends('app')
@section('content')
<div style="display:flex; justify-content: center; align-items:center; height:100px; width: 100%;"> <img src="{{asset('images/success.png')}}" style="height: 90px; width:90px;" alt="success-image"> </div>
@include('components.introduction',['introduction'=>'The Payment has been Received Successfully!!! Thank You For Purchasing the Design From Us!!!'])
<div style="padding-left: 0%;">
<a href="{{ route('designs') }}">
<div class="d-grid gap-2 col-6 mx-auto" style="padding-left:15%;">
<button type="button" class="btn btn-primary w-50 w-md-25">
      <i class="fas fa-shopping-cart"></i> Continue Shopping
    </button>
</div>
</a>

</div>
@endsection