<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Validation</title>
</head>
<body>
  

  <form onsubmit= "return validate()">
    <label>name (min 2 max 20 characters) </label>
    <input 
      oninput = "validate()"
      type="text" 
      placeholder="name" 
      data-validate="string" 
      data-min="2" 
      data-max="5"
    >                  
    <label>last name (min 2 max 20 characters) </label>
    <input 
      oninput = "validate()"
      type="text" 
      placeholder="last name" 
      data-validate="string" 
      data-min="2" 
      data-max="5"
    >                  
    <label>price (min 1 max 99999)</label>
    <input 
      oninput = "validate()"
      type="text" 
      placeholder="price"
      data-validate = "integer"
      data-min = "1"
      data-max = "99999"
    >
    <label>email</label>
    <input 
      type="text" 
      placeholder="email"
      data-validate = "email"
    >
    
    <button>SIGNUP</button>
  </form>


  <script src="validator.js"></script>

</body>
</html>