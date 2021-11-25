
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('data/update') }}">
    @csrf
    <input type="text" name="text1"  placeholder="text1"> 
    <input type="text" name="text2" placeholder="text2">
    <button class="btn-blue">Submit</button>
  </form>

@if (session('success'))
  <div class="alert-success">
     <p>{{ session('success') }}</p> 
  </div>
@endif


<a href="{{ route('posts.index') }}"><button class="btn-green" style="margin-top:10px; width:100px;">Back</button></a>


@endsection