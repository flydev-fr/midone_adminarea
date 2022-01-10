<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class ChatChannel extends Model
{
    protected $table      = 'chat_channels';
    protected $primaryKey = 'id';
    public $timestamps    = false;

    protected $fillable = [ 'sender_id', 'receiver_id', 'channel_name' ];

    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'id', 'sender_id' );
    }
    public function scopeGetBySenderId($query, $sender_id= null)
    {
        if (!empty($sender_id)) {
            $query->where(with(new ChatChannel)->getTable().'.sender_id', $sender_id);
        }
        return $query;
    }


    public function receiver()
    {
        return $this->belongsTo('App\Models\User', 'id', 'receiver_id' );
    }
    public function scopeGetByReceiverId($query, $receiver_id= null)
    {
        if (!empty($receiver_id)) {
            $query->where(with(new ChatChannel)->getTable().'.receiver_id', $receiver_id);
        }
        return $query;
    }


}
