<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($jobs as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>
            <p>Company: {{ $job['company'] }}</p>
            <p>Location: {{ $job['location'] }}</p>
            <p>Salary: {{ $job['salary'] }}</p>
        </div>
        <hr>
    @endforeach    
</body>
</html>