<?php include 'templates/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

        .card-container {
            display: flex;
            justify-content: center;
        }

        .card {
            width: 325px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card-description {
            margin-bottom: 15px;
        }

        .card-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }


        .card-button a {
            text-align: center;
        }

        .card-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="card-container">
        <div class="card-container">
            <?php foreach ($quizzes as $row) : ?>
                <div class="card">
                    <img src="assets\logocard.png" alt="Card Image">
                    <div class="card-content">
                        <h3 class="card-title"><?php echo $row->title; ?></h3>
                        <a href="<?php echo base_url()?>HomeController/playQuiz/<?php echo $row->quizId; ?>" class="card-button">PLAY</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>