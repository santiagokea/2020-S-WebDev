function validate(){
  let oForm = event.target; // the form I submit
  let aElements = oForm.querySelectorAll('[data-validate]')
  for(let i = 0; i < aElements.length; i++){
    aElements[i].classList.remove('invalid')
    let sValidateType = aElements[i].getAttribute('data-validate')
    switch( sValidateType ){
      case 'string':
        var sData = aElements[i].value
        var iMin = aElements[i].getAttribute('data-min')
        var iMax = aElements[i].getAttribute('data-max')
        // console.log('validate string')
        if(sData.length < iMin || sData.length > iMax){
          aElements[i].classList.add('invalid')
        }
      break
      case 'integer':
        var sData = aElements[i].value
        if( /^\d+$/.test(sData) === false ){
          aElements[i].classList.add('invalid')
          break
        }
        var sData = parseInt(aElements[i].value) // 55ppp
        // console.log(sData)
        var iMin = parseInt(aElements[i].getAttribute('data-min'))
        // console.log(iMin)
        var iMax = parseInt(aElements[i].getAttribute('data-max'))        
        if(sData < iMin || sData > iMax){
          aElements[i].classList.add('invalid')
        }        
      break
    }  
  }
  return (oForm.querySelectorAll('.invalid').length) ? false : true

}

