<?php

namespace App\Repositories\Backend\Auth;

use App\Exceptions\GeneralException;
use App\Models\Auth\Comment;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class CommentRepository.
 */
class CommentRepository extends BaseRepository
{
    /**
     * CommentRepository constructor.
     *
     * @param  Comment  $model
     */
    public function __construct(Comment $model)
    {
        $this->model = $model;
    }

}
