<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/template">Template</a></li>
                <li><a href="/exercise">Exercise</a></li>
                <li><a href="/report">Report</a></li>
                <li><a href="/profile">Profile</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <h2>Template Page</h2>
        <p>Please select your template.</p>
        <a href="{{ route('dashboard') }}" style="color: #007BFF;">Go to Dashboard</a>
        <a href="/selection">{{ $template->name }}</a>
        

    </main>

    <!-- Optional JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
