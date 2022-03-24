$(document).ready(function (e) {
  let $uploadfile = $('#register.upload-profile-image input[type="file"]');

  $uploadfile.change(function () {
    readURL(this);
  });

  $("#reg-form").submit(function (event) {
    let $password = $("#password");
    let $confirm = $("#confirm_pwd");
    let $error = $("#confirm_error");
    if ($password.val() === $confirm.val()) {
      return true;
    } else {
      $error.text("Password does not match");
      event.preventDefault();
    }
  });
});

function readURL(input) {
  if (input.files && input.files[O]) {
    let reader = new FileReader();
    reader.onload = function (e) {
      $("#register.upload-profile-image.image").attr("src", e.target.result);
    };
  }
}

// function checkPassword(form) {
//   password = form.password.value;
//   confirm_pwd = form.confirm_pwd.value;

//   if ((password = "")) alert("Please enter your password");
//   else if ((confirm_pwd = "")) alert("Please enter your confirm password");
//   else if (password != confirm_pwd) {
//     alert("Password did not match:please try again");
//     return false;
//   } else {
//     return true;
//   }
// }
