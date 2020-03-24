@extends('layouts.layout')
@section('header')
    <h1>Tutti i Cd</h1>
@endsection
@section('main')
<div class="cds">
  @foreach ($cds as $cd)
    <div class="cd">
      <ul>
        <li>Id: {{$cd->id}}</li>
        <li>Name: {{$cd->name}}</li>
        <li>Artist: {{$cd->artist}}</li>
        <li>Year: {{$cd->year}}</li>
        <li>Number of songs: {{$cd->songs_number}}</li>
        <li>Genre: {{$cd->genre}}</li>
        <li>Creato il: {{$cd->created_at}}</li>
        <li>Aggiornato il: {{$cd->updated_at}}</li>
      </ul>
    </div>
  @endforeach
</div>
@endsection
