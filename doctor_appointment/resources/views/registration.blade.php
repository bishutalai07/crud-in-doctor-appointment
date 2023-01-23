<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body class="bg-white">
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
    <form action="{{ url('/') }}/patient" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <h3 class="text-center text-primary">
                Patient Registration
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Patient Name:</label>
                    <input type="text" name="name" id="" class="form-control border border-success" />
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Patient Email:</label>
                    <input type="email" name="email" id="" class="form-control border border-success" />
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Patient Weight:</label>
                    <input type="number" name="weight" id="" class="form-control border border-success" />
                    <span class="text-danger">
                        @error('weight')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Patient Age:</label>
                    <input type="number" name="age" id="" class="form-control border border-success" />
                    <span class="text-danger">
                        @error('age')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Checkup Time:</label>
                    <input type="time" name="checkup_time" id=""
                        class="form-control border border-success" />
                    <span class="text-danger">
                        @error('checkup_time')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Doctor Name:</label>
                    <input type="text" name="doctor_name" id=""
                        class="form-control border border-success" />
                    <span class="text-danger">
                        @error('doctor_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Patient Gender:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="F" />
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male"
                            value="M" />
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other"
                            value="O" />
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Checkup Date:</label>
                    <input type="date" name="checkup_date" id=""
                        class="form-control border border-success" />
                    <span class="text-danger">
                        @error('checkup_date')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
