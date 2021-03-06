@push('before-styles')
@endpush
<table id="blogsTable" class="display reorder-table table table-striped table-bordered" style="width:100%">
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
    @foreach($blogs as $blog)
        <tr>
            <td class="selectable">{{$loop->index+1}}</td>
            <td>{{$blog->id}}</td>
            <td>
                @include('backend.includes.switch', ['model' => $blog, 'input_name' => 'is_active', 'default' => $blog->is_active, 'route' => route('admin.blogs.activate', $blog)])
            </td>
            <td class="selectable">{{$blog->title}}</td>
            <td class="selectable">{{$blog->started_at}} - {{$blog->finished_at}}</td>
            <td>
                @include('backend.blogs.includes.actions', $model = $blog)
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
    <script src="{{ mix('js/backend/blogs/blogs.js') }}"></script>
    <script src="{{ mix('js/backend/includes/reorder.js') }}"></script>
    <script src="{{ mix('js/backend/includes/switch.js') }}"></script>
@endpush
