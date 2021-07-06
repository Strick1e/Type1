function updateClock(){
  var currentdate = new Date();
  var datetime = "Current Time: " + currentdate.getDate() + "/"
                  + (currentdate.getMonth()+1)  + "/"
                  + currentdate.getFullYear() + " @ "
                  + currentdate.getHours() + ":"
                  + currentdate.getMinutes() + ":"
                  + currentdate.getSeconds()
document.getElementById("time").innerHTML = datetime;

setTimeout(updateClock, 1000);
}
updateClock();
