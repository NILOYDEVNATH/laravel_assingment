<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Tweet List Table</h2>
    <a href="/tweets/create/" style="float: right; margin: 5px;">
    <button type="button" class="btn btn-success btn-sm">Create Tweets</button>
    </a>
    <table class="table table-bordered">
        <thead>

        <tr >
            <th style="text-align: center;">Si</th>
            <th style="text-align: center;">Body</th>
        </tr>

        </thead>
        <tbody>
        @foreach($tweets_list as $key=>$value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value->body}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
