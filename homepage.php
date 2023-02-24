<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<title>Dashboard</title>

	<link rel = "preconnect" href="https://fonts.googleapis.com">
    <link rel = "preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel = "stylesheet" type="text/css" href="./style.css">
    <style>
        .rectangle {
            position: absolute;
            width: 420px;
            height: 233.33px;
            left: 70px;
            top: 169px;
            background-color: #681A1A;
        }

        .rectangle2 {
            position: absolute;
            width: 419.4px;
            height: 233px;
            left: 510px;
            top: 169px;
            background-color: #681A1A;
        }

        .rectangle3 {
            position: absolute;
            width: 420px;
            height: 233.33px;
            left: 950px;
            top: 169px;
            background-color: #681A1A;
        }
        .rectangle4{
            position: absolute;
            width: 1300px;
            height: 521px;
            left: 70px;
            top: 443px;
            background-color: #D9D9D9;
        }
        .board{
            position: absolute;
            width: 288px;
            height: 43px;
            left: 92px;
            top: 456px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 35px;
            line-height: 43px;
            /* identical to box height */


            color: #000000;

            mix-blend-mode: normal;
        }
        .words{
            position: absolute;
            width: 87px;
            height: 30px;
            left: 131px;
            top: 532px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .title{
            position: absolute;
            width: 68px;
            height: 30px;
            left: 357px;
            top: 532px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .notice{
            position: absolute;
            width: 98px;
            height: 30px;
            left: 783px;
            top: 532px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .date{
            position: absolute;
            width: 69px;
            height: 30px;
            left: 1235px;
            top: 532px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .line1{
            position: absolute;
            width: 1260px;
            height: 0px;
            left: 90px;
            top: 508px;

            border: 1px solid rgba(0, 0, 0, 0.43);
        }
        .line2{
            position: absolute;
            width: 1260px;
            height: 0px;
            left: 90px;
            top: 586px;

            border: 1px solid rgba(0, 0, 0, 0.43);
        }
        .line3{
            position: absolute;
            width: 1260px;
            height: 0px;
            left: 90px;
            top: 654px;

            border: 1px solid rgba(0, 0, 0, 0.23);
        }
        .line4{
            position: absolute;
            width: 1260px;
            height: 0px;
            left: 90px;
            top: 721px;

            border: 1px solid rgba(0, 0, 0, 0.23);
        }
        .line5{
            position: absolute;
            width: 1260px;
            height: 0px;
            left: 90px;
            top: 788px;

            border: 1px solid rgba(0, 0, 0, 0.23);
        }
        .line6{
            position: absolute;
            width: 1260px;
            height: 0px;
            left: 90px;
            top: 855px;

            border: 1px solid rgba(0, 0, 0, 0.23);
        }
        .line7{
            position: absolute;
            width: 1260px;
            height: 0px;
            left: 90px;
            top: 926px;

            border: 1px solid rgba(0, 0, 0, 0.23);
        }
        .num1{
            position: absolute;
            width: 10px;
            height: 30px;
            left: 165px;
            top: 606px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .num2{
            position: absolute;
            width: 15px;
            height: 30px;
            left: 163px;
            top: 672px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .num3{
            position: absolute;
            width: 15px;
            height: 30px;
            left: 163px;
            top: 739px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .num4{
            position: absolute;
            width: 17px;
            height: 30px;
            left: 161px;
            top: 804px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .num5{
            position: absolute;
            width: 15px;
            height: 30px;
            left: 163px;
            top: 875px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;

            mix-blend-mode: normal;
        }
        .date1{
            position: absolute;
            width: 127px;
            height: 30px;
            left: 1206px;
            top: 606px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;
        }
        .date2{
            position: absolute;
            width: 127px;
            height: 30px;
            left: 1206px;
            top: 681px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;
        }
        .date3{
            position: absolute;
            width: 132px;
            height: 30px;
            left: 1204px;
            top: 744px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;

            color: #000000;
        }
        .holiday1{
            position: absolute;
            width: 85px;
            height: 22px;
            left: 349px;
            top: 610px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            /* identical to box height */


            color: #FFFFFF;
        }
        .holiday2{
            position: absolute;
            width: 156px;
            height: 40px;
            left: 313px;
            top: 601px;

            background: #681A1A;
            border-radius: 5px;
        }
        .ann1{
            position: absolute;
            width: 112px;
            height: 28px;
            left: 335px;
            top: 671px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 16px;
            text-align: center;

            color: #FFFFFF;
        }
        .ann2{
            position: absolute;
            width: 156px;
            height: 40px;
            left: 313px;
            top: 667px;

            background: #681A1A;
            border-radius: 5px;
        }
        .ann3{
            position: absolute;
            width: 124px;
            height: 16px;
            left: 329px;
            top: 744px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 16px;
            /* identical to box height */


            color: #FFFFFF;
        }
        .ann31{
            position: absolute;
            width: 156px;
            height: 40px;
            left: 313px;
            top: 734px;

            background: #681A1A;
            border-radius: 5px;
        }
        .ann4{
            position: absolute;
            width: 102px;
            height: 28px;
            left: 340px;
            top: 802px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 16px;
            text-align: center;

            color: #FFFFFF;
        }
        .ann41{
            position: absolute;
            width: 156px;
            height: 40px;
            left: 313px;
            top: 799px;

            background: #681A1A;
            border-radius: 5px;
        }
        .fiveh{
            position: absolute;
            width: 131.03px;
            height: 64.62px;
            left: 82.56px;
            top: 169px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 67px;
            line-height: 82px;

            color: #FFFFFF;
        }
        .cteach{
            position: absolute;
            width: 130.84px;
            height: 64.52px;
            left: 527.92px;
            top: 170.79px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 67px;
            line-height: 82px;

            color: #FFFFFF;
        }
        .students{
            position: absolute;
            width: 143px;
            height: 27px;
            left: 83px;
            top: 264px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 29px;

            color: #FFFFFF;
        }
        .shape1{
            position: absolute;
            width: 26.92px;
            height: 26.92px;
            left: 265.64px;
            top: 364.64px;

            border: 3px solid #D9D9D9;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .professors{
            position: absolute;
            width: 172.48px;
            height: 27.23px;
            left: 528px;
            top: 263px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 29px;

            color: #FFFFFF;

        }
        .cclass{
            position: absolute;
            width: 131.03px;
            height: 64.62px;
            left: 967.95px;
            top: 172.59px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 67px;
            line-height: 82px;

            color: #FFFFFF;
        }
        .class{
            position: absolute;
            width: 152.56px;
            height: 26.92px;
            left: 968px;
            top: 264px;

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 29px;

            color: #FFFFFF;
        }
        
    </style>
</head>

<body>
	<nav class = "navbar navbar-expand-lg navbar-dark fixed-top" style = "background-color: #681A1A;">
        <a class = "navbar-brand" href=#>Web Development</a>
        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#portfolio-nav" aria-controls = "portfolio-nav" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>
		
        <div class = "collapse navbar-collapse" id = "portfolio-nav">
            <ul class="nav navbar-nav mr-auto">
                <li class ="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="#">STUDENT</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="#">COURSE</a>
                </li>
                <li class = " nav-item">
                    <a class="nav-link" href="#">INSTRUCTORS</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GENERATE REPORT
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">By Number of Participants per Course</a>
                            <a class="dropdown-item" href="#">By Course conducted by Date Range</a>
                            <a class="dropdown-item" href="#">By Participants of the Course</a>
                            <a class="dropdown-item" href="#">By Pool Instructors per Course</a>
                        </div>
                </li>
            </ul>

            <ul class = "nav navbar-nav">
                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROFILE
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item">User Name</a>
                            <a class="dropdown-item">User Type</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                </li> 
        </div>
	</nav>
    <div class="rectangle"></div>
    <div class="rectangle2"></div>
    <div class="rectangle3"></div>
    <div class="rectangle4"></div>
    <div class="board">
        <p>NOTICE BOARD</p>
    </div>
    <div class="words">
        <p>SR NO.</p>
    </div>
    <div class = "title">
        <p> TITLE </p>
    </div>
    <div class = "notice">
        <p> NOTICE </p>
    </div>
    <div class = "date">
        <p> DATE </p>
    </div>
    <div class = "line1"></div>
    <div class = "line2"></div>
    <div class = "line3"></div>
    <div class = "line4"></div>
    <div class = "line5"></div>
    <div class = "line6"></div>
    <div class = "line7"></div>
    <div class = "num1">1</div>
    <div class = "num2">2</div>
    <div class = "num3">3</div>
    <div class = "num4">4</div>
    <div class = "num5">5</div>
    <div class = "date1"><p>12-30-2021</p></div>
    <div class = "date2"><p>01-15-2022</p></div>
    <div class = "date3"><p>02-15-2022</p></div>
    <div class = "holiday2"></div>
    <div class = "holiday1">HOLIDAY</div>
    <div class = "ann2"></div>
    <div class = "ann1">UNIVERSITY ACCREDITATION</div>
    <div class = "ann31"></div>
    <div class = "ann3">FOUNDATION DAY</div>
    <div class = "ann41"></div>
    <div class = "ann4">FINALIZATION OF GRADES</div>
    <div class = "fiveh">500</div>
    <div class = "cteach">250</div>
    <div class = "students">STUDENTS</div>
    <div class = "shape1"></div>
    <div class = "professors">PROFESSORS</div>
    <div class = "cclass">50</div>
    <div class = "class">CLASSES</div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>