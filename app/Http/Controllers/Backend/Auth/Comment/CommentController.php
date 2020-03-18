<?php

namespace App\Http\Controllers\Backend\Auth\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\Comment\ManageCommentRequest;
use App\Http\Requests\Backend\Auth\Comment\StoreCommentRequest;
use App\Http\Requests\Backend\Auth\Comment\UpdateCommentRequest;
use App\Http\Requests\Backend\Auth\Comment\ForwardCommentRequest;
use App\Models\Auth\Comment;
use App\Repositories\Backend\Auth\CommentRepository;

class CommentController extends Controller
{
    
     /**
     * @var commentRepository
     */
    protected $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }


    public function index(ManageCommentRequest $request)
    {
        return view('backend.auth.comment.index')
            ->withComments($this->commentRepository->orderBy('id')->paginate());
    }
        /**
     * @param ManageCommentRequest $request
     *
     * @return mixed
     */
    public function create(ManageCommentRequest $request)
    {
        return view('backend.auth.comment.create');
    }    
    
    /**
    * @param  StoreCommentRequest  $request
    *
    * @return mixed
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    */
   public function store(StoreCommentRequest $request)
   {
       $this->commentRepository->create($request->only(
            'first_name', 
            'last_name', 
            'phone', 
            'message', 
            'department', 
            'user_id'
        ));

       return redirect()->route('admin.auth.comment.index')->withFlashSuccess(__('alerts.backend.comments.created'));
   }  
   
   /**
    * @param ManageCommentRequest $request
    * @param Comment              $comment
    *
    * @return mixed
    */
   public function edit(ManageCommentRequest $request, Comment $comment)
   {
       return view('backend.auth.comment.edit')
           ->withComment($comment);
   }  
    
   /**
   * @param  UpdateCommentRequest  $request
   *
   * @return mixed
   * @throws \App\Exceptions\GeneralException
   * @throws \Throwable
   */
  public function update(UpdateCommentRequest $request, Comment $comment)
  {
      $this->commentRepository->update($comment, $request->only(
            'status', 
            'department', 
            'last_update_by',
            'notes'
       ));

      return redirect()->route('admin.auth.comment.index')->withFlashSuccess(__('alerts.backend.comments.updated'));
  }

  public function send(ForwardCommentRequest $request, Comment $comment)
  {
      $this->commentRepository->send($comment, $request->only(
            'department', 
            'last_update_by',
            'notes'
       ));

      return redirect()->route('admin.auth.comment.index')->withFlashSuccess(__('alerts.backend.comments.forwarded'));
  }
  public function show(ManageCommentRequest $request, Comment $comment)
  {
      return view('backend.auth.comment.show')
          ->withComment($comment);
  }

  public function forward(ForwardCommentRequest $request, Comment $comment)
  {
      return view('backend.auth.comment.forward')
          ->withComment($comment);
  }

}
