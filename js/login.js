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

      errorPlacement: function (error, element) {
        error;
        document.getElementById("error").innerHTML =   "Error/s" ;
        document.getElementById("er_icon").style.visibility = "visible";
        console.log("fuck u");
        if (element.attr("name") == "email") {
        
          error.insertAfter("#error1");
       
      
        } else if (element.attr("name") == "password") {
         
          error.insertAfter("#error2");
        } else {
          error.insertAfter(element);
        }
      },

      submitHandler: function (form) {
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
