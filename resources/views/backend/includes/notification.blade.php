

<div class="dropdown-menu dropdown-menu-right">
    <div class="dropdown-header text-center">
        <strong>notifications</strong>
    </div>
    @foreach(Auth::user()->unreadnotifications as $notification )
        <a class="dropdown-item text-primary" href="{{ route('admin.auth.notification.show', $notification->id) }}">{{$notification->data['tittle'] . ' by '. $notification->data['created_by']}} </a>
    @endforeach
    @foreach(Auth::user()->readnotifications->take(2) as $notification )
        <a class="dropdown-item" href="{{ route('admin.auth.comment.show', $notification->data['comment_id']) }}">{{$notification->data['tittle'] . ' by '. $notification->data['created_by']}} </a>
    @endforeach

</div>