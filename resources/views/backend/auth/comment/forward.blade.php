@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.access.comments.management'))

@section('content')
    
{{ html()->modelForm($comment, 'PATCH', route('admin.auth.comment.send', $comment->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.access.comments.management')
                        <small class="text-muted">@lang('labels.backend.access.comments.forward')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.message'))->for('message') }}

                                {{ html()->textarea('comment')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.message'))
                                    ->attribute('rows', 3) }}

                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->
                   
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('department'))->for('department') }}

                                {{ html()->select('department')
                                    ->class('form-control')
                                    ->options(['IT'=>'IT', 'ITC'=>'ITC'])
                                }}
                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->

                    

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.notes'))->for('notes') }}

                                {{ html()->textarea('notes')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.notes'))
                                    ->attribute('rows', 3) }}

                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->hidden('last_update_by', Auth::user()->id) }}
                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->


        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.auth.comment.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.forward')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->

@endsection
