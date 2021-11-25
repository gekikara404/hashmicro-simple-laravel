@extends('layouts.app')

@section('title', 'Semua Post')
 
@section('content')
<div class="wrapper">
<h1 style="text-align: center;">Simpel Crud</h1>

@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
<a href="{{ route('posts.create') }}"><button class="btn-green" style="margin-bottom:10px; width:100px;">Create</button></a>
<a href="{{ route('data') }}"><button class="btn-green" style="margin-bottom:10px; width:100px;">Input User</button></a>
<table style="width:100%">
    <thead>
        <tr>
            <th>Angka 1</th>
            <th>Angka 2</th>
            <th>Result</th>
            <th>Nested Loop</th>
            <th colspan='2'></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
        <tr>
            <td style="width: 200px" >
              <!-- nested if -->
              @if($post->title)
                @if($post->title =='21')
                   21 yes
                @else
                  {{$post->title}}
                @endif
              @else
               tidak ada
              @endif
             </td>
            <td  style="width: 200px" >{{ $post->body }}</td> 
            <!-- simple mathematic -->
            <td  style="width: 100px" >{{ $post->title * $post->body }}</td> 
            <td  style="width: 200px">
                <!-- nested loop -->
                <ol>
                    @foreach ($post->type  as $data)
                    <li>
                        {{$data->name}}
                    </li>
                    @endforeach
                </ol>
            </td> 
            <td style="width: 100px"><button class="btn-green"><a href="{{ route('posts.edit', $post->id) }}">Edit</a></button></td>
            <form method="POST" action="{{ url('posts', $post->id ) }}">
                @csrf
                @method('DELETE')
            <td style="width: 100px"><button class="btn-red">Hapus</button></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table> 
</div>
@endsection
