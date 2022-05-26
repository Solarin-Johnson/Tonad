<?php
// save post data in to variable
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

// extract 
$csv_data = array_values($_POST);

// filee operation
$filepath = './userdata.csv';
// open file stream [append data]
$file_res = fopen($filepath,'a');
// save data into csv file
fputcsv($file_res, $csv_data);
// close file stream
fclose($file_res);

// remove submit colomn in $_POST array
unset($_POST['submit']);

// print submitted data
echo "<pre>";
print_r($_POST);
echo "</pre>";