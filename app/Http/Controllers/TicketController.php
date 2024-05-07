<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\School;
use App\Models\Ticket;
use App\Services\TicketNumberGeneratorService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    private TicketNumberGeneratorService $ticketNumberGenerator;

    public function __construct(TicketNumberGeneratorService $ticketNumberGenerator)
    {
        $this->ticketNumberGenerator = $ticketNumberGenerator;
    }
    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $schools = School::all();
        return view('tickets.create', compact('schools'));
    }

    public function store(StoreTicketRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $ticketNumber = $this->ticketNumberGenerator->generate();

        $validated['ticket_number'] = $ticketNumber;

        // Create a new ticket with the validated data and generated number
        $ticket = Ticket::create($validated);

        return redirect()->route('tickets.show', $ticket->id);
    }

    public function show($id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $ticket = Ticket::find($id);
        return view('tickets.show', compact('ticket'));
    }
}
