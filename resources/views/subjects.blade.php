<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakken</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Vakken</h1>

        @if ($subjects->isNotEmpty())
            <table class="table table-dark table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Beschrijving</th>
                        <th>Docent</th>
                        <th>Ingevoerd op</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->description }}</td>
                            <td>{{ $subject->teacher->name }}</td>
                            <td>{{ $subject->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Geen vakken gevonden.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
