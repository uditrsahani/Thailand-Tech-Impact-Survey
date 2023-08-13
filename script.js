//Variables
let name = document.getElementById('name');
let age = document.getElementById('age');
let province = document.getElementById('province');
let gender = document.getElementsByClassName('gender');
let question1 = document.getElementById('question1');
let question2 = document.getElementById('question2');
let question3 = document.getElementById('question3');
let question4 = document.getElementById('question4');
let question5 = document.getElementById('question5');
let question5Input = document.getElementById('question5Input');
let question5Flag = false;
let submitBtn = document.getElementById('submitBtn');


//Personal information validation
submitBtn.addEventListener('click', function(){
if(name.value == ""){
  alert('Please enter your name');
} else if(age.value == ""){
  alert('Please enter your age');
} else if(province.value==""){
  alert('Please enter your province');
}

//questions validation
if(question1.value=="select"){
  alert("Please answer question 1.");
}else if(question2.value=="select"){
  alert("Please answer question 2.");
}else if(question3.value=="select"){
  alert("Please answer question 3.");
}else if(question4.value=="select"){
  alert("Please answer question 4.");
}else if(question5.value == "select"){
  alert("Please answer question 5.");
}else if(question5Flag == true && question5Input.value==""){
  alert("Please answer question 5.");
  question5Input.required = true;

}

});

//question 5 special validation
function otherFunction(){
  question5Input.classList.remove('hide');
  question5Input.classList.add('show');
  question5Flag = true;
}

function hideInput(){
  question5Input.classList.remove('show');
  question5Input.classList.add('hide');
  question5Flag = false;
}