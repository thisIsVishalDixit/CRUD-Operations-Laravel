<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        div {
            margin-top: 20px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Student Management System</h1>

    <div>
        <button onclick="location.href='{{ url('/view') }}'">Read</button>
        <button onclick="location.href='{{ url('/view') }}'">Update</button>
        <button onclick="location.href='{{url('/view') }}'">Delete</button>
    </div>

    <div>
        <button onclick="location.href='{{ url('/view')}}'">Search</button>
        <button onclick="location.href='{{ url('/home') }}'">Insert</button>
    </div>
</body>
</html>
