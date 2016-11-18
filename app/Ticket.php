<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function comment(){

        return $this->hasMany('App\TicketComments');
    }

    public function getCommentListAttribute()
    {

        return $this->comment->lists('id')->all();
    }
}
