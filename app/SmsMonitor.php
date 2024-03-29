<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsMonitor extends Model
{
    protected $fillable = ['sender_id', 'receiver_no', 'message', 'messageId', 'signature', 'status', 'statusCode', 'cost', 'messageParts'];
}
