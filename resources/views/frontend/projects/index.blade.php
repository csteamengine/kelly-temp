@extends('frontend.layouts.app')

@section('title', __('Projects'))
@section('meta_canonical', "https://kellydevittceramics.com/projects")
@push('before-styles')
@endpush

@section('content')
    @include('frontend.projects.projects')
@endsection

@push('after-scripts')
@endpush
