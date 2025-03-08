@extends('layouts.layout')

@push('after-metas')
    <title>{{ config('app.name') }}</title>
@endpush

@section('content')
    <main class="content">
        @include('sections.banner')
        @include('sections.about')
        @include('sections.skills')
        @include('sections.experiences')
        @include('sections.projects')
        @include('sections.contact')

        <section id="spacer">
            <div class="spacer" data-height="96"></div>
        </section>
    </main>
@endsection
