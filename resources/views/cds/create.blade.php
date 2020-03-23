<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form class="" action="{{route('cds.store')}}" method="post">
    @csrf
<input type="text" name="name" value="" placeholder="nome cd">
<input type="text" name="artist" value="" placeholder="artista">
<input type="text" name="year" value="" placeholder="anno pubblicazione">
<input type="text" name="songs_number" value="" placeholder="numero canzoni">
<input type="text" name="genre" value="" placeholder="genere">

<button type="submit" name="button">Invia</button>
    @method('POST')

  </form>
  </body>
</html>
