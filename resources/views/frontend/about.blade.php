@extends('frontend.layouts.app')

@section('title', __('Projects'))

@push('before-styles')

@endpush

@section('content')
    <div class="row mt-5 mb-3 text-center">
        <div class="col m-auto">
            <h1>
                {{$active_theme->first_name . ' ' . $active_theme->last_name}}
            </h1>
        </div>
    </div>
    @if($active_theme->about_image() != null)
        <div class="row mb-3">
            <div class="col col-12 col-sm-6 m-auto text-center">
                <img src="{{$active_theme->about_image()->getUrl()}}" class="img-fluid" alt="About Image">
            </div>
        </div>
    @endif
    {!! $active_theme->page_content !!}
@endsection

@push('after-scripts')

@endpush
