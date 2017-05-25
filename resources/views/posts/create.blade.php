@extends('layout/navbar')

@section('content')
<h1>new thing</h1>
<hr>
<form class="" action="index.html" method="post">
  {{ csrf_field() }}
</form>
@endsection
