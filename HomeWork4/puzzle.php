<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var point = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					point++;
					break;
				}
			}
		}
		
		function checkAnswers() {
			checkAnswer("userAnswer1", ["спать ночью", "спать по ночам", "спать 8 ночей"]);
			checkAnswer("userAnswer2", ["они были на разных берегах", "были на разных берегах",
        "подошли к реке с разных сторон", "они были с разных сторон", "подошли с разных берегов", "подошли с двух разных берегов",
    "подошли с двух берегов", "подошли с 2 берегов", "подошли с 2 разных берегов"]);
			checkAnswer("userAnswer3", ["5 минут", "пять минут", "1/12 часа", "5"]);

			if (point == 3) {
	            alert("ПОЗДРАВЛЯЮ! \n\n Вы ответили правильно на все загадки!!! \n\n Восхитительно! Невероятно!");
    	    } else if (point == 0) {
            alert("К сожалению, вы не ответили ни на одну из этих дурацких загадок(");
        	} else {
            	var str = " загадок!";
            if (point == 1) {
                str = " загадку!";
            } else if (point == 2 || point == 3 || point == 4) {
                str = " загадки!";
            }
            alert("Хороший результат! \n\n Вы верно отгадали " + point + str);
            point = 0;
        }

		}

	</script>
</head>
<body>

<div class="content">
	<div class="header">
		<a href="index.html">Главная</a>
		<a href="puzzle.html">Загадки</a>
		<a href="guess.html">Угадайка</a>
		<a href="password.html">Генератор паролей</a>
	</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php>
					$point = 0;

					function checkAnswer($inputId, $answers){
						$userAnswer = $_GET[$inputId];
						$userAnswer = mb_strtolower(userAnswer);

						for($i = 0; $i < count($answers); $i++){
							if($userAnswer == $answers[i]){
								$point++;
								break;
							}
						}
					}

					function checkAnswers() {
						checkAnswer("userAnswer1", ["спать ночью", "спать по ночам", "спать 8 ночей"]);
						checkAnswer("userAnswer2", ["они были на разных берегах", "были на разных берегах",
        							"подошли к реке с разных сторон", "они были с разных сторон", "подошли с разных берегов", "подошли с двух разных берегов",
   									 "подошли с двух берегов", "подошли с 2 берегов", "подошли с 2 разных берегов"]);
						checkAnswer("userAnswer3", ["5 минут", "пять минут", "1/12 часа", "5"]);
					}

					checkAnswers();

						if ($point == 3) {
				            echo alert("ПОЗДРАВЛЯЮ! \n\n Вы ответили правильно на все загадки!!! \n\n Восхитительно! Невероятно!");
			    	    	} else if ($point == 0) {
			            	echo alert("К сожалению, вы не ответили ни на одну из этих дурацких загадок(");
			        		} else {
			            		$str = " загадок!";
			            		if (point == 1) {
			              		  	str = " загадку!";
			            			} else if ($point == 2 || $point == 3 || $point == 4) {
			             		   		$str = " загадки!";
			            			}
			           			alert("Хороший результат! \n\n Вы верно отгадали " + point + str);
			            		point = 0;
			       		}

				?>

				<form method="GET">
					<p>Как человеку не спать 8 дней?</p>
					<input type="text" named="userAnswer1">

					<p>К реке подходят два человека. У берега лодка, которая может выдержать только одного. Оба человека переправились на противоположный берег. Как?</p>
					<input type="text" name="userAnswer2">

					<p>Если пять кошек ловят пять мышей за пять минут, то сколько времени нужно одной кошке, чтобы поймать одну мышку?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; Mikhail Vystrchil
<div>


</body>
</html>