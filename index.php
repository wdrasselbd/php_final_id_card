<?php 
error_reporting(0);
$filename      = $_FILES['img'] ['tmp_name'];
$filelocation  = "photo/".$_FILES['img'] ['name'];

move_uploaded_file ($filename, $filelocation);


?>

<?php 

$fname         = $_POST ['fname'];
$profession    = $_POST ['profession'];
$id            = $_POST ['id'];
$number        = $_POST ['number'];
$email         = $_POST ['email'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>id card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-md-6 idfrom pt-5">
                <form class="row g-3 mt-5" method="POST" enctype="multipart/form-data">

                    <div class="col-md-4">

                        <input type="file" class="form-control" id="validationDefault01" name="img">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Full Name"
                            name="fname" required>
                    </div>
                    <div class="col-md-4">

                        <input type="text" class="form-control" id="validationDefault02" value=""
                            placeholder="Profession" name="profession" required>
                    </div>

                    <div class="col-md-4">

                        <input type="text" class="form-control" id="validationDefault02" value="" placeholder="ID"
                            name="id" required>
                    </div>

                    <div class="col-md-4">

                        <input type="email" class="form-control" id="validationDefault02" value="" placeholder="email"
                            name="email" required>
                    </div>

                    <div class="col-md-4">

                        <input type="text" class="form-control" id="validationDefault02" value="" placeholder="number"
                            name="number" required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4  border border-danger idcard mx-auto pt-5 pb-5 text-left">
                <div class="autdiv mx-auto">
                <?php echo "<img src=".$filelocation."  />"; ?>
                <h2 class="mt-2"> Name: <span><?php echo $fname ?></span> </h2>
                <h5 class="profession">Profession: <span><?php echo $profession  ?></span> </h5>
                <h6 class="id">ID: <span><?php echo $id ?></span> </h6>
                <h6>Number: <span><?php echo $number ?></span> </h6>
                <h6>Email: <span><?php echo $email ?></span> </h6>
                </div>
            </div>
        </div>
    </div>



</body>

</html>