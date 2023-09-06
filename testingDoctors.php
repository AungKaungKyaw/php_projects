<?php

$doctors = array(
    "Dr. John Smith" => array("Heart Health", "General Health"),
    "Dr. Sarah Johnson" => array("Child Health", "Allergies", "Emergency Care"),
    "Dr. Christ Brown" => array("Bone Health", "Sports Injuries"),
    "Dr. Emily Davis" => array("Women's Health", "High-Risk Pregnancies"),
    "Dr. Michael Wilson" => array("Cancer Care", "Blood Disorders"),
    "Dr. Susan Lee" => array("Skin Health", "Cosmetic Procedures"),
    "Dr. Jordan Smith" => array("Heart Health", "General Health"),
    "Dr. Taylor Swift" => array("Brain Health", "Mental Health"),
    "Dr. Jennifer Lawrence" => array("Family Medicine", "Elderly Care"),
    "Dr. Lisa Anderson" => array("Eye Care", "Retinal Issues", "Glaucoma"),
    "Dr. Ricardo Milos" => array("Brain Health", "Mental Health"),
    "Dr. James Robinson" => array("Digestive Health", "Liver Care")
);

// Accessing the specialties of a specific doctor
$doctor_key = array_keys($doctors);
//echo $doctor_key[0] . "<br>";
$doctorName = $doctor_key[0];
$specialties = $doctors[$doctorName];
//echo "$doctorName specializes in: " . implode(", ", $specialties);

function general_health($health_issue){
    global $doctors;
    foreach($doctors as $key=>$values){
        if(in_array($health_issue, $values)){
            echo $key. "<br>";
        }
    }
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["select_issues"])){
        $selected_issues = $_POST["select_issues"];
        switch ($selected_issues){
            case "general_health":
                echo "<br><h2>"."General Health"."</h2><br>";
                general_health("General Health");
                break;
            case "brain":
                echo "<br><h2>"."General Health"."</h2><br>";
                general_health("Brain Health");
                break;
            case "eyes":
                echo "<br><h2>"."General Health"."</h2><br>";
                general_health("Eye care");
                break;
            case "external":
                echo "<br><h2>"."General Health"."</h2><br>";
                general_health("Skin Health");
                general_health("Allergies");
                break;
            case "internal":
                echo "<br><h2>"."General Health"."</h2><br>";
                general_health("Cancer Care");
                general_health("Digestive Health");
                break;
            case "Bone":
                echo "<br><h2>"."General Health"."</h2><br>";
                general_health("Bone Health");
                break;
            case "child_health":
                echo "<br><h2>"."General Health"."</h2><br>";
                general_health("Child Health");
                break;
            default:
                echo "something want is wrong";

        }

    }
}




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form method="post">
                <select class="form-select custom-select" name="select_issues" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="general_health">General Health</option>
                    <option value="brain">Brain</option>
                    <option value="eyes">Eyes</option>
                    <option value="external">External</option>
                    <option value="internal">Internal</option>
                    <option value="bone">Bone</option>
                    <option value="child_health">Child Health</option>
                </select>
                <input type="submit" value="submit">
            </form>

        </div>
    </div>
</div>



<script src="js/bootstrap.min.js"></script>

</body>
</html>
