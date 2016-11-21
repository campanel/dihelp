<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'title',
        'description',
        'client_id',
        'contact_name',
        'responsible_area_id',
        'responsible_person_id',
        'module_id',
        'request_id',
        'priority_id',
        'size_id',
        'emails_to',
        'emails_to_cc',
    ];

    public function comments(){
        return $this->hasMany('App\TicketComments');
    }

    public function getCommentListAttribute()
    {
        return $this->comments->lists('id')->all();
    }
}
