<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Requests</title>
</head>

<body>
<b>Blood type :</b><p>{{ $request->b_group }}</p>

<b>Case : </b><p>{{ $request->contents }}</p>

<b>Required till : </b><p>{{ $request->required_till }}</p>



</body>
</html>