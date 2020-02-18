function validate(){
  let oForm = event.target; // the form I submit
  let aElements = oForm.querySelectorAll('[data-validate]')
  for(let i = 0; i < aElements.length; i++){
    aElements[i].classList.remove('invalid')
    let sValidateType = aElements[i].getAttribute('data-validate')
    switch( sValidateType ){
      case 'string':
        let sData = aElements[i].value
        let iMin = aElements[i].getAttribute('data-min')
        let iMax = aElements[i].getAttribute('data-max')
        console.log('validate string')
        if(sData.length < iMin || sData.length > iMax){
          aElements[i].classList.add('invalid')
        }
      break
      case 'integer':
        console.log('validate integer')
      break
    }  
  }
  return (oForm.querySelectorAll('.invalid').length) ? false : true

}