<?php
  session_start();
  if(isset($_SESSION["mulai_waktu"])){
  $telah_berlalu = time() - $_SESSION["mulai_waktu"];
  }
  else {
  $_SESSION["mulai_waktu"] = time();
  $telah_berlalu = 0;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
  <body>
    <p id="demo"></p>
    <br>
    <p id="end"></p>
    <script>
    // Mengatur waktu akhir perhitungan mundur
    var isBlock = 0;
    if(isBlock == 1){

    } else {
      var oldDateObj = new Date();
      var newDateObj = new Date();
      var limit = newDateObj.setTime(oldDateObj.getTime() + (30 * 60 * 1000)); // waktu sekarang + 30 menit

    }
   

    var countDownDate = new Date(limit).getTime();

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

      // Untuk mendapatkan tanggal dan waktu hari ini
      var now = new Date().getTime();
        
      // Temukan jarak antara sekarang dan tanggal hitung mundur
      var distance = countDownDate - now;
        
      // Perhitungan waktu untuk hari, jam, menit dan detik
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Keluarkan hasil dalam elemen dengan id = "demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
      document.getElementById("end").innerHTML = newDateObj;
        
      // Jika hitungan mundur selesai, tulis beberapa teks 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    
    </script>
  </body>
</html>

