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


    /**
     * @param array $data
     *
     * @throws GeneralException
     * @throws \Throwable
     * @return Role
     */
    public function create(array $data): Comment
    {
        return DB::transaction(function () use ($data) {
            $comment = $this->model::create([
                'firstName' => $data['first_name'],
                'lastName' => $data['last_name'],
                'phoneNo' => $data['phone'],
                'comment' => $data['message'],
                'user_id' => $data['user_id'],
                'department' => $data['department'],
                'status' => 'pending',
                'last_update_by' =>  $data['user_id']
            ]);
            if ($comment) {

                // event(new UserCreated($comment));

                return $comment;
            }

            throw new GeneralException(__('exceptions.backend.access.users.create_error'));
        });
    }

    /**
     * @param Comment  $comment
     * @param array $data
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Comment
     */
    public function update(Comment $comment, array $data): Comment
    {
        // $this->checkCommentById($comment, $data['id']);

        return DB::transaction(function () use ($comment, $data) {
            if ($comment->update([
                'status' => $data['status'],
                'department' => $data['department'],
                'last_update_by' => $data['last_update_by'],
            ])) {

                // event(new UserUpdated($comment));

                return $comment;
            }

            throw new GeneralException(__('exceptions.backend.access.comments.update_error'));
        });
    }


        /**
     * @param User $user
     * @param      $email
     *
     * @throws GeneralException
     */
    protected function checkCommentById(Comment $comment, $id)
    {
        // Figure out if id is not the same and check to see if id exists
        if ($comment->id !== $id && $this->model->where('id', '=', $id)->first()) {
            throw new GeneralException(trans('exceptions.backend.access.comments.id_error'));
        }
    }
 
}
