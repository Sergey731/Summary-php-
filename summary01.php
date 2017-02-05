<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Резюме</title>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body> 
    <?php
     $first_name = "Иван";
     $middle_name = "Иванович";
     $last_name = "Иванов";         
     $biogfaphy = "Краткая биография:";           
     $full_name = $first_name ." ". $middle_name ." ". $last_name; 
     echo "<h1>$full_name</h1>";  
     echo "<h3>$biogfaphy</h3>"; 
    ?>    
    <p>Родился 10 января 1975 г. в деревне Клюевка Сысертского района Свердловской области. В 1993 г. закончил среднюю школу. 1995 - 1997 г.г. - служба в рядах ВС России. Образование - высшее  строительное. Женат, двое детей.
    </p>
    <h3>Предыдущие места работы:</h3>
    <ol> 
    <?php             
      $f = "summary_works.txt";
      $work_places = file($f);
      $number_of_jobs = count($work_places);
      for ($i = 0; $i < $number_of_jobs; $i++) {
          echo "<li>$work_places[$i]</li>";        
      }   
    ?> 
    </ol>       
</body>
</html>
