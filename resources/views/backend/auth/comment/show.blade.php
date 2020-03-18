@extends('backend.layouts.app')

@section('title', __('labels.backend.access.comment.management') . ' | ' . __('labels.backend.access.comment.view'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.access.comment.management')
                    <small class="text-muted">@lang('labels.backend.access.comment.view')</small>
                </h4>
            </div><!--col-->
            <div class="col-sm-7">                
                <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                    <a class="dropdown-item" href="{{ route('admin.auth.comment.update', $comment->id) }}"
                        onclick="event.preventDefault();
                        document.getElementById('resolve-form').submit();">
                        @lang('buttons.general.resolve')
                    </a>
                    {{ html()->modelForm($comment, 'PATCH', route('admin.auth.comment.update', $comment->id))->id('resolve-form')->class('form-horizontal')->open() }}
                    {{ html()->hidden('last_update_by', Auth::user()->id) }}
                    {{ html()->hidden('status', 'completed') }}
                    {{ html()->hidden('department', $comment->department) }}
                </div>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"><i class="fas fa-comment"></i> @lang('labels.backend.access.comment.tabs.titles.overview')</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                        @include('backend.auth.comment.show.tabs.overview')
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->

    <div class="card-footer">
        <div class="row">
            <div class="col">
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
</div><!--card-->
@endsection
