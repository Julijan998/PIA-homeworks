<?php

 if(!empty($_POST)){
 $filename = "rating.csv";
 $file_handle = fopen($filename,"a");
 if($file_handle == false){
 echo "<p> Problem sa otvaranjem fajla <p>";
 }
 else{
 $Row = $_POST;

 fputcsv($file_handle,$Row);
 echo "<script>alert('Uspesno ste glasali, Hvala sto ste ocenili film! '); window.history.back();</script>";
 fclose($file_handle);
 }
 }
 ?>