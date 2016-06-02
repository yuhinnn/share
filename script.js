var Q1;
var Q2;
var Q3;
var Q4;
var Q5;
var sum;
var point = "f";
var point2 = "g";
var point3 = "h";
var point4 = "i";
var point5 = "j";
function choice(btn){

  if(btn == 1){
    Q1 = 1;
    console.log(Q1);
    document.getElementById("first").style.background = "#F4B04D";
    document.getElementById("secound").style.background = "white";
    document.getElementById("third").style.background = "white";
    point = "a";
    console.log(point);
  }  
  else if(btn == 2){
    Q1 = 2;
    console.log(Q1);
    document.getElementById("first").style.background = "white";
    document.getElementById("secound").style.background = "#F4B04D";       
    document.getElementById("third").style.background = "white";
    point = "a";
    console.log(point);
  }
  else if(btn == 3){
    Q1 = 3;
    console.log(Q1);
    document.getElementById("first").style.background = "white";
    document.getElementById("secound").style.background = "white";       
    document.getElementById("third").style.background= "#F4B04D"; 
    point = "a";
    console.log(point);
  }
}

function choice2(btn){
  if(btn == 4){
    Q2 = 1;
    console.log(Q2);
    document.getElementById("fourth").style.background = "#F4B04D";
    document.getElementById("fifth").style.background = "white";       
    document.getElementById("sixth").style.background= "white"; 
    point2 = "b";
    console.log(point2);
  }
  else if(btn == 5){
    Q2 = 2;
    console.log(Q2);
    document.getElementById("fourth").style.background = "white";
    document.getElementById("fifth").style.background = "#F4B04D";       
    document.getElementById("sixth").style.background= "white"; 
    point2 = "b";
    console.log(point2);
  }
  else if(btn == 6){
    Q2 = 3;
    console.log(Q2);
    document.getElementById("fourth").style.background = "white";
    document.getElementById("fifth").style.background = "white";       
    document.getElementById("sixth").style.background= "#F4B04D"; 
    point2 = "b";
    console.log(point2);
  }


}

function choice3(btn){

  if(btn == 7){
    Q3 = 1;
    console.log(Q3);
    document.getElementById("seventh").style.background = "#F4B04D";
    document.getElementById("eighth").style.background = "white";       
    document.getElementById("ninth").style.background = "white";
    point3 = "c";
    console.log(point3);
  }
  else if(btn == 8){
    Q3 = 2;
    console.log(Q3);
    document.getElementById("seventh").style.background = "white";
    document.getElementById("eighth").style.background = "#F4B04D";       
    document.getElementById("ninth").style.background = "white";
    point3 = "c";
    console.log(point3);
  }
  else if(btn == 9){
    Q3 = 3;
    console.log(Q3);
    document.getElementById("seventh").style.background = "white";
    document.getElementById("eighth").style.background = "white";       
    document.getElementById("ninth").style.background = "#F4B04D";
    point3 = "c";
    console.log(point3);
  }

}

function choice4(btn){

  if(btn == 10){
    Q4 = 1;
    console.log(Q4);
    document.getElementById("tenth").style.background = "#F4B04D";
    document.getElementById("eleventh").style.background = "white";       
    document.getElementById("twelfth").style.background = "white";
    point4 = "d";
    console.log(point4);
  }
  else if(btn == 11){
    Q4 = 2;
    console.log(Q4);
    document.getElementById("tenth").style.background = "white";
    document.getElementById("eleventh").style.background = "#F4B04D";       
    document.getElementById("twelfth").style.background = "white";
    point4 = "d";
    console.log(point4);
  }
  else if(btn == 12){
    Q4 = 3;
    console.log(Q4);
    document.getElementById("tenth").style.background = "white";
    document.getElementById("eleventh").style.background = "white";       
    document.getElementById("twelfth").style.background = "#F4B04D";
    point4 = "d";
    console.log(point4);
  }

}


function choice5(btn){

  if(btn == 13){
    Q5 = 1;
    console.log(Q5);
    document.getElementById("thirteenth").style.background = "#F4B04D";
    document.getElementById("fourteenth").style.background = "white";       
    document.getElementById("fifteenth").style.background = "white";
    point5 = "e";
    console.log(point5);
  }
  else if(btn == 14){
    Q5 = 2;
    console.log(Q4);
    document.getElementById("thirteenth").style.background = "white";
    document.getElementById("fourteenth").style.background = "#F4B04D";       
    document.getElementById("fifteenth").style.background = "white";
    point5 = "e";
    console.log(point5);
  }
  else if(btn == 15){
    Q5 = 3;
    console.log(Q4);
    document.getElementById("thirteenth").style.background = "white";
    document.getElementById("fourteenth").style.background = "white";       
    document.getElementById("fifteenth").style.background = "#F4B04D";
    point5 = "e";
    console.log(point5);
  }

}


function mid(){
  console.log(Q1);
}


function sendresult(){
  var  sum=Q1 + Q2 + Q3 + Q4 + Q5;
  if(sum == 5){
    location.href="result/japan.php";
  }else if(sum == 6){
    location.href="result/mongoru.php";
  }else if(sum == 7){
    location.href="result/taiwan.php";
  }else if(sum == 8){
    location.href="result/brazil.php";
  }else if(sum == 9){
    location.href="result/indo.php";
  }else if(sum == 10){
    location.href="result/greece.php";
  }else if(sum == 11){
    location.href="result/ethiopia.php";
  }else if(sum == 12){
    location.href="result/replace.php";
  }else if(sum == 13){
    location.href="result/france.php";
  }else if(sum == 14){
    location.href="result/america.php";
  }else if(sum == 15){
    location.href="result/utyujin.php";
  }


}



function checkpoint(){
  check = point + point2 + point3 + point4 + point5;
  console.log(check);
  if(check !== "abcde"){
    alert('全ての質問に回答してください!');
  }
}
