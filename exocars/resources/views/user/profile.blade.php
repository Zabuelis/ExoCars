<!DOCTYPE html>
<html lang="en" , data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury car dealers</title>
    <link rel="stylesheet" href="{{ asset('/css/profile/styles.css') }}" />
</head>

<body>
    @include('components.navbar')
    @if(session('successful'))
    <div class="alert alert-success" role="alert">
        {{ session('successful') }}
    </div>
    @endif
    <div id="main" class="container-fluid">
        <div class="text">
            <div class="title">
                <h2 class="title_text">Hello, {{ $account->f_name }} {{ $account->l_name }}</h2>
            </div>
            <div class="bio">
                <p class="text-start">Here you can see all of your future meetings</p>
            </div>
        </div>
        <div class="table_div">
            <table class="table">
                @php
                $i=0
                @endphp
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meetings as $meeting)
                    @php
                    $i++
                    @endphp
                    <tr>
                        <th scope=row>{{ $i }}</th>
                        <td>{{ $meeting->date }}</td>
                        <td>{{ $meeting->time }}</td>
                        <td>
                            <form action="{{ route('destroy.user.meeting', $meeting->m_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Meeting</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    @include('components.footer')
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>