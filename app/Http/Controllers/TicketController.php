<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\School;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $schools = School::all();
        return view('tickets.create', compact('schools'));
    }

    public function store(StoreTicketRequest $request)
    {
        $validated = $request->validated();
        dd($validated);

    }
}
