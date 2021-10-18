@extends('frontend.layouts.app')

@section('title', appName() . ' | ' . $project->title)
@section('meta_description', $project->short_description)
@section('meta_canonical', "https://kellydevittceramics.com/gallery")
@push('before-styles')
    <link href="{{mix('/css/projects/project.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="row mb-5">
        <div class="col-md-6">
            @include('frontend.projects.image_carousel', ['project' => $project, 'images' => $project->getMedia('images')])
        </div>
        <div class="col-md-6 align-self-center text-center mt-3">
            <h3>{!! $project->title !!}</h3>
            <p>{!! $project->medium !!}</p>
            <br>
            <p>{!! $project->short_description !!}</p>
            <p><small>{!! $project->started_at != "" ? date('m-d-Y', strtotime($project->started_at)) : "" !!} {!! $project->finished_at != "" ? "-" : "" !!} {!! $project->finished_at != "" ? date('m-d-Y', strtotime($project->finished_at)) : "" !!}</small></p>
        </div>
    </div>

    @include('frontend.projects.project_description', ['project' => $project])
    @include('frontend.projects.image_list', ['images' => $project->getMedia('images')])
@endsection

@push('after-scripts')
    <script src="{{mix('js/frontend/project.js')}}"></script>
@endpush
