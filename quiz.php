<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quiz</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h1 class="titulo">Quiz Harry Potter</h1>

        <form action="quiz.php" method="get">

            <label for="name">Nome:</label>

            <input type="text" id="name" name="name" required>



            <div class="question">

                <label for="q1">1. Qual é o verdadeiro nome de Lord Voldemort?</label>

                <select id="q1" name="q1" required>

                    <option value="">Selecione...</option>

                    <option value="tomvoldemort">Tom Voldemort Riddle</option>

                    <option value="tommarvolo">Tom Marvolo (Servolo) Riddle</option>

                    <option value="tompotter">Tom Potter Marvolo</option>

                    <option value="tomlilian">Tom Lilian Voldemort</option>

                </select>

            </div>



            <div class="question">

                <label for="q2">2. O que Hagrid coloca em Duda quando ele come o bolo de Harry?</label>

                <select id="q2" name="q2" required>

                    <option value="">Selecione...</option>

                    <option value="dor">Uma dor de barriga</option>

                    <option value="orelhas">Orelhas de burro</option>

                    <option value="língua">Uma enorme língua roxa</option>

                    <option value="rabo">Um rabo de porco</option>

                </select>

            </div>

            <div class="question">

                <label for="q3">3. Qual é o nome do professor de Feitiços?</label>

                <select id="q3" name="q3" required>

                    <option value="">Selecione...</option>

                    <option value="flitwick">Filio Flitwick</option>

                    <option value="dumbledore">Alvo Dumbledore</option>

                    <option value="sprout">Pomona Sprout</option>

                    <option value="binns">Cuthbert Binns</option>

                </select>

            </div>

            <div class="question">

                <label for="q4">4. Quem é o prisioneiro de Askaban?</label>

                <input type="text" id="q4" name="q4" required>

            </div>

           

            <div class="question">

                <label for="q5">5. Qual o monstro que habitava na câmara secreta? </label>

                <input type="text" id="q5" name="q5" required>

            </div>

            <div class="question">

                <label for="q6">6. Qual é o patrono de Luna Lovegood</label>

                <input type="text" id="q6" name="q6" required>

            </div>

            <button type="submit">Enviar respostas</button>

        </form>

    </div>

</body>

</html>
