<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{

	background-color: 
}
div {
  width: 470px;
    padding: 10px;
    border: 5px solid gray;
    margin: auto;
    text-align: center;

}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
</head>
<body>
 <form action="ss2.php" method="post" enctype="multipart/form-data">
<div>
<img src="optical_illusion_2.jpg" style="width: 450px; height: 450px;" alt="Klematis">
<h1>ในนี้คุณเห็นม้ากี่ตัว</h1>

<input id="latitude" name="latitude" type="text" />
<input id="longitude" name="longitude" type="text" />

 <br><input type="submit" id="submit" name="submit"  class="button" value="5ตัว"/>
  <input type="submit" id="submit" name="submit"  class="button" value="8ตัว"/>
  </div>
      </form>
</body>
<script>
    function getLocation()
    {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(showPosition);
        }
    }

    function showPosition(position)
    {
        document.getElementById("latitude").value = position.coords.latitude; 
        document.getElementById("longitude").value = position.coords.longitude; 
    }
    getLocation();

</script>
</html>
