<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/newuser.css">
</head>

<body style="background-color :#F5BCA9;">
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Welcome to Earth Bank and  Your request has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
    }
    ?>

    <?php
    include 'navigation.php';
    ?>

    <h2 class="text-center pt-4" style="color : black;">Create a New User</h2>
    <br>

    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <img class="img-fluid" src="img/user.png" style="border: none; border-radius: 50%;">
                    </div>
                    <div class="screen-body-item">
                        <form class="app-form" method="post">
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                            </div>
                            <br>
                            <div class="app-form-group button">
                                <input class="app-form-button" type="submit" value="Register" name="submit"></input>
                                <input class="app-form-button" type="reset" value="Clear" name="erase"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5 py-2">
    <p>&copy 2021. Developed by <b>Anmol Gupta@</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</body>

</html>