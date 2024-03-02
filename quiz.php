<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultado do Quiz</title>

    <link rel="stylesheet" href="stylephp.css">

</head>

<body>

    <div class="container">

        <h2>Resultado do Quiz</h2>

        <?php

        if (isset($_GET['name']) && isset($_GET['q1']) && isset($_GET['q2']) && isset($_GET['q3']) && isset($_GET['q4']) && isset($_GET['q5']) && isset($_GET['q6'])) {

            $name = $_GET['name'];

            $score = 0;





            $answers = array(

                'tommarvolo',

                'rabo',

                'flitwick',

                'sirius',

                'basilisco',

                'Lebre'

            );





            $user_answers = array(

                $_GET['q1'],

                $_GET['q2'],

                $_GET['q3'],

                $_GET['q4'],

                $_GET['q5'],

                $_GET['q6']

            );





            for ($i = 0; $i < count($answers); $i++) {



                $s1 = strtoupper($answers[$i]);

                $s2 = strtoupper($user_answers[$i]);

               

               /*echo $s1 . "   = ". $s2.'<br />'; */



                if ($s1 == $s2) {

                   

                    $score++;

                }

            }

           



            echo "<p>$name, você acertou $score de 6 perguntas.</p>";

        } else {

            echo "<p>Por favor, preencha todas as perguntas do quiz.</p>";

        }



   



        ?>

       

        <a href="quiz.html" class="btn">Voltar ao Quiz</a>

    </div>



</body>

</html>
