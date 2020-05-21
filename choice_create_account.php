<?php
include 'pdodb.php';
?>

<!doctype html>
<head>
<meta name="viewport" content="width=device-width,intial-scale=1.0">
<title>
</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Questrial|Raleway|Roboto|Ubuntu" rel="stylesheet"> 
<style>
body{
    font-family:Questrial;
    color:#575757;
}
.page_choice_container{

    display:grid;
    grid-template-columns:repeat(2,minmax(0,auto));
    height:auto;
    width:600px;
    margin:auto auto;
    box-shadow:-1px 1px 2px 3px #d8cdcd;
    margin-top:100px;
    justifi-items:center;
    text-align:center;
    border-radius:5px;
  


}
.page_choice_container div 
{
    padding:10px;
    
}
div div a{
    text-decoration:none;
    padding:10px;
    background-color:#cc324b;
    color:white;
    border-radius:3px;


}
.choice_student{
    border-right:1px solid #cccccc;

}
.account_user
{
    border-top:1px dotted #ededed;
   
}
.account_tutor
{
    border-top:1px dotted #ededed;

}
@media screen and (max-width:767px)
{
    .page_choice_container{
        width:auto;

    }

}
@media screen and (max-width:550px)
{
    body
    {
        background-color:#ededed;
    }
    .page_choice_container{
        grid-template-columns:repeat(1,minmax(0,auto));
        width:90%;
        background-color:white;
        margin-top:15px;
        
    }
    .choice_student{
    border-bottom:1px solid #cccccc;

}

}
</style>
<body>
<div class="page_choice_container">
<div class="choice_student">
<p style="font-size:24px;">For Students/Parents</p>
<br>
<br>
<a href="user_account.php"><ion-icon name="person-add" style="position:relative;top:-3%;left:-3%;"></ion-icon>  Create account.</a>
<br>
<br>
<br>
<div class="account_user">
<br>

<p style="color:#00688b;">Areadly have a account ?</p><br>
<br>

<a href="signin.php" style="background-color:#575757;"> Login as student/parent</a>
<br>
<br>
</div>
</div>
<div class="choice_tutor">
<p style="font-size:24px;">For Tutors</p>
<br>
<br>
<a href="tut_account.php"><ion-icon name="person" style="position:relative;top:-3%;left:-3%;"></ion-icon> Create profile.</a>
<br>
<br>
<br>
<div class="account_tutor">
<br>

<p style="color:#00688b;">Aready have a account ?</a><br><br>
<br>
<a href="tutor_login.php" style="background-color:#575757;">Login as tutor</a><br>
</div>
</div>


</div>