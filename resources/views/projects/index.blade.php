<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center text-success my-5">Projects</h1>

    <div class="container">
        <ul>
            @foreach ($projects as $project)
                <li>{{ $project->name }}</li>
                <li>{{ $project->web_site }}</li>
                <li>{{ $project->slug }}</li>
                <li class="mb-5">{{ $project->description }}</li>
            @endforeach
        </ul>
    </div>

</body>

</html>