<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller/CalcController.php" method="post">
        <h3>Calculator</h3>
        <table>
            <tr>
                <td>Number 1</td>
                <td><input type="text" name="number1"/></td>
            </tr>
            <tr>
            <td>Number 2</td>
                <td><input type="text" name="number2"/></td>
            </tr>
            <tr>
            <td>Method</td>
                <td>
                    <Select name = "method">
                        <option value="add">Add</option>
                        <option value="sub">Sub</option>
                    </Select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Send" name = "btnSubmit"></td>
            </tr>
        </table>
    </form>
</body>
</html>