<!DOCTYPE html>
<html>

<head>
  <style>
    input[type=text],
    input[type=int],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: rgb(95, 139, 129);
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: rgb(151, 197, 186);
    }

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
  <link rel="stylesheet" href="style.css">
  <title>Log into Database</title>
</head>

<body>
  <h1>Log into Database</h1>

  <form method="post" action="log.php">

    <label for="email">Email:</label>
    <input type="int" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="text" id="password" name="password" required><br><br>

    <input type="submit" value="Submit">
  </form>
  <form action="Homepage.html">
    <input type="submit" value="Cancel" />
  </form>
</body>

</html>