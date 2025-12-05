@extends('layouts.front')

@section('title', 'Home — Haya Dev')

@section('content')
    @include('front.sections.hero')
    @include('front.sections.about-full')
    @include('front.sections.services-full')
    @include('front.sections.portfolio-full')
    @include('front.sections.contact-full')
@endsection
