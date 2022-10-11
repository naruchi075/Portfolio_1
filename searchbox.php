<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootsrap.min.css" rel="stylesheet" >
        <title>
                JPKN GALLERY
        </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src = "js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>
                                    search here 
                            </h4>
                        </div>
                        <div class = "card-body">
                            
                            <div class="row">
                                <div class = "col-md-7">

                                    <form action="" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                            <button type="submit" class="btn btn-primary">search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                               
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mt-12">
                        <div class = "card-body">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $con = my*sqli_connect("localhost","root","1234","db")
                                    ?>
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>           

            </div>
        </div>

        <script>src = "https://code.jquery.com/jquery-3.5.1.js"</script>
        <script>src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"</script>
        

    </body>
</html>