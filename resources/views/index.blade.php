<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculator simple</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Caculator Simple</h1>
    <form method="POST" action="">
        @csrf
        <table>
            <tr><input type="number" value="0" name='firstNumber'></tr> &nbsp
            <tr><input type="number" value="0" name='secondNumber'></tr>
        </table> </br>
        <table>
            <select id="operator" name="operator">
                <option>Addition</option>
                <option>Substraction</option>
                <option>Multiply</option>
                <option>Division</option>
            </select><br />
        </table><br/>
        <input type="submit" class="btn btn-success" value='Tính'>
    </form>
</body>

</html>
