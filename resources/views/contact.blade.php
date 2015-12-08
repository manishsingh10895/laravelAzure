@extends('Layout.master')

@section('content')
    @forelse($contacts as $contact)
    {{$contact}}
    @empty
        No Contact
    @endforelse
@endSection
