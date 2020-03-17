@if ($comment)
    <div class="btn-group btn-group-sm" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
        <a href="{{ route('admin.auth.comment.edit', $comment) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
            <i class="fas fa-edit"></i>
        </a>
        <a href="{{ route('admin.auth.comment.show', $comment) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')" class="btn btn-info">
            <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route('admin.auth.comment.destroy', $comment) }}"
           data-method="delete"
           data-trans-button-cancel="@lang('buttons.general.cancel')"
           data-trans-button-confirm="@lang('buttons.general.crud.delete')"
           data-trans-title="@lang('strings.backend.general.are_you_sure')"
           class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')">
            <i class="fas fa-trash"></i>
        </a>
    </div>
@else
    N/A
@endif
