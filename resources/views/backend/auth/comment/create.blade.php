@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.access.comments.management'). ' | ' . __('labels.backend.access.comments.create'))

@section('content')
{{ html()->form('POST', route('admin.auth.comment.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.access.comments.management')
                        <small class="text-muted">@lang('labels.backend.access.comments.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.users.first_name'))->class('col-md-2 form-control-label')->for('first_name') }}

                        <div class="col-md-10">
                            {{ html()->text('first_name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.users.first_name'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                    {{ html()->label(__('validation.attributes.backend.access.users.last_name'))->class('col-md-2 form-control-label')->for('last_name') }}

                        <div class="col-md-10">
                            {{ html()->text('last_name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.users.last_name'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.phone'))->for('phone') }}
                                <div class="col-md-10">

                                {{ html()->text('phone')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.phone'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                                </div><!--col-->

                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.message'))->for('message') }}

                                {{ html()->textarea('message')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.message'))
                                    ->attribute('rows', 3)
                                    ->required() }}
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
                                    ->required() }}
                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->hidden('user_id', Auth::user()->id) }}
                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->


        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.auth.comment.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->form()->close() }}   

@endsection
