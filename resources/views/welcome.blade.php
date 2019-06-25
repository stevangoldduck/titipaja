@extends('layout')

@section('title')
    TitipDong.com
@endsection
@include('header')


@include('page.intro')
@section('content')

        @include('page.about')
        @include('page.how')
        @include('page.testi')
        @include('footer')
@stop
