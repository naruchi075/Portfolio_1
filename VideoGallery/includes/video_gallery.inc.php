<?php
                include_once 'dbConn.php';

                session_start();

                if(isset($_POST['upload'])) {
                    //$name = $_FILES['file']; // show and catch code execution in browser/live server
                    //echo"<pre>";
                    //print_r($file_name);
                    //exit();
                    
                    //form input
                    $videoTitle = $_POST['filetitle'];
                    $videoDesc = $_POST['filedesc'];
                    
                    //file import to folder
                    $file_name = $_FILES['file']['name'];
                    $file_type = $_FILES['file']['type'];
                    $temp_name = $_FILES['file']['tmp_name'];
                    $file_size = $_FILES['file']['size'];
                    $error = $_FILES['file']['error'];
                    
                    //message
                    //$_SESSION['message'] = "Video has been saved...";
                    //$_SESSION['msg_type'] = "Success";

                     //check file path and filter video format and name
                     if ($error === 0){
                        $video_ex = pathinfo($file_name, PATHINFO_EXTENSION);

                        $video_ex_lc = strtolower($video_ex);

                        $allowed_exs = array("mp4","webm","avi","flv");

                        if(in_array($video_ex_lc, $allowed_exs)) {
                            $new_video_name = uniqid("video", true). "." .$video_ex_lc;
                            $file_destination = "../upload/" . $new_video_name;
                            move_uploaded_file($temp_name, $file_destination);
                            
                        }else{
                            $msg = "file type not supported!";
                            header("Location: ../video_gallery.php?error=$msg");
                        }

                    }

                    //check if file empty
                    if (empty($videoTitle)|| empty($videoDesc)) {
                        header("Location: ../video_gallery.php?upload=empty");
                        exit();
                    } else {
                        $sql = "SELECT * FROM v_gallery;";
                        $stmt = mysqli_stmt_init($conn); //grab info frm db
                        if(!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed";
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            $rowCount = mysqli_num_rows($result);
                            $setVideoOrder = $rowCount + 1;
                            
                            //bind parameter and insert into db
                            $sql = "INSERT INTO v_gallery (v_title, descVideo, vidFullNameGallery, orderVideo) 
                            VALUES (?, ?, ?, ?);";
                            if(!mysqli_stmt_prepare($stmt, $sql)) {
                                echo"SQL statement failed!";
                            } else {
                                mysqli_stmt_bind_param($stmt, "ssss", $videoTitle, $videoDesc, $new_video_name, $setVideoOrder);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../video_gallery.php?upload=success");
                                
                            }
                        }
                    } 
                
                } else {
                    echo "file is too big or not supported!";
                    exit();
                }
          