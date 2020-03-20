<?php

namespace App\Http\Controllers\Backend\Auth;
use Illuminate\Http\Request;
use App\Models\Auth\Notification;
use App\Http\Requests\Backend\Auth\Notification\NotificationRequest;
use App\Http\Controllers\Controller;
use App\Notifications\Backend\Auth\Comment\CommentCreatedNotification;

class NotificationController extends Controller
{


    public function show(NotificationRequest $request, $notification){
        foreach(Auth()->user()->notifications as $not){
            if($not->id == $notification){
                $not->markasread();
                return redirect()->route('admin.auth.comment.show', $not->data['comment_id']);
            }
        }
    }
}