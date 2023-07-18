<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-grid.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="lib/jquery-3.7.0.min.js"></script>
	<title>open ai | php testing</title>
</head>
<body>
<center>
<h1>Chat GPT API Form</h1>
<label>Enter Query here...</label><br>
<textarea name="query" id="query" class="form-control" cols="50" rows="10" placeholder="who am i"></textarea><br>
<button name="baction" id="baction" style="padding: 10px; margin: 4px; font-size: 16; font-weight: bold; color: #fff; background-color: #ccc;" class="btn btn-primary">Send</button>
</center>
<p>
<div style="margin: auto; padding: 10px 20px; background-color: #ccc; width:90%;">
    <h2>Result:</h2>
    <div id="result"></div>
</div>
</p>
<script type="text/javascript">
$("#baction").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: { 
            query: $("#query").val()
        },
        success: function(result) {
            $("#result").text(result);
            console.log(result);
        },
        error: function(result) {
            $("#result").text(result);
        }
    });
});
</script>
</body>
</html>