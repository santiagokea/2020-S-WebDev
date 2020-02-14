async function buy(){
  var oForm = document.querySelector('#frmFlight')
  var jConnection = await fetch('api-buy.php',{
    "method":"POST",
    "body" : new FormData(oForm)
  })
  var sData = await jConnection.text()
  console.log(sData)
}