<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Two</title>

        <style>
            body{background-color:#d5d5d5}
            .container{width: 700px;margin:20px auto;background-color:#0022}
            .form-header h2 {
            text-align: center;
            font-size: 35px;
            text-transform: capitalize;
            margin-bottom: 15px;
            }

            .form-header {
                overflow: hidden;
            }
            .form-group label {
                font-size: 20px;
                font-weight: 700;
            }
            .form-container, .table-container {
                margin-left: 30px;
            }
            input#name, input#email, input#phone {
                width: 70%;
                padding: 10px;
                outline: none;
                border-radius: 5px;
            }
            .submit-btn{
                font-size: 16px;
                text-transform: uppercase;
                padding: 10px 15px;
                margin-top: 10px;
                border-radius: 25px;
                cursor: pointer;
            }
            table {
                width: 95%;
                padding-bottom: 25px;
                text-align: center;
            }

            th {
                background-color: darkcyan;
                color: #fff;
                font-size: 18px;
            }
            tr:nth-child(even) {
                background-color: #D6EEEE;
            }
        </style>

    </head>
    <body>
   
        <div class="container">
            <!--Student information form-->
            <div class="form-header">
                <h2>Student Information</h2>
            </div>

            <div class="form-container">

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="name">Name:</label><br>
                        <input type="text" name="name" id="name" required><br><br>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" id="email" required><br><br>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone:</label><br>
                        <input type="phone" name="phone" id="phone" required><br><br>
                    </div>

                    <input class="submit-btn" type="submit" value="submit">
                </form>
            </div>

           

            <!--Form output Table-->
            <div class="form-header">
                <h2>Student Submitted Information</h2>
            </div>

            <div class="table-container">
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td> <?php echo $_POST['name']; ?></td>
                                <td> <?php echo $_POST['email']; ?></td>
                                <td> <?php echo $_POST['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Hasib</td>
                                <td>hasib@gmail.com</td>
                                <td>01715000123</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>

    </body>
</html>