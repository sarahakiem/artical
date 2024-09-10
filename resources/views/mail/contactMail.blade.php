<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Messages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .message-container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="message-container">
        <h1> Message from contact </h1>
        <p><strong>Subject:</strong> <span id="subject">{{$data['subject']}}</span></p>
        <p><strong>Name:</strong> <span id="name">{{$data['name']}}</span></p>
        <p><strong>Email:</strong> <span id="email">{{$data['email']}}</span></p>
        <p><strong>Message:</strong> <span id="message">{{$data['message']}}</span></p>
    </div>

    

</body>
</html>
