
   
@extends('layouts.app')

@section('title', 'Buat Post Baru')

@section('content')
<div class="wrapper">
<h1>Buat Post Baru</h1>

@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif

@if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form method="POST" action="{{ url('posts') }}">
    @csrf
    <input type="number" name="title" type="text" placeholder="Angka 1"> 
    <input type="number" name="body" type="text" placeholder="Angka 2">
    <button class="btn-blue">Submit</button>
  </form>


<a href="{{ route('posts.index') }}"><button class="btn-green" style="margin-top:10px; width:100px;">Back</button></a>
  
</div>
@endsection