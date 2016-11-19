<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'title',
        'description',
        'client_id',
        'responsible_area_id',
        'responsible_person_id',
        'module_id',
        'request_id',
        'priority_id',
        'size_id',
    ];

    public function comment(){

        return $this->hasMany('App\TicketComments');
    }

    public function getCommentListAttribute()
    {

        return $this->comment->lists('id')->all();
    }
}
