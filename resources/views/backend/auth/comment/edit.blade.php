@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.access.comments.management'))

@section('content')
    
{{ html()->modelForm($comment, 'PATCH', route('admin.auth.comment.update', $comment->id))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.access.comments.management')
                        <small class="text-muted">@lang('labels.backend.access.comments.edit')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.users.first_name'))->class('col-md-2 form-control-label')->for('first_name') }}

                        <div class="col-md-10">
                            {{ html()->text('firstName')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.users.first_name'))
                                ->attribute('maxlength', 191)
                                ->readOnly()
                                }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                    {{ html()->label(__('validation.attributes.backend.access.users.last_name'))->class('col-md-2 form-control-label')->for('last_name') }}

                        <div class="col-md-10">
                            {{ html()->text('lastName')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.users.last_name'))
                                ->attribute('maxlength', 191)
                                ->readOnly() }}
                        </div><!--col-->
                    </div><!--form-group-->
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.phone'))->for('phone') }}
                                <div class="col-md-10">

                                {{ html()->text('phoneNo')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.phone'))
                                    ->attribute('maxlength', 191)

                                    ->readOnly() }}
                                </div><!--col-->

                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->

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
                        <div class="col">
                            <div class="form-group">
                                {{ html()->label(__('status'))->for('status') }}

                                {{ html()->select('status')
                                    ->class('form-control')
                                    ->options(['pending'=>'pending', 'completed'=>'completed'])
                                }}
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
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->

@endsection
