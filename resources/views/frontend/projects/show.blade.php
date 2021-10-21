@extends('frontend.layouts.app')

@section('title', appName() . ' | ' . $project->title)
@section('meta_description', $project->short_description)
@section('meta_canonical', "https://kellydevittceramics.com/gallery")
@push('before-styles')
    <link href="{{mix('/css/projects/project.css')}}" rel="stylesheet">
@endpush

@section('content')
    @include('frontend.projects.project', ['project' => $project])

    @if(sizeof($projects) > 0)
        <div class="row mb-5">
            <div class="col m-auto text-center">
                <h3>Other Projects</h3>
            </div>
        </div>

        @include('frontend.projects.projects')
    @endif
@endsection

@push('after-scripts')
    <script src="{{mix('js/frontend/project.js')}}"></script>
@endpush
