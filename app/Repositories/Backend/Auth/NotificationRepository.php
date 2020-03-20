<?php

namespace App\Repositories\Backend\Auth;

use App\Exceptions\GeneralException;
use App\Models\Auth\Notification;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class NotificationRepository.
 */
class NotificationRepository extends BaseRepository
{
    /**
     * NotificationRepository constructor.
     *
     * @param  Notification  $model
     */
    public function __construct(Notification $model)
    {
        $this->model = $model;
    }

 
}
