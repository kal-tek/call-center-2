<?php

namespace App\Http\Requests\Backend\Auth\Comment;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Permission;


class ForwardCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasPermissionTo('comment-own-department-forward');
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
