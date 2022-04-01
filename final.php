<?php
    $photoname = $_FILES['photo']['tmp_name'];
    $photolocation = "photo/".$_FILES['photo']['name'];
    move_uploaded_file($photoname, $photolocation);

    $studentname = $_POST['studentname'];
    $studenttitle = $_POST['studenttitle'];
    $studentidnumber = $_POST['studentidnumber'];
    $studentdob = $_POST['studentdob'];
    $bloodgroup = $_POST['bloodgroup'];
    $studentmobilenumber = $_POST['studentmobilenumber'];


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT ID CARD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="id_card_input_area" id="html-content-holder" >
        <h3 class="">Ekhane School Name hobe</h3>
        <h2 class="id_card_heading">ID CARD</h2>
        <?php echo "<img class='finlaphoto' src=".$photolocation." width=150 height=150>"?>
        <h2><?php echo $studentname?></h2>
        <h4><?php echo $studenttitle?></h4>

        <div class="information">
            <h3>ID NUMBER : <?php echo $studentidnumber?></h3>
            <h3>DATE OF BIRTH : <?php echo $studentdob?></h3>
            <h3>BLOOD GROUP : <?php echo $bloodgroup?></h3>
            <h3>MOBILE NUMBER : <?php echo $studentmobilenumber?></h3>
        </div>
        <div class="taderinformation">
            <p>towkir.skit@gmail.com</p>
            <p>01969663344</p>
        </div>
    </div>

    <!-- <form action="index.php">
        <input class="backbtn" type="submit" value="BACK">
    </form> -->
     <div class="back_and_download">
        <button><a href="index.php">BACK</a></button>
        <!-- <button><a href="#">Download</a></button> -->
    </div> 
    </div>
    <input id="btn-Preview-Image" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image" href="#">Download</a>
    <br/>
    <h3>Preview :</h3>
    <div id="previewImage">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script>
        $(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
	});

});


    </script>
</body>
</html>
