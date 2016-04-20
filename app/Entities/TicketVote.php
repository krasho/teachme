<?php namespace TeachMe\entities;

use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities\Ticket;
use TeachMe\Entities\User;

class TicketVote extends Model {

  public function ticket()
	{
		return $this->belongsTo(Ticket::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
