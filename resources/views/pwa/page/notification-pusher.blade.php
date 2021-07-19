<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Application</title>

</head>
<body>

<div class="container">
    <div class="col-md-4 col-md-offset-2">
        <fieldset style="padding-top: 30px">
            <legend>Form pusher:</legend>
            <form action="{{ route('notification.push') }}">
                <label for="title">Title :</label>
                <input type="text" name="title" id="title">
                <label for="content">Message push :</label>
                <textarea name="content" id="content" cols="33" rows="10"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </fieldset>
    </div>
</div>
</body>
</html>
