<!DOCTYPE html>
<html>
<head>
<title>Linder Hue</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<h1>Linder Hue</h1>

<p>It's kinda amazing, right?</p>

<p class="response"></p>

<script>


$.ajaxSetup({
    contentType : 'application/json',
    processData : false
});
$.ajaxPrefilter( function( options, originalOptions, jqXHR ) {
    if (options.data){
        options.data=JSON.stringify(options.data);
    }
});


$.ajax({
  //url: "http://192.168.1.70/api/newdeveloper/lights/1/state",
  url: "http://192.168.1.70/api/newdeveloper/groups/0/action",
  type: "PUT",
  data: {
    "alert":"select"
  },
 // success: function( response ) {
//	$(".presponse").html(response);
   // $( "#weather-temp" ).html( "<strong>" + data + "</strong> degrees" );
 // }
});


</script>



</body>
</html>
