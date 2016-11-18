<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketComments extends Model
{
    protected $table = 'ticket_comments';

    protected $fillable = [
        'description', 'user_id', 'ticket_id'
    ];

}
