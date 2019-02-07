<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enrollment;

class Event extends Model
{
    protected $table = 'events';

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function enrollments() {
        return $this->hasMany('App\Enrollment');
    }

    public static function isUserEnrolled($event) {
        $model = Enrollment::where('user_id', '=', auth()->user()->id)->where('event_id', '=', $event->id);
        return $model->exists();
    }
}
