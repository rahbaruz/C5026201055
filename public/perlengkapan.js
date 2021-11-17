jQuery.validator.addMethod("validemail", function(value, element) { 
  return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
}, "Please enter valid email address!");
$.validator.addMethod( "numeric", function( value, element ) {
return this.optional( element ) || /^\d*$/.test( value );
}, "Numbers only!" );
var $registrationForm = $('#registration');
if($registrationForm.length){
  $registrationForm.validate({
      rules:{
          name: {
              required: true,
          },
          email: {
              required: true,
              validemail: true
          },
          password: {
              required: true
          },
          telephone: {
              required: true,
              numeric: true
          },
          course: {
              required: true
          },
          address: {
              required: true
          },
          zip: {
            required: true,
            numeric: true
        }
      },
      messages:{
          name: {
              required: 'Please enter username!'
          },
          address: {
              required: 'Please enter your address!'
          },          
          email: {
              required: 'Please enter your email address!',
              email: 'Please enter a valid email address!'
          },
          password: {
              required: 'Please enter your desired password!'
          },
          telephone: {
              required: 'Please enter your phone number!',
              numeric: 'Numbers only!'
          },
          course: {
              required: 'Please select a course!'
          },
          zip: {
            required: 'Please enter your zip code!',
            numeric: 'Numbers only!'
        }

      },
      errorPlacement: function(error, element) 
      {
        { 
            error.insertAfter( element );
        }
        
       }
  });
}