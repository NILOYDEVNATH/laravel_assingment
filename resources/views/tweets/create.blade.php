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
    <div class="row">
        <div class="col-lg-6">
    <form method="post" action="/tweets">
        @csrf
        <div class="form-group">

            <label for="exampleInputEmail1">Tweet Body</label>
            <textarea cols="4" rows="8" class="form-control" name="body"></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        </div>
    </div>
</div>

</body>
</html>
