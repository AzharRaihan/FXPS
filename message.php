<?php 
    $name  = $_POST ['name'];
    $email  = $_POST ['email'];
    $company_name  = $_POST ['company_name'];
    $project_name  = $_POST ['project_name'];
    $tester  = $_POST ['tester'];
    $hour  = $_POST ['hour'];
    $conn = new mysqli('localhost', 'root', '', 'fxps');
    if($conn->connect_error){
        die('Connection Filed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare ("insert into tester_info(name,email,company_name,project_name,tester,hour) value(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $name, $email, $company_name, $project_name, $tester, $hour);
        $stmt->execute();
        echo "Contacted Successful";
        
        $stmt->close();
        $conn->close();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Back To Home</a>
</body>
</html>
