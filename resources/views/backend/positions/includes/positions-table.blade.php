@push('before-styles')
@endpush
<table id="positionsTable" class="display reorder-table table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Status</th>
        <th>Company</th>
        <th>Title</th>
        <th>Dates</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($positions as $position)
        <tr>
            <td class="selectable">{{$loop->index+1}}</td>
            <td>{{$position->id}}</td>
            <td>
                @include('backend.includes.switch', ['model' => $position, 'input_name' => 'is_active', 'default' => $position->is_active, 'route' => route('admin.positions.activate', $position)])
            </td>
            <td class="selectable">{{$position->company}}</td>
            <td class="selectable">{{$position->title}}</td>
            <td class="selectable">{{$position->start_date}} - {{$position->end_date}}</td>
            <td>
                @include('backend.positions.includes.actions', $model = $position)
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Status</th>
        <th>Company</th>
        <th>Title</th>
        <th>Dates</th>
        <th>Actions</th>
    </tr>
    </tfoot>
</table>

@push('after-scripts')
    <script src="{{ mix('js/backend/positions/positions.js') }}"></script>
    <script src="{{ mix('js/backend/includes/reorder.js') }}"></script>
    <script src="{{ mix('js/backend/includes/switch.js') }}"></script>
@endpush
