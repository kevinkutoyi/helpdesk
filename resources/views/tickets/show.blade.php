@extends('layout.app')
@section('content')
<h1>Ticket Details</h1>

<p>Ticket Number: {{ $ticket->ticket_number }}</p>
<p>Subject: {{ $ticket->subject }}</p>
<p>Description: {{ $ticket->description }}</p>
<p>Priority: {{ $ticket->priority }}</p>
<p>School: {{ $ticket->school->name ?? 'None'  }}</p>

@endsection


{{--This example retrieves the ticket information from the route parameter (`$ticket`) and displays various details within the blade file.--}}

{{--**Overall Workflow:**--}}

{{--1. User submits a ticket form.--}}
{{--2. Controller validates and creates a new ticket.--}}
{{--3. Controller redirects the user to the `tickets.show` route with the newly created ticket ID.--}}
{{--4. Route directs the user to the `show.blade.php` file.--}}
{{--5. Blade file displays the details of the submitted ticket.--}}

{{--By implementing this approach, you can ensure that users are directed to a specific blade file showcasing the details of their newly created ticket after successful submission.--}}
