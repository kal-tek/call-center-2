<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.service_number')</th>
                <td>{{ $comment->id }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.firstName')</th>
                <td>{{ $comment->firstName }}</td>
            </tr>
            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.lastName')</th>
                <td>{{ $comment->lastName }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.phone')</th>
                <td>{{ $comment->phoneNo }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.comment')</th>
                <td style="white-space: unset;">{{ $comment->comment }}</td>
            </tr>
            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.created_by')</th>
                <td class="text-primary">{{ $created_by }}</td>
            </tr>
            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.created_at')</th>
                <td>{{ timezone()->convertToLocal($comment->created_at) }}({{ $comment->created_at->diffForHumans() }})</td>
            </tr>


            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.status')</th>
                <td><span class="text-uppercase font-weight-bold {{ $comment->status != 'completed' ? 'text-warning' : 'text-success'}}">{{ $comment->status }}</span></td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.notes')</th>
                <td>
                    @if($comment->notes)
                        {{ $comment->notes }}
                    @else
                        N/A
                    @endif
                </td>
            </tr>
            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.last_update_by')</th>
                <td class="text-primary">{{ $last_update_by }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.comments.tabs.content.overview.last_updated_at')</th>
                <td>
                    @if($comment->updated_at)
                        {{ timezone()->convertToLocal($comment->updated_at) }}({{ $comment->updated_at->diffForHumans() }})
                    @else
                        N/A
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div><!--table-responsive-->
