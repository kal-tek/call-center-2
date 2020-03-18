@if ($comment)
    <div class="btn-group btn-group-sm" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
        <a href="{{ route('admin.auth.comment.edit', $comment) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')" class="btn btn-primary" >
            <i class="fas fa-edit"></i>
        </a>
        <a href="{{ route('admin.auth.comment.show', $comment) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')" class="btn btn-info">
            <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('admin.auth.comment.forward', $comment) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.forward')" class="btn btn-dark">
            <i class="fas fa-paper-plane"></i>
        </a>
    </div>
@else
    N/A
@endif
