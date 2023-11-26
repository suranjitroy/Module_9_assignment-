@extends('Layout.master')

@section('content')

    @include('Components.hero')
    @include('Components.about')
    {{-- @include('Components.pricing') --}}
    @include('Components.projects')
   {{--@include('Components.calltoaction')--}}

@endsection
