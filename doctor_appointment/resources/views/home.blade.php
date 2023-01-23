<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
</head>

<body class="bgded overlay" style="background-image:url({{ url('frontend/images/doctor.jpg') }});">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">ContactDoctor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                                href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ route('patient.create') }}">Appointment
                                Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ url('/patient') }}">Patient Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ url('/') }}">Go Back</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <article>
            <br>
            <br>
            <h1 class="heading text-center" style="color: white">Welcome</h1>
            <br>
            <br>
            <h3 class="heading text-center" style="color: white">For appointments please fillup the Appointment from.
            </h3>
        </article>
    </div>
</body>

</html>
