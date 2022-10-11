<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" />
    <link rel="stylesheet" type="text/css"  href="../css/styles.css"/>
    <link rel="stylesheet" type="text/css"  href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><b>Gallery Details</b></h1>
            </div>
        </div>
  
        <div class="row mt-4">
        <?php
                require_once 'dbConn.php';

                //dbconnection and query
                $query="SELECT * FROM p_gallery";
                $query_run = mysqli_query($conn, $query);
                $check_gallery = mysqli_num_rows($query_run) > 0;

                if($check_gallery){
                    while ($row = mysqli_fetch_array ($query_run))
                    {
                        ?>
                <!--card to view image detail-->
                         <div class="col-md-3 mt-3">
                            <div class="card">
                            <img src="../img/gallery/<?php echo $row['imgFullNameGallery'];?>" width="150px" height="200px"  alt="JPKN" class="card-img-top">

                            <div class="card-body">
                                
                                    <h4 class="card-title">Title: <?php echo $row['titleGallery']; ?></h4>
                                    <h3 class="card-title"><?php echo $row['descGallery']; ?></h3>

                                    <p class="card-text">
                                        IMG Name: <?php echo $row['imgFullNameGallery']; ?>
                                    </p>

                                    <div class="text-left">
                                        <li class="dropdown">
                                            <a href="#" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">Edit</a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="updatePhoto.php?updateid=<?php echo $row['idGallery'];?>" >Update</a></li>
                                                    <li><a class="dropdown-item" href="deletePhoto.php?deleteid=<?php echo $row['idGallery'];?>" >Delete</a></li>
                                                </ul>
                                        </li>
                                    </div>

                                    <div class="text-right">
                                            <button onclick="location.href='../gallery.php'" class="btn btn-secondary btn-sm">Back</button>
                                    </div>
                            </div>
                        </div>
                    </div>

                        <?php

                       
                    }
                }
                else    {

                    echo "no image found";
                }


        ?>

       
            
        </div>
    </div>
</body>
</html>