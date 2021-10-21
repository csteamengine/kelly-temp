@push('before-styles')
    <link href="{{mix('/css/projects/project_tile.css')}}" rel="stylesheet">
@endpush

<div class="row justify-content-center">
    @if(sizeof($projects) == 0)
        <h4 class="mt-4">There are no projects to view yet.</h4>
    @endif
    @foreach($projects as $project)
        @include('frontend.projects.project_tile', ['project' => $project])
    @endforeach
</div>

@push('after-scripts')
    <script src="{{mix('js/frontend/projects.js')}}"></script>
@endpush

