<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docenten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Docenten</h1>

        @if ($teachers->isNotEmpty())
            <table class="table table-dark table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Hobby's</th>
                        <th>Aantal Vakken</th>
                        <th>Ingevoerd op</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->hobbies ?? 'Geen' }}</td>
                            <td>{{ $teacher->subjects->count() }}</td>
                            <td>{{ $teacher->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Geen docenten gevonden.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
