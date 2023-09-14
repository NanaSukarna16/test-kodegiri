<!DOCTYPE html>
<html>

<head>
    <title>Lexicographic Substrings</title>
</head>

<body>
    <h1>Expected Output:</h1>
    @foreach ($substringsDict as $key => $value)
    <h2>{{ $key }} = {{ $value->implode(', ') }}</h2>
    @endforeach

    <h2>S = {{ $sortedAllSubstrings->implode(', ') }}</h2>
</body>

</html>