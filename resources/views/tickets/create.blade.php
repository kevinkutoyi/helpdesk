@extends('layout.app')
@section('content')
<div class="mt-4">
    <h1>Submit a Ticket</h1>

    <p>Please provide the following information to submit a ticket:</p>

    <ul>
        <li>Subject: Briefly describe the issue you're facing.</li>
        <li>Description: Provide a detailed explanation of the problem, including any relevant error messages or steps you've already taken.</li>
        <li>Priority: Select the appropriate priority level (low, medium, or high) based on the urgency of the issue.</li>
        <li>School (Optional): If applicable, select the school associated with your request.</li>
    </ul>

    <form method="POST" action="{{ route('tickets.store') }}" class="mb-3">
        @csrf

        <div class="form-group mb-3">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="priority">Priority:</label>
            <select class="form-control" id="priority" name="priority" required>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="school_id">School:</label>
            <select class="form-control" id="school_id" name="school_id">
                <option value="">None</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit Ticket</button>
    </form>

</div>
@endsection