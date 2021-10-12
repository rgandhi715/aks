<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>File Handling</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>My File Handling Project</h1>
        <p>Resize this responsive page to see the effect!</p> 
    </div>
<form method="post" action="">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6">
                <textarea readonly class="" style="width: 90%; height: 300px;">
                    <?php 
                        if(isset($_POST['submit']))
                        {
                            $myfile = fopen("/var/www/html/tmp/volume.txt", "r") or die("Unable to open file!");
                            echo fread($myfile, filesize("./tmp/volume.txt"));
                            fclose($myfile);
                        }
                    ?>
                </textarea>
            </div>
            <div class="col-sm-6">
                <textarea type="text" name="write" value="" style="width: 90%; height: 300px; text-align: left;">
                    <?php
                        if(isset($_POST['submit1']))
                        {
                            $text = $_POST['write'];
                            $fp = fopen("/var/www/html/tmp/volume.txt", "a+") or die("Unable to open file!");
                            fwrite($fp,"\n".$text);
                            fclose($fp);                                                             
                        }
                    ?>
                </textarea>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6">
                <input class="btn btn-primary" type="submit" name="submit" value="Read File"/>
            </div>
            <div class="col-sm-6">
                <input class="btn btn-primary" type="submit" name="submit1" value="Write File"/>
            </div>
        </div>
    </div>
</form>
</body>