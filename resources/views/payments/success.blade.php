@extends('app')
@section('content')
<div style="justify-content: center; align-items:center;"> <i class="fas fa-success"></i> </div>
@include('components.introduction',['introduction'=>'The Payment is Received Successfully! Thank You For Purchasing Design From Us!'])
<div style="padding-left: 0%;">
<a href="{{ route('designs') }}">
<div class="d-grid gap-2 col-6 mx-auto">
<button type="button" class="btn btn-primary w-50 w-md-25">
      <i class="fas fa-shopping-cart"></i> Continue Shopping
    </button>
</div>
</a>

</div>
@endsection