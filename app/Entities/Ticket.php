<?php namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities\TicketComment;
use TeachMe\Entities\User;

class Ticket extends Model {

  public function comments()
	{
		return $this->hasMany(TicketComment::class);
	}

	public function getOpenAttribute()
	{
		return $this->status == 'open';
	}

  public function voters()
  {
    return $this->belongsToMany(User::class,"ticket_votes");
  }


  public function author()
  {
    return $this->belongsTo(User::class);
  }



}
