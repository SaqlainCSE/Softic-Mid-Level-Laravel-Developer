<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
</head>
<body>
    <form action="/payment/process" method="post">
        @csrf
        <label for="user_id">User ID:</label><br>
        <input type="text" id="user_id" name="user_id"><br>
        <label for="amount">Amount:</label><br>
        <input type="text" id="amount" name="amount"><br><br>
        <input type="submit" value="Submit">
    </form>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif
</body>
</html>
