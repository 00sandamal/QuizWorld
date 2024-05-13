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
    <form id="quizForm" method="post" action="<?php echo base_url() ?>/QuizController/resultDisplay">

        <?php foreach ($questions as $question) : ?>

            <?php $choices = [$question->choice1, $question->choice2, $question->choice3, $question->answer];
            shuffle($choices); ?>

            <br>
            <p><?php echo $question->question; ?></p>

            <input type="radio" name="questionId<?php echo $question->questionId ?>" value="<?php echo $choices[0] ?>" required><?php echo $choices[0] ?><br>
            <input type="radio" name="questionId<?php echo $question->questionId ?>" value="<?php echo $choices[1] ?>"><?php echo $choices[1] ?><br>
            <input type="radio" name="questionId<?php echo $question->questionId ?>" value="<?php echo $choices[2] ?>"><?php echo $choices[2] ?><br>
            <input type="radio" name="questionId<?php echo $question->questionId ?>" value="<?php echo $choices[3] ?>"><?php echo $choices[3] ?><br>


        <?php endforeach; ?>

        <br>
        <button type="submit">Submit Answers</button>
    </form>

</body>

</html>