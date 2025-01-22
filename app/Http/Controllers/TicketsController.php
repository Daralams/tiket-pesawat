<?php

namespace App\Http\Controllers;
use App\Models\Tickets;
// use Illuminate\Http\Request;

class TicketsController extends Controller
{

    public function landing_ticket() {
        return view('layouts.hero', [
            "title" => "Home"
        ]);
    }

    public function entry_ticket() {
        return view('ticket.entry_ticket', [
            "title" => "Tiket",
            "tickets" => Tickets::all()
        ]);
    }

    public function detail_ticket($id) {
        return view('ticket.detail-ticket', [ 
            "title" => "Details",
            "tickets" => Tickets::find($id)
        ]);
    }
}
