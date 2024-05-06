<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IODel Support Helpdesk</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    </head>
    <body>
        <div class="container">
            <header class="my-5 text-center">
                <h1>IODeL Support Helpdesk</h1>
            </header>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">For Students and Faculty</h5>
                            <p class="card-text">Submit a support request for any e-learning related issues you encounter.</p>
                             <a href="{{ route('tickets.create') }}" class="btn btn-success btn-lg">Submit Ticket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">For Agents and Admins</h5>
                            <p class="card-text">View and manage tickets submitted by users.</p>
                            <br/>
                            <a href="/admin" class="btn btn-primary btn-lg"><i class="bi bi-ticket-detailed"></i> View Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    </body>
</html>
