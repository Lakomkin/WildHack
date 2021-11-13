<?php 

$user = 'q925524g_tag'; // пользователь

$password = '2091Golf'; // пароль

$db = 'q925524g_tag'; // название бд

$host = 'localhost'; // хост

$charset = 'utf8'; // кодировка

// Создаём подключение

$connect = new PDO("mysql:host=$host;dbname=$db;cahrset=$charset", $user, $password);

// Создаём запрос

$Tags = $connect -> query('SELECT * FROM Tags');

// Перебираем способом ассоциативного массива

while ($row = $Tags->fetch(PDO::FETCH_ASSOC)) {

    echo $row['TagName'];

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/cerulean/bootstrap.min.css">-->

	<script src="js/jquery-3.6.0.min.js"></script>



	<link href="css/main.css" rel="stylesheet">
</head>
<body>
    <header>
    	<div class="head-hold">
    		<div class="HeadContainer">
	    		<h1>Назавние</h1>
	    		<input type="text" placeholder="Введите текст" style="color:white;">
	    		<div class="settings">
	    			<img src="img/grid.svg" alt="" onclick="TurnToGrid();">
	    			<hr noshade width="3" size="40">
	    			<img src="img/roll.svg" alt="" onclick="TurnToRoll();">
	    		</div>
    		</div>
    	</div>
    </header>

    <!--_________Modal_________-->
	<div id="myModal" class="modal" style="z-index: 9999;">

	  <!-- Модальное содержание -->
	  <div class="modal-content">
	    <span class="close">&times;</span>
	    <div class="ModalHolder">
	    	<img src="img/LeftArrow.svg" alt="" class="arrow" id="LeftArrow">
	    	<img src="img/RightArrow.svg" alt="" class="arrow" id="RightArrow">
	    	<img src="img/CardBg.png" alt="">
	    	<h3>Тэги</h3>
	    	<p>

            # Хэштэг # Хэштэг # Хэштэг # Хэштэг # Хэштэг # Хэштэг
            </p>
	    	<h3>Описание</h3>
	    	<p style="padding-bottom: 60px;">Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные задания по разработке ...</p>
	    </div>
	  </div>

	</div>
    <!--_________Modal_________-->

    <section id="tags">
      	<h1>Актуальные тэги</h1>
      	<div class="TagsHolder">

	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="selected">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a><br>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
	      	<a href="" class="">#Хэштэг</a>
      	</div>
    </section>

    <section id="cards" class="roll">
    	<div class="container" style="position: relative;z-index: 4;">

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" alt="" onclick="OpenModal();">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>
		</div>

    	<div class="container" style="position: relative;z-index: 3;">

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>
		</div>

    	<div class="container" style="position: relative;z-index: 2;">

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>

    		<div class="Card">
    			<div class="stopper">
    				<img src="img/CardBg.png" class="CardImage" alt="">
    				<h3>Тэги</h3>
    				<p class="CardTags">
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
			      		<a href="" class=""># Хэштэг</a>
    				</p>
    				<h3>Описание</h3>
    				<p class="CardDescription">
    				Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь позволяет выполнить важные 	задания по разработке ...
    				</p>
    			</div>
    		</div>
		</div>
    </section>

    <footer style="padding-top: 200px;background-color: #438EFF;margin-top: 100px;">
    </footer>

	<script>
		var modal = document.getElementById("myModal");
		var span = document.getElementsByClassName("close")[0];


		function OpenModal() {
		  modal.style.display = "block";
		}

		span.onclick = function() {
		  modal.style.display = "none";
		}

		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}

		function TurnToRoll() {
			$("section#cards").removeClass("grid").addClass("roll");

		}
		function TurnToGrid() {
			$("section#cards").removeClass("roll").addClass("grid");
		}
		$(function(){
		  if ( $(window).width() < 540 ) {
		  	$("section#cards").removeClass("grid").addClass("roll");
		  }
		});
	</script>
</body>
</html>

