<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" a href="bootstrap.min.css"/>
    <title></title>
            <style>
        .s {
            
            position: absolute;
            width: 1440px;
            height: 123px;
            left: 0px;
            top: 0px;
            background: #681A1A;
        }

        .b {
            position: absolute;
            width: 83px;
            height: 35px;
            left: 394px;
            top: 259px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
            text-align: center;

            color: #FFFFFF;
            background: #681A1A;
        }

        .c {
            position: absolute;
            width: 221px;
            height: 35px;
            left: 481px;
            top: 259px;

            background: #D9D9D9;
        }

        .d {
            position: absolute;
            width: 933px;
            height: 529px;
            left: 241px;
            top: 320px;

        }

        h2 {
            position: absolute;
            width: 508px;
            height: 33px;
            left: 482px;
            top: 180px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 43px;
            text-align: center;

            color: #1F0303;
        }

        .h1 {
            position: absolute;
            width: 73px;
            height: 19px;
            left: 104px;
            top: 50px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;

            color: #FFFFFF;
        }

        .h2 {
            position: absolute;
            width: 104px;
            height: 19px;
            left: 255px;
            top: 50px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;

            color: #FFFFFF;
        }

        .h3 {
            position: absolute;
            width: 96px;
            height: 19px;
            left: 437px;
            top: 50px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;

            color: #FFFFFF;
        }

        .h4 {
            position: absolute;
            width: 158px;
            height: 19px;
            left: 602px;
            top: 50px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;

            color: #FFFFFF;
        }

        .h5 {
            position: absolute;
            width: 99px;
            height: 19px;
            left: 1231px;
            top: 50px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;

            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <h2>Search By Class Number</h2>
    <div class="s">
        <h3 class="h1">HOME</h3>
        <h3 class="h2">STUDENT</h3>
        <h3 class="h3">COURSE</h3>
        <h3 class="h4">INSTRUCTOR</h3>
        <h3 class="h5">PROFILE</h3>
    </div>
     <form action="" method="GET">
        <div>
            <div>
                <input type="text" name="class_number" value="<?php if(isset($_GET['class_number'])){echo $_GET['class_number'];} ?>" class="form-control c">
            </div>
            <div>
                <button type="submit" class="b">Go</button>
            </div>
        </div>
    </form>

     <div class="container d">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                             <?php 
                                    $con = mysqli_connect("localhost","root","","finals");

                                    if(isset($_GET['class_number']))
                                    {
                                        $class_number = $_GET['class_number'];

                                        $query = "SELECT * FROM class_information_details WHERE class_info_id='$class_number' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {

                                            ?>
                                            <tr>
                                                <td> Class Information Details </td>
                                                <td> Class Number </td>
                                                <td> Letter Order Number </td>
                                                <td> General Order </td>
                                                <td> Certificate Control Number  </td>
                                                <td> Student Registration ID </td>
                                            </tr>

                                            <?php
                                            foreach($query_run as $row)
                                            {

                                                
                                                    $class_id = $row['class_info_id'];
                                                    $class_num = $row['class_number'];
                                                    $order_num = $row['letter_order_number'];
                                                    $gen_order = $row['general_order'];
                                                    $cert = $row['cert_ctrl_no'];
                                                    $student_reg_id = $row['student_reg_id'];
                                                ?>
                            
                                            
                                                <tr>
                                                    <td><?php echo $class_id ?></td>
                                                    <td><?php echo $class_num ?></td>
                                                    <td><?php echo $order_num ?></td>
                                                    <td><?php echo $gen_order ?></td>
                                                    <td><?php echo $cert ?></td>
                                                    <td><?php echo $student_reg_id ?></td>
                                                </tr>         
                                               
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>       
                                                                                           
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>