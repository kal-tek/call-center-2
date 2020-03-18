@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.access.comments.management'))

@section('content')
    
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.comments.management') }}
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('backend.auth.comment.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.access.comments.table.last_name')</th>
                            <th>@lang('labels.backend.access.comments.table.first_name')</th>
                            <th>@lang('labels.backend.access.comments.table.comment')</th>
                            <th>@lang('labels.backend.access.comments.table.department')</th>
                            <th>@lang('labels.backend.access.comments.table.status')</th>
                            <th>@lang('labels.general.actions')</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            @if(isset(Auth::user()->department))
                                @if($comment->department != Auth::user()->department)
                                    @continue
                                @else                                 
                                <tr>
                                    <td>{{ $comment->lastName }}</td>
                                    <td>{{ $comment->firstName }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>{{ $comment->department }}</td>
                                    <td>{{ $comment->status }}</td>
                                    <td>@include('backend.auth.comment.includes.actions', ['comment' => $comment])</td>
                                </tr>
                                @endif
                            @else                                 
                                <tr>
                                    <td>{{ $comment->lastName }}</td>
                                    <td>{{ $comment->firstName }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>{{ $comment->department }}</td>
                                    <td>{{ $comment->status }}</td>
                                    <td>@include('backend.auth.comment.includes.actions', ['comment' => $comment])</td>
                                </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $comments->total() !!} {{ trans_choice('labels.backend.access.comments.table.total', $comments->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $comments->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->


@endsection
