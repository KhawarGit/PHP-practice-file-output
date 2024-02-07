<?php
    $qualification=$_POST['EduQual'];
    $specialization=$_POST['spec'];
    $cgpa=$_POST['cgpa'];
    $PassingYr=$_POST['Yr'];
    $University=$_POST['uni'];
    $Country=$_POST['country'];

    $data = "Qualifications: $qualification\nspecialization: $specialization\nCGPA: $cgpa\nYear Of Passing: $PassingYr\nUniversity: $University\nCountry: $Country\n***********************************************************************\n";
    $file = "./data.txt";
    
    file_put_contents($file, $data, FILE_APPEND);
    echo "<h5>The data has been added successfully.</h5>";
?>
