@extends('Layout.master')

@section('content')
    @forelse($contacts as $contact)
    <br>{{$contact}}</br>
    @empty
        No Contact
    @endforelse
@endSection
