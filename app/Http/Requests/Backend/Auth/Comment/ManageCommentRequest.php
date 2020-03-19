<?php

namespace App\Http\Requests\Backend\Auth\Comment;

use Illuminate\Foundation\Http\FormRequest;

class ManageCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasAnyPermission('comment-list', 'comment-own-department-list');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
