<?php
require_once ("./Employee.php");
require_once ("./Company.php");
$GCES= new Company;
$GCES->name = "Gandaki College of Engineering and Science";
$GCES->address = "Lamachour, Pokhara";
array_push ($GCES->employees , 
    new Employee("Yekin" , "Chorepatan"),
    new Employee("Ramesh Bho" , "Kathmandu"),
    new Employee("Kaju Nepali" , "Gulmi")
);
//var_dump($GCES);
?>

<!DOCTYPE html>
<head>
    <title>LAB 6</title>
</head>
<body>
    <div class="content">
        <h1><?= $GCES->name ?></h1>
        <h3>Company : </h3>
        <p><?= $GCES->name ?></p>
    
        <h3>Company Address: </h3>
        <p><?= $GCES->address ?></p>


    <table border="1px" >
        <thead>
            <th>Name</th>
            <th>Address</th>
        </thead>
        
        <tbody>
        <?php
            foreach ($GCES->employees as $employee )  {
        ?>
            <tr>
                <td> <?=$employee->name ?></td>
                <td> <?=$employee->address ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>