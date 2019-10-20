<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h2>Hello {{ $member->full_name }}</h2><br>
        <p>Welcome to Our Community. This is a Membership Verification email. Please Click below link</p>
        <a href="{{ url('verify', $member->remember_token) }}">
            {{ $member->remember_token }}
        </a>
    </body>
</html>
