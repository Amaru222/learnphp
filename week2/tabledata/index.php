<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <table>
      <tr>
        <th>MSSV</th>
        <th>Ho Ten</th>
        <th>Ky</th>
        <th>Dang Ky</th>
      </tr>
      <?php
  $conn = new mysqli('localhost', 'root', '', 'pka_s');
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM dangky, monhoc, sinhvien WHERE sinhvien.MSSV = dangky.MSSV and monhoc.MaMH = dangky.MaMH";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo("<tr>");
      echo("<td>" . $row["MSSV"] . "</td>");
      echo("<td>" . $row["HoTen"] . "</td>" );
      echo("<td>" . $row["Ky"] . "</td>" );
      echo("<td>" . $row["TenMH"] . "</td>");
      echo("</tr>");
    }  
  } else {
    echo "0 results";
  }
  $conn->close();   
?>
    </table>
  </body>
</html>
