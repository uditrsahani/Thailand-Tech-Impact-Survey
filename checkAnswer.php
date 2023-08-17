<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "databaseName";
$name = $_POST['name'];
$age = $_POST['age'];
$province = $_POST['province'];
$email = $_POST['email'];


//create connection
$conn = mysqli_connect($servername,$username ,$password, $database);

//die if connection was not successful
if(!$conn){
   die("Sorry we failed to connect: ". mysqli_connect_erro());
}else{
   // echo "Connection was successful <br>";
   echo "<br>";echo "<br>";
}

$sql = "SELECT * FROM `surverytable` WHERE name = '" . $name . "' AND age = '" . $age . "' AND province = '" . $province . "'";
$result = mysqli_query($conn, $sql);


//find the number of records returned
$num = mysqli_num_rows($result);


//Diplay the rows returned by sql query

if($num > 0){
while($row = mysqli_fetch_assoc($result)){
   // echo var_dump($row);
   echo "Hello ". $row['name']. ", here are your anwers: ";
   echo "<br>";
   echo "<br>";
   echo "Question 1. How frequently do you use digital platforms (websites, apps, social media) for shopping or accessing services instead of visiting traditional markets or local businesses? ";
   echo "<br>";
   echo "Your answer: " . $row['question1'];
   echo "<br>";
   echo "<br>";

   echo "Question 2. What factors influence your decision to use digital platforms over traditional markets or local businesses? ";
   echo "<br>";
   echo "Your answer: " . $row['question2'];
   echo "<br>";
   echo "<br>";

   echo "Question 3. In your opinion, how has the growth of digital technology affected traditional markets and local businesses in Thailand? ";
   echo "<br>";
   echo "Your answer: " . $row['question3'];
   echo "<br>";
   echo "<br>";

   echo "Question 4. Have you noticed any efforts by traditional markets or local businesses to adapt to the digital age, such as creating online stores or utilizing social media for promotion? ";
   echo "<br>";
   echo "Your answer: " . $row['question4'];
   echo "<br>";
   echo "<br>";

   echo "Question 5. If you could suggest one way for traditional markets or local businesses to thrive in the digital era, what would it be? ";
   echo "<br>";
   echo "Your answer: " . $row['question5'];
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<a href='/'>Goto Homepage </a>" ;
   echo " or ";
   echo "<a href='/checkAnswer.html'>Check your answers</a>" ;
   
}


}else{
   echo "No record found! Please enter your details correctly.";
   echo "<a href='/surveyForm'>Goto Homepage </a>" ;
   echo " or ";
   echo "<a href='/surveyForm/checkAnswer.html'>Check your answers again</a>" ;
}
?>