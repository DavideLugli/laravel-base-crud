<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form class="" action="{{route('cds.update', $cd->id)}}" method="post">
    @csrf
    @method('PATCH')
<input type="text" name="name" value="{{$cd->name}}">
<input type="text" name="artist" value="{{$cd->artist}}">
<input type="text" name="year" value="{{$cd->year}}">
<input type="text" name="songs_number" value="{{$cd->songs_number}}">
<input type="text" name="genre" value="{{$cd->genre}}">
<input type="hidden" name="id" value="{{$cd->id}}">
{{-- <button type="submit" name="button">Edit</button> --}}
<input type="submit" value="Edit">


  </form>
  </body>
</html>
