<?php
    include("connection.php");

?>
  
  <html>
    <head>
        <meta charset="utf-8">
        <title>Project</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
    <!-- Container -->

        <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="https://www.brainydx.com/">BrainyDx</a>

        </div>
        <ul class="nav navbar-nav">
            <li><a href="Bootstrap_solution_main.html">Landing Page</a></li>
        </ul>

        </nav>


        <div class="container">
        <div class="jumbotron">
            <h1>Log In!</h1>
            <p>Enter your email and password!</p>
        </div>

        </div>

        <div class="container">

<!-- Forms -->

        <form class="form-group">
        <label for="nm">Name:</label>
        <input type="text", name= "studentname" class="form-control" placeholder="Name" required>

        <label for="rn">Roll No.:</label>
        <input type="text", name= "rollno" class="form-control" placeholder="Roll No." required>
 
        <label for="br">Branch:</label>
        <input type="text", name= "branch" class="form-control" placeholder="Branch" required>

        <label for="sm">Semester:</label>
        <input type="text", name= "Sem" class="form-control" placeholder="Sem" required>

        <label for="mn">Mobile No.:</label>
        <input type="text", name= "mob" class="form-control" placeholder="Mobile No." required>

        <div class="checkbox">
            <label for="usercheck">
                <input type="checkbox" name="usercheck" value="">

            Keep Me Logged In</label>

        </div>

        <button type="submit" class="btn btn-default" name="button">Submit</button>

        </form>


        </div>
        <?php
            // if ($_GET['submit'])
            //  {
                $nm = $_GET['studentname'];
                $rn = $_GET['rollno'];
                $br = $_GET['branch'];
                $sm = $_GET['Sem'];
                $mn = $_GET['mob'];

                // if($nm!="" && $rn!="" && $br!="" && $sm!="" && $mn!="")
                // {
                    $query ="INSERT INTO STUDENT VALUE ('$nm','$rn','$br' '$sem','$mn')";
                    $data=mysqli_query($conn,$query);

            //         if($data){
            //         echo"Data inserted into database";

            //         }
            //     }
            //     else
            //     {
            //         echo "All fields are required";
            //     }

            // }



        ?>

    
    </body>

</html>    