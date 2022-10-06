﻿<!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 1, 2018 16:50:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for minutes and seconds

  var minutes = Math.floor((distance  % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance  % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
     clearInterval(x);
    document.getElementById("demo").innerHTML  = "Tu tiempo acabó";
  }
}, 1000);
</script>