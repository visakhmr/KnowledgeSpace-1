@extends('layouts.app')

@section('content')
<div class='container'>
  <div id='search-page' data-q="{{ $q }}" data-page="{{$page}}" data-sort="{{ $sort }}" ></div>
</div>
@endsection
