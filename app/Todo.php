<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    const STATUS_NOT_YET = 0;
    const STATUS = ['未着手','作業中','終了'];
    protected $fillable = ['title', 'due_date', 'status'];

    /**
 * 
 * @return string
 */
    public function getStatusText(): date_interval_create_from_date_string
    {
        if(empty(self::STATUS[$this->status]))
        {
            return "";
        }

        return self::STATUS[$this->status];
    }
}

