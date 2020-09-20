<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BUDFOX.GG</title>
    </head>
    <body style="background-color: #eee; font-size: 16px;">
        <div style="max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px;">
            <div>
                <h3>Sender Name: {{ $details['full_name'] }}</h3>
            </div>

            <div>
                <h2>{{ $details['subject'] }}</h2>
                <p>{{ $details['message'] }}</p>
            </div>

            <div>
                Contact Information: {{ $details['email'] }}
            </div>

        </div>

    </body>
</html>