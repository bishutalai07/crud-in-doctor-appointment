<!doctype html>
<html lang="en">

<head>
    <title>Patients</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
        @if (session('success'))
            <div class="alert alert-danger">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Weight</th>
                    <th>Age</th>
                    <th>Checkup Date</th>
                    <th>Checkup Time</th>
                    <th>Doctor Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $key => $patient)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>
                            @if ($patient->gender == 'M')
                                Male
                            @elseif($patient->gender == 'F')
                                Female
                            @else
                                Other
                            @endif
                        </td>
                        <td>{{ $patient->weight }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->checkup_date }}</td>
                        <td>{{ $patient->checkup_time }}</td>
                        <td>{{ $patient->doctor_name }}</td>
                        <td>
                            <a href="{{ url('/patient/edit', $patient->id) }}" type="submit"
                                class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('/patient/destroy', $patient->id) }}" type="submit"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
