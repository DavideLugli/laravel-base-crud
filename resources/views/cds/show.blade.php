@extends('layouts.layout')
@section('header')
    <h1>Cd - {{$cd->name}} -</h1>
@endsection
@section('main')
<div class="cds">
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
        <li>
          <form action="{{route('cds.destroy', $cd->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
          </form>
        </li>
      </ul>
    </div>
</div>
@endsection
{{-- @dd($cd); --}}
