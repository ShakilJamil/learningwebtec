<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation</title>
</head>
<body>

<form action="cheakvalidation.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>