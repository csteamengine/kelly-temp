<table id="sortableDataTable" class="display reorder-table table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Status</th>
        <th>Image</th>
        <th>Title</th>
        <th>URL</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($links as $link)
        <tr>
            <td class="selectable">{{$loop->index+1}}</td>
            <td>{{$link->id}}</td>
            <td>
                @include('backend.includes.switch', ['model' => $link, 'input_name' => 'is_active', 'default' => $link->is_active, 'route' => route('admin.links.activate', $link)])
            </td>
            <td class="selectable">
                @if($link->image() != null)
                    <img src="{{$link->image()->getUrl($link->image()->mime_type == 'application/pdf' ? "thumb" : "")}}"
                         style="height: 50px;"
                         alt="Image"
                         class="media-image"
                         data-placement="right"
                         data-html="true"
                         data-toggle="tooltip"
                         title="<img src='{{$link->image()->getUrl($link->image()->mime_type == 'application/pdf' ? "thumb" : "")}}' width='100%' />">
                @endif
            </td>
            <td class="selectable">{{$link->title}}</td>
            <td class="selectable">{{$link->url}}</td>
            <td>
                @include('backend.links.includes.actions', $model = $link)
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Status</th>
        <th>Image</th>
        <th>Title</th>
        <th>URL</th>
        <th>Actions</th>
    </tr>
    </tfoot>
</table>
