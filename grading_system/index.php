<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Grading System</h1>
    <form method="get" action="index.php">
        <label class="label">Students Name : </label><br>
        <input type="text" name="students" class="grade"><br>
        <label class="label">FILIPINO : </label><br>
        <input type="number" name="filipino" class="grade"><br>
        <label class="label">ENGLISH : </label><br>
        <input type="number" name="english" class="grade"><br>
        <label class="label">MATHEMATICS: </label><br>
        <input type="number" name="math" class="grade"><br>
        <label class="label">SCIENCE : </label><br>
        <input type="number" name="science" class="grade"><br>
        <label class="label">A.P. : </label><br>
        <input type="number" name="ap" class="grade"><br>
        <label class="label">MAPEH : </label><br>
        <input type="number" name="mapeh" class="grade"><br>
        <input type="submit" name="submit" class="btn"/>
<div class="forms">
<?php
    
    
   
    function total(){
        if(isset($_GET['submit'])){

        $students = $_GET["students"];
        $filipino = $_GET["filipino"];
        $eng = $_GET["english"];
        $math = $_GET["math"];
        $science = $_GET["science"];
        $ap = $_GET["ap"];
        $mapeh = $_GET["mapeh"];
        $div = 6;
        $grades = ($filipino + $eng + $math + $science + $ap + $mapeh)/$div;
            
                if($grades >= 95 && $grades != 100){
                    echo "Name : " . $students . " Average : " . $grades . " " . " With Higesht Honor";
                }
                else if($grades >= 90 && $grades != 95){
                    echo "Name : " . $students . " Average : " . $grades . " " . " With High Honor";
                }
                else if($grades >= 85 && $grades != 90){
                    echo "Name : " . $students . " Average : " . $grades . " " .  " With Honor";
                }
                else if($grades >= 75 && $grades != 85){
                    echo "Name : " . $students . " Average : " . $grades . " " . "You Pass";
                }
                else{
                    echo "Name : " . $students . " Average : " . $grades . " " . " YOU FAILED";
                }
            }
    }


    
  
       

    
     total();
     

     
        
            
    ?>
    
</div>
    
</form>
    </div>

</body>
</html>