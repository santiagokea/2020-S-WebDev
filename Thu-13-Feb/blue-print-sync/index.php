<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITEMS</title>
</head>
<body>
  <div id="items">
    <?php
    $sData = file_get_contents('data.json');
    $jData = json_decode($sData);
    echo '<div class="item">Name: '.$jData[0]->name.'</div>';
    ?>    
  </div>
  <button onclick="getItems()">GET MORE ITEMS</button>


  <script>
    async function getItems(){
      var jResponse = await fetch('api-get-items.php')
      var jData = await jResponse.json()
      var sItem = `<div class="item">Name: ${jData[1].name}</div>`;
      document.getElementById("items").insertAdjacentHTML('beforeend', sItem)
    }


  </script>


</body>
</html>