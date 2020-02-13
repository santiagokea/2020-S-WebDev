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
    $sBluePrint = file_get_contents('blueprint.html');
    $sCopy = $sBluePrint;
    $sCopy = str_replace('::name::', $jData[0]->name, $sBluePrint);
    $sCopy = str_replace('::price::', $jData[0]->price, $sCopy);
    $sCopy = str_replace('::test::', $jData[0]->test, $sCopy);
    echo $sCopy;
    ?>    
  </div>
  <button onclick="getItems()">GET MORE ITEMS</button>
  
  <script>
    var sBluePrint = `<?= $sBluePrint ?>`
    async function getItems(){
      var jResponse = await fetch('api-get-items.php')
      var jData = await jResponse.json()
      var sCopy = sBluePrint
      var sItem = sCopy.replace('::name::', jData[1].name)
      sItem = sItem.replace('::price::', jData[1].price)
      sItem = sItem.replace('::test::', jData[1].test)
      document.getElementById("items").insertAdjacentHTML('beforeend', sItem)
    }
  </script>


</body>
</html>