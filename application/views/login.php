<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.1/backbone-min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <form id="loginForm">
            <h2>Welcome to Quiz World<br>Log In</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter email...">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter password...">
            </div>
            <button id="btn" type="submit">Submit</button>
        </form>
    </div>

    <script>
        var UserModel = Backbone.Model.extend({
            urlRoot: '<?php echo base_url() ?>/UserController/Register',
        });

        // Backbone view for user registration form
        var UserLoginView = Backbone.View.extend({
            el: '#loginForm',
            events: {
                'submit': 'submitForm'
            },
            initialize: function() {
                this.model = new UserModel();
            },
            submitForm: function(event) {
                event.preventDefault();
                var formData = {};
                $(event.currentTarget).find('input').each(function() {
                    formData[$(this).attr('name')] = $(this).val();
                });
                this.model.set(formData);
                $.ajax({
                    url: '<?php echo base_url() ?>/UserController/Login',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(this.model.toJSON()),
                    success: function(response) {
                        console.log('Data saved successfully:', response);
                        var form = document.getElementById('registerForm');
                        form.reset();
                        window.location.href = '<?php echo base_url() ?>';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error saving data:', error);
                    }
                });
            }
        });

        var UserLoginView = new UserLoginView();
    </script>
</body>

</html>