    <?php include 'templates/header.php' ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Play Quiz</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
                font-family: sans-serif;
            }

            body {
                background-color: #f0f0f0;
                align-items: center;
            }
        </style>
    </head>

    <body>
        <?php $score = 0; ?>
        <?php $array1 = array(); ?>
        <?php $array2 = array(); ?>
        <?php $array3 = array(); ?>
        <?php $array4 = array(); ?>
        <?php $array5 = array(); ?>
        <?php $array6 = array(); ?>
        <?php $array7 = array(); ?>
        <?php $array8 = array(); ?>

        <?php foreach ($answers as $answer) { ?>
            <?php array_push($array1, $answer); }?>

        <?php foreach ($results as $result) { ?>
        <?php array_push($array2, $result->answer);
            array_push($array3, $result->questionId);
            array_push($array4, $result->question);
            array_push($array5, $result->choice1);
            array_push($array6, $result->choice2);
            array_push($array7, $result->choice3);
            array_push($array8, $result->answer);
        } ?>
        <form id="quizForm" method="post" action="<?php echo base_url() ?>/QuizController/resultDisplay">
            <?php for ($x = 0; $x < 5; $x++) { ?>
                <br>
                <p><?php echo $array4[$x]; ?></p>

                <?php if ($array2[$x] != $array1[$x]) { ?>
                    <p><span style="background-color: #FF9C9E;"><?php echo $array1[$x] ?></span></p>
                    <p><span style="background-color: #ADFFB4;"><?php echo $array2[$x] ?></span></p>
                <?php } else { ?>
                    <p><span style="background-color: #ADFFB4;"><?php echo $array1[$x] ?></span></p>
                    <?php $score = $score+1; ?>
                <?php } ?>
            <?php } ?>

            <br>
            <h2>Your Score:</h2>
            <h1><?php echo $score; ?> Out of 5</h1><br>
            <h4><a href="<?php echo base_url()?>">Click here</a> to go to home.</h4>
        </form>

    </body>

    </html>