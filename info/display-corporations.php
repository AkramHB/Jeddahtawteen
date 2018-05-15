<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.5.0, mobirise.com">


    <meta charset="UTF-8">
    <meta name="description" content="برنامج محافظة جدة لتوطين الوظائف">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <title> برنامج محافظة جدة لتوطين الوظائف</title>
    
    <style>
        * {
            font-size: 15px;
        }
    </style>
   


</head>

<body style="background-color: #ffffff;" dir="rtl">



    <div>
        <a href="http://www.jeddahawards.org/tawteen"><img id="T1" class="img-fluid" style="padding-bottom: 0em;" src="../assets/images/header.jpg"></a>
    </div>
    
        <div class = "container"><ul class="nav nav-tabs nav-fill mt-5">
              <li class="nav-item">
                <a class="nav-link" href="display-individuals.php">أفراد</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">مؤسسات</a>
              </li>
        </ul></div>
        
    <?php
    
            error_reporting(0);
            session_start();
            if($_SESSION["privilege"] == "admin"){

            $servername = "localhost";
            $username = "akram";
            $password = "K8XG-3Dd=%-S";
            $dbname = "tawteen";

            $MySQL_Handle = mysqli_connect($servername,$username,$password,$dbname) 
            or die ( mysqli_error($MySQL_Handle) ); 

            $sSQL= 'SET CHARACTER SET utf8'; 

            mysqli_query($MySQL_Handle,$sSQL) 
            or die ('Can\'t charset in DataBase');
            $sql = "SELECT * FROM corporations";
            $result = $MySQL_Handle->query($sql);

            if ($result->num_rows > 0) {

                echo "<div class = 'container text-center mt-5'><table class = 'table table-sm table-hover table-responsive text-center'>
                    <thead class='thead-light'><tr><th scope='col'>ID #</th><th scope='col'>اسم الشركة</th><th scope='col'>اسم ممثل الشركة</th><th scope='col'>المسمى الوظيفي لممثل الشركة</th><th scope='col'>مجال الشركة</th><th scope='col'>الوظائف الشاغرة</th><th scope='col'>معلومات أكثر</th><th scope='col'>العنوان</th><th scope='col'>البريد الإلكتروني</th><th scope='col'>رقم الجوال</th><th scope='col'>رقم الهاتف</th></tr></thead>";

                while($row = $result->fetch_assoc()) {
                    echo "<tr class=''>
                    <th scope='row'> " . $row['id'] . "
                    <td>" . $row['name'] . "
                    <td>" . $row['rep_name'] . "
                    <td>" . $row['rep_position'] . "
                    <td>" . $row['institution_field'] . "
                    <td>" . $row['vacant_job'] . "
                    <td>" . $row['vacant_job_more_info'] . "
                    <td>" . $row['address'] . "
                    <td>" . $row['email'] . "
                    <td>" . $row['mobile'] . "
                    <td>" . $row['phone'] . "
                    </tr>";
                }
            } else {
                echo "<div class = 'my-5 text-center display-3'>لا توجد هناك نتائج حاليًا</div>";
            }
            $MySQL_Handle->close();
            }

            else{
             echo "<div class = 'my-5 text-center display-3'>لست مصرح بالدخول هنا.</div>";
            }



              echo "</tbody>
            </table>
            </div>";

    ?>
                                

    <!-- footer -->

    <!-- #a00d1a -->
    <section data-rv-view="15" style="background-color: #1d392a;" id="timea" class="Images mbr-section mbr-section--no-padding">
        <div class="container">
            <img id="T1" style="padding-bottom: 0em; " src="../assets/images/footercopyr.jpg" class="img-fluid">
        </div>


    </section>



</body>





</html>