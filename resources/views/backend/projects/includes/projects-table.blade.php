@push('before-styles')
@endpush
<table id="projectsTable" class="display reorder-table table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Status</th>
        <th>Title</th>
        <th>Start Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td class="selectable">{{$loop->index+1}}</td>
            <td>{{$project->id}}</td>
            <td>
                @include('backend.includes.switch', ['model' => $project, 'input_name' => 'is_active', 'default' => $project->is_active, 'route' => route('admin.projects.activate', $project)])
            </td>
            <td class="selectable">{{$project->title}}</td>
            <td class="selectable">{{$project->started_at}} - {{$project->finished_at}}</td>
            <td>
                @include('backend.projects.includes.actions', $model = $project)
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Status</th>
        <th>Title</th>
        <th>Start Date</th>
        <th>Actions</th>
    </tr>
    </tfoot>
</table>

@push('after-scripts')
    <script src="{{ mix('js/backend/projects/projects.js') }}"></script>
    <script src="{{ mix('js/backend/includes/reorder.js') }}"></script>
    <script src="{{ mix('js/backend/includes/switch.js') }}"></script>
@endpush
