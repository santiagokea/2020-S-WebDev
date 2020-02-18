<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Validation</title>
</head>
<body>
  
  <form onsubmit="return validate()">
    <label>name (min 2 max 20 characters) </label>
    <input type="text" placeholder="name" data-validate="string" data-min="2" data-max="5">                  
    <label>last name (min 2 max 20 characters) </label>
    <input type="text" placeholder="last name" data-validate="string" data-min="2" data-max="5">                  
    <button>SIGNUP</button>
  </form>

  <script src="test.js"></script>

</body>
</html>