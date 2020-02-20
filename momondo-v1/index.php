<?php
$iCheapestPrice = 9999999999999999;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="app.css">
  <title>MOMONDO</title>
</head>
<body>
  
  <nav>
    <a class="active" href="index.php" id="logo">momondo</a>
    <a href="">fly</a>
    <a href="">hotel</a>
    <a href="">car</a>
    <a href="">trips</a>
    <a href="">discover</a>
    <a href="">my trips</a>
    <a href="">login</a>
  </nav>

  <section id="search">
    <input type="text" placeholder="from city">
    <button>&lt;- -&gt;</button>
    <input type="text" placeholder="to city">
    <input type="text" placeholder="from date">
    <input type="text" placeholder="to date">
    <button id="btnSearch">SEARCH</button>
  </section>

  <section id="temporal">
    <img src="temporal.png">
  </section>

  <main>
    <div id="options">OPTIONS</div>
    <div id="results">

      <div id="price-options">
        <div id="cheapest">
          Cheapest
          <p>
            <span class="price">4.956 kr</span>
            <span class="time">19h. 37min.</span>
          </p>
        </div>
        <div id="best" class="active">
          Best
          <p>
            <span class="price">4.956 kr</span>
            <span class="time">19h. 37min.</span>
          </p>
        </div>
        <div id="fastest">
          Fastest
          <p>
            <span class="price">4.956 kr</span>
            <span class="time">19h. 37min.</span>
          </p>
        </div>
        <div>
          Custom
          <p>compare and choose</p>
        </div>
      </div>

      <div id="flights">

        <?php
        $sData = file_get_contents('most-popular-flights.json');
        $jData = json_decode($sData);
        foreach($jData as $jFlight){
          if($jFlight->price < $iCheapestPrice){
            $iCheapestPrice = $jFlight->price;
          }
          ?>
          <div id="flight">
            <div id="flight-route">
              <div class="row">
                <div>
                  <input type="checkbox">
                </div>
                <div>
                  <img class="airline-icon" src="KL.png">
                </div>
                <div>
                  18:15 - 18:30
                  <p>KLM</p>              
                </div>
                <div>
                  1 stop
                  <p>Amsterdam</p>
                </div>
                <div>
                  10h. 20min.
                  <p>CPH-MIA</p>
                </div>
              </div>
              <div class="row">
                <div>
                  <input type="checkbox">
                </div>
                <div>
                  <img class="airline-icon" 
                  src="<?= $jFlight->companyShortcut ?>.png">
                </div>
                <div>
                  18:15 - 18:30
                  <p>KLM</p>              
                </div>
                <div>
                  1 stop
                  <p>Amsterdam</p>
                </div>
                <div>
                  10h. 20min.
                  <p>CPH-MIA</p>
                </div>
              </div>            
            </div>
            <div id="flight-buy">
              <div>
                <?php 
                  $jFlight->price = $jFlight->price/100;
                  echo $jFlight->price; 
                ?> 
                Kr
              </div>
              <button>BUY</button>
            </div>
          </div>
          <?php
        }
        ?>





      </div>



    </div>
  </main>

</body>
</html>