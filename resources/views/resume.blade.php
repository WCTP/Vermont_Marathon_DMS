@extends('layouts.master')

@section('content')
<div class="col-lg-8">

  <h1 class="mt-4">Resume</h1>

  <hr>

  <iframe src="{{URL::to('/pdf/WalterProulxResume_Current.pdf')}}" width="100%" height="800"></iframe>

</div>
@endsection
