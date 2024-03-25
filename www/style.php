<?php
/*** set the content type header ***/
/*** Without this header, it wont work **/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?> 

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin:0;
    padding: 0;
    font-family: "Poppins", sans-serif;
}
body{
    height: 100vh;
}

header{
    background-color: rgb(255, 255, 255);
    height: 7%;
}

h1{
    color: rgb(255, 170, 0);
}
p{
    color: rgb(255, 170, 0);
}
main{
    height: 120vh;
    background-color: rgb(255, 245, 207);
    display: flex;
    align-items: center;
    flex-direction: column;
}

ul{
    list-style-type: none;
    display: flex;
    justify-content: center;
    justify-content: space-around;
    align-items: center;
}

footer{
    padding-top: 30px;
    display: flex;
    justify-content: center;
}

form{
    width: 40%;
    display: flex;
    align-items: center;
    flex-direction: column;
    border: 2px solid rgb(255, 170, 0);
    border-radius: 10px;
}

.p-Top{
    padding-top: 20px;
}
.p-Top-Bot{
    padding-top: 20px;
    padding-bottom: 20px;
}

a{
    font-size: 30px;
}

.prout{
    display: flex;
    justify-content: space-around;
}

.menu{
    display: flex;
    flex-direction: column;
}

.recette{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-top: 20px;
}

.photorecette{
    width: 400px;
    height: 300px;
}

.icone{
    width: 40px;
    height: 45px;
}