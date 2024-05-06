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

    <form method="POST" action="{{ route('tickets.store') }}" class=" mb-3" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="subject">Subject: <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" required>
            @error('subject')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="row mb-3">
            <div class="col">
            <label for="submitter_email">Email: <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('submitter_email') is-invalid @enderror" id="submitter_email" name="submitter_email" required>
                @error('submitter_email')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
        </div>
        <div class="col">
            <label for="submitter_phone">Phone: <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('submitter_phone') is-invalid @enderror" id="submitter_phone" name="submitter_phone" required>
            @error('submitter_phone')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="form-group mb-3">
            <label for="admission_number">Admission Number: <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('admission_number') is-invalid @enderror" id="admission_number" name="admission_number" required>
            @error('admission_number')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description">Description of the Issue: <span class="text-danger">*</span></label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="2" required ></textarea>
            @error('description')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="my-awesome-dropzone">Upload Screenshot: </label>
            <input type="file" name="file"  class="dropzone mb-3 form-control"
               id="my-awesome-dropzone"/>
        </div>

        <div class="form-group mb-3">
            <label for="priority">Priority: <span class="text-danger">*</span></label>
            <select class="form-control @error('priority') is-invalid @enderror" id="priority" name="priority" required>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            @error('priority')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="school_id">School:</label>
            <select class="form-control @error('school_id') is-invalid @enderror" id="school_id" name="school_id">
                <option value="" selected>None</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
                @error('school_id')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit Ticket</button>
    </form>

</div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection
