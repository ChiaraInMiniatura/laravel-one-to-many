@extends('layouts.app')

@section('content')
<div class="container">

 <h1>Index della CRUD</h1>

 @if (session('post_deleted'))

 <div class="alert alert-danger" role="alert">
    {{ session('post_deleted')}}
 </div>

 @endif

 <table class="table">
     <thead>
       <tr>
         <th scope="col">Id</th>
         <th scope="col">Titolo</th>
         <th scope="col">Azioni</th>

       </tr>
     </thead>
     <tbody>

         @foreach ($posts as $post )

         <tr>
           <th scope="row">{{ $post->id }}</th>
           <td>{{ $post->title }}</td>
           <td>
                <a class="btn btn-success" href="{{ route('admin.posts.show', $post)}}">VEDI</a>
                <a class="btn btn-warning" href="{{route('admin.posts.edit', $post)}}">MODIFICA</a>
                <form class="d-inline" action="{{ route('admin.posts.destroy', $post)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">ELIMINA</button>
                </form>
            </td>

         </tr>

         @endforeach

     </tbody>
    </table>
    {{ $posts->links()}}

</div>
@endsection
