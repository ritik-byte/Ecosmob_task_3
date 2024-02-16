
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#submit").click(function(){
    var name = $("#name").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
    var Age =$("#Age").val();
    var dataString = 'name='+ name +'&Age='+ Age + '&mobile='+ mobile + '&email='+ email;
    $.ajax({
      type: "POST",
      url: "process.php",
      data: dataString,
      success: function(result){
        alert(result);
      }
    });
    return false;
  });
});
</script>
</head>
<body>
<form>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br><br><br>
  <label for="Age">Age:</label><br>
  <input type="number" id="Age" name="Age"><br><br><br>
  <label for="mobile">Mobile:</label><br>
  <input type="text" id="mobile" name="mobile"><br><br><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br><br>
  <button type="button" id="submit">Submit</button>
</form>
</body>
</html>
