$(document).ready(function () {
  // Wait for the DOM to be ready
  $(function () {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $validator = $("form[name='loginForm']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side

        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
        },
      },

      messages: {
        email: {
          
           required: "Please enter your email.",
           email: "Please enter a valid email address.",
        },

        password: {
          
           required: "Password is required.",
        },

      },

      group: {
        username : {email , password}
      },

      invalidHandler: function(event, validator) {
        var errors = validator.numberOfInvalids();
        if(errors > 1){
          document.getElementById("error").innerHTML =  " Errors" ;

        }else if(errors == 0){
          document.getElementById("er_icon").style.visibility = "hidden";
          document.getElementById("error").innerHTML =   "yp" ;
         }
        else{ 
          document.getElementById("error").innerHTML =   "error" ;
        }
       

       },
    
  
       showErrors: function(errorMap, errorList) {
        $("#summary").html("Your form contains "
          + this.numberOfInvalids()
          + " errors, see details below.");
        this.defaultShowErrors();
      },
    


      errorPlacement: function (error, element) {
        error;
       
        
        console.log("fuck u");     
          error.insertAfter("#error");
         document.getElementById("er_icon").style.visibility = "visible";
         
         
       
      
        
        
      },
   
      submitHandler: function (form) {
        console.log("test");
        document.getElementById("er_icon").style.visibility = "hidden";
        document.getElementById("error").innerHTML =   "" ;
        console.log("test");
      
      },
    });

    jQuery.validator.addMethod(
      "selectcheck",
      function (value) {
        return value != "0";
      },
      "Value required"
    );

    jQuery.validator.addMethod(
      "emptyCheck",
      function (value) {
        return $.trim(value) != "";
      },
      "Space are not allowed"
    );
  });
});



function showpie(){
  document.getElementById("piechart").style.visibility = "visible";
  document.getElementById("bargraph").style.visibility = "hidden";
}

function showbar(){
  document.getElementById("piechart").style.visibility = "hidden";
  document.getElementById("bargraph").style.visibility = "visible";
}