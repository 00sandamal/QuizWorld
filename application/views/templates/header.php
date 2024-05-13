<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            min-height: 100vh;
        }

        nav{
            background-color: #3c48f0;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul{
            width: 100%;
            list-style: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav li{
            height: 50px;
        }

        nav a{
            height: 100%;
            padding: 0 30px;
            text-decoration: none;
            display: flex;
            align-items: center;
            color: white;
        }

        nav li:first-child{
            margin-right: auto;
        }

        .sidebar{
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            width: 150px;
            z-index: 999;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .sidebar li{
            width: 100%;
            color: black;
        }

        .sidebar a{
            width: 100%;
            color: black;
        }

        .sidebar li:hover{
            background-color: rgb(200,200,200,0.1);
        }

        .logo{
            font-weight: bold;
            font-size: large;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="logo"><a href="<?php echo base_url()?>">QUIZ WORLD</a></li>
            <li><a href=""><span class="material-symbols-outlined">favorite</span></a></li>
            <li><a href=""><span class="material-symbols-outlined">add</span></a></li>
            <li onclick=showSidebar()><a href="#"><span class="material-symbols-outlined">account_circle</span></a></li>
        </ul>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><span class="material-symbols-outlined">close</span>Close</a></li>
            <li><a href="<?php echo base_url()?>HomeController/Login"><span class="material-symbols-outlined">login</span>Log In</a></li>
            <li><a href="<?php echo base_url()?>HomeController/Register"><span class="material-symbols-outlined">how_to_reg</span>Register</a></li>
            <li><a href=""><span class="material-symbols-outlined">logout</span>Log Out</a></li>
        </ul>
    </nav>

    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'none'
        }
    </script>
</body>
</html>