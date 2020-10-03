<!DOCTYPE html>
<html>
<head>
    <title>Problem 13</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        a{
            text-decoration: none;
        }
        h4,form,div{
            text-align: center;
        }
        img{
            width: 100%;
            height: 200px;
            margin: 2px;
            border: 2px solid black;
            overflow: hidden;
        }
    </style>
    
</head>
<body>
    <h4>here use bootstrap for easy design</h4>
    <h4>Problem 13: Develop an image gallery which can show the image and also upload the image with the title</h4>
    <div class="container">
        <?php
            $directory = "images/";
            $idx = 2;
            $str = 0;
            $photoes = scandir($directory);
            $len = count($photoes) - $idx;
            if($len!=0) echo "<br><h1>Gallery Images</h1><br>";
        ?>
        <div class="row">
            <?php
                for($i=0;$i<$len;$i++) echo "<div class=\"col-sm-4\"> <img src=\"images/" . $photoes[$i+$idx] . "\"></div>";
            ?>
        </div>
    </div>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <br><br>
        <label>Please upload Your Photo: </label>
        <input type="file" name="image" id="image"><br><br>
        <input type="submit" name="submit">
    </form>    
    <div>
    <?php
        if(isset($_REQUEST["submit"])){
            $file_name = basename($_FILES["image"]["name"]); 
            $extention = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); 
            if($extention == "jpg" || $extention == "jpeg" || $extention == "png" || $extention == "gif") {

                $directory = "images/" . $file_name; 
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $directory)) {
                    echo "The Photo has been uploaded, Thanks";
                    
                    // ata 3 sec por auto reload dibe page
                    $url1=$_SERVER['REQUEST_URI'];
                    header("Refresh: 3; URL=$url1");
                    exit;
                }
            } 
            else echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    ?>
    </div>
</body>
</html>