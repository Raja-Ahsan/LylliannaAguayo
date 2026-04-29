@foreach($models as $key=>$model)
<tr id="id-{{ $model->id }}">
    <td>{{ $models->firstItem()+$key }}.</td>
    <td>{{ $model->title }}</td>
    <td><a href="{{ $model->video_url }}" target="_blank" class="video-url-link">{{ $model->video_url }}</a></td>
    <td>
        @if($model->status)
        <span class="label label-success">Active</span>
        @else
        <span class="label label-danger">In-Active</span>
        @endif
    </td>
    <td>
        <div class="video-action-btns">
            @can('video-edit')
            <a href="{{ route('video.edit', $model->id) }}" data-toggle="tooltip" data-placement="top" title="Edit Video" class="btn btn-edit btn-xs"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('video-delete')
            <button type="button" class="btn btn-danger btn-xs btn-delete delete" data-slug="{{ $model->id }}" data-del-url="{{ url('video', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
            @endcan
        </div>
    </td>
</tr>
@endforeach
@if($models->hasPages())
<tr>
    <td colspan="5">
        <div class="d-flex flex-column align-items-center">
            <div class="text-muted small mb-2">Displaying {{ $models->firstItem() }} to {{ $models->lastItem() }} of {{ $models->total() }} records</div>
            {!! $models->appends(request()->query())->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>
@endif

<script>
$('.delete').on('click', function(){
    var slug = $(this).attr('data-slug');
    var delete_url = $(this).attr('data-del-url');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : delete_url,
                type : 'DELETE',
                success : function(response){
                    // console.log(response);
                    if(response){
                        $('#id-'+slug).hide();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }else{
                        Swal.fire(
                            'Not Deleted!',
                            'Sorry! Something went wrong.',
                            'danger'
                        )
                    }
                }
            });
        }
    })
});
</script>