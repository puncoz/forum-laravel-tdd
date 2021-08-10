<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Thread
 * @package App
 *
 * @property integer $id
 * @property integer user_id
 * @property string  title
 * @property string  body
 * @property Carbon  created_at
 * @property Carbon  updated_at
 */
class Thread extends Model
{
    //
}
