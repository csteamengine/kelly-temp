@push('before-styles')
@endpush
<table id="themesTable" class="display reorder-table table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Status</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($themes as $theme)
        <tr>
            <td class="selectable">{{$loop->index+1}}</td>
            <td>{{$theme->id}}</td>
            <td>
                {!! Form::model($theme, ['route' => ['admin.themes.activate', $theme], 'method' => 'POST', 'files' => false, 'class' => 'form-horizontal']) !!}
                @include('backend.includes.switch', ['model' => $theme, 'input_name' => 'is_active', 'default' => $theme->is_active, 'route' => route('admin.themes.activate', $theme)])
                {{Form::close()}}
            </td>
            <td class="selectable">{{$theme->title}}</td>
            <td>
                @include('backend.themes.includes.actions', $model = $theme)
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
        <th>Actions</th>
    </tr>
    </tfoot>
</table>

@push('after-scripts')
    <script src="{{ mix('js/backend/themes/themes.js') }}"></script>
    <script src="{{ mix('js/backend/includes/reorder.js') }}"></script>

@endpush
