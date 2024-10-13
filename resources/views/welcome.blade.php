<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="antialiased">
    <div class="container py-5">
        <!-- عرض الكاردات -->
        @foreach($students->chunk(3) as $chunk)
            <div class="row mb-4">
                @foreach($chunk as $student)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $student->name }}</h5>

                            <div>
                                {!! QrCode::size(150)->generate($student->national_id) !!}
                            </div>
                            <p class="card-text">{{ $student->national_id }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $students->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional but recommended) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
