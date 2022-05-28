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

        'email': {
          required: true,
          email: true,
        },
        'password': {
          required: true,
        }
      },

      groups: {
        username: "email password",
      },

      messages: {

       'ememailHelp': {
          required: 'Please enter your email.',
          email: 'Please enter a valid email address.',
        },
        'password': {
          required: "This is required."
        },

      },
      errorPlacement: function (error, element) {
        if (element.attr("name") == "email" || element.attr("name") == "password") {
          error.insertAfter("#error");
        } else {
          error.insertAfter(element);
        }
      },

      submitHandler: function (form) {

        console.log("test");


      },

    });

    jQuery.validator.addMethod('selectcheck', function (value) {
      return (value != '0');
    }, "Value required");

    jQuery.validator.addMethod("emptyCheck", function (value) {
      return ($.trim(value) != "");
    }, "Space are not allowed");

  });

})