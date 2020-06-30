$(document).ready(function () {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var date = document.getElementById("date");
  var mob_number = document.getElementById("mob_number");
  var reference = document.getElementById("reference");
  var message = document.getElementById("message");
  $("#book").click(function () {
    if (name === "") {
      $("#name-error").html("Please enter Your full name");
      return false;
    }
    if (email === "") {
      $("#email-error").html("Please enter Your validd email");
      return false;
    }
    if (date === "") {
      $("#date-error").html("Please select date");
      return false;
    }
    if (mob_number === "") {
      $("#mob_number-error").html("Please enter Your mobile number");
      return false;
    }
    if (reference === "") {
      $("#reference-error").html("Please provide reference");
      return false;
    }
    if (message === "") {
      $("#message-error").html("Please enter message");
      return false;
    }
  });
});
