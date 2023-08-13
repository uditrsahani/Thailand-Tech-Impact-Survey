<?php
$name = $_POST['name'];
$age = $_POST['age'];
$province = $_POST['province'];
$gender = $_POST['gender'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question5_1 = $_POST['question5_input'];


/*Database connection*/
$conn = new mysqli('localhost', 'root', '', 'surveyform');
if($conn->connect_error){
  die('Connection Failed: '. $conn -> connect_error); 
}else{
  $stmt = $conn ->prepare("insert into surverytable(name, age, gender, province, question1, question2, question3, question4, question5) values(?,?,?,?,?,?,?,?,?)");
  if($question5 == 'other'){
    $question5 = $question5_1;
  }
  $stmt->bind_param("sssssssss", $name, $age, $gender, $province, $question1, $question2, $question3, $question4, $question5);
  $stmt->execute();
  echo "Your answers are stored. Thank you for taking the survery!.". $question5;
  $stmt -> close();
  $conn -> close();
}
?>