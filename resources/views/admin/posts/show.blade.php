@extends('layouts.app')

@section('content')
<div class="container">

 <h1>SHOW</h1>
 <h4>{{ $post->title}}</h4>
 <p>{{ $post->content}}</p>

</div>
@endsection
