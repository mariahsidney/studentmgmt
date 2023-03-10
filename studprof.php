<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT PROFILE</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="./style.css">
    <style>
    * {
        box-sizing: border-box;
        }

        input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        font-family: 'Montserrat';
        font-style: normal;
        }

        label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        }

        input[type=submit] {
        background-color: #681A1A;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        .row1{
            position: absolute;
            left: 46.53%;
            right: 46.53%;
            top:   55.27%;
            bottom: 16.11%;
        }
        .container {
            position: absolute;
            
            width: 1018px;
            height: 699px;
            left: 192px;
            top: 208px;
            border-radius: 5px;
            padding: 20px;
        }

        .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        }

        .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
        }
        .add{
            position: absolute;
            left: 39.51%;
            right: 36.11%;
            top: 25.68%;
            bottom: 70.41%;
            text-align: center;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 5px;
            display: flex;
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
                    <a class="nav-link" href="homepage.php">HOME</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="studentlandingpage.php">STUDENT</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href="#">COURSE</a>
                </li>
                <li class = " nav-item">
                    <a class="nav-link" href="#">INSTRUCTORS</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
                        GENERATE REPORT
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">By Number of Participants per Course</a><li>
                            <a class="dropdown-item" href="#">By Course conducted by Date Range</a><li>
                            <a class="dropdown-item" href="#">By Participants of the Course</a></li>
                            <a class="dropdown-item" href="#">By Pool Instructors per Course</a></li>
    </ul>
                </li>
            </ul>

            <ul class = "nav navbar-nav ms-auto">
                <li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PROFILE
                    </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item">User Name</a></li>
                            <li><a class="dropdown-item">User Type</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Log In/Out</a></li>
                        </ul>
                </li> 
            </ul>
        </div>
	</nav>

    <div class = "add">STUDENT PROFILE</div>
    <div class="container">
        <form action="#" method="POST">
            <fieldset>
            <div class="row">
            <div class="col-25">
                <br><label for="student_id">STUDENT ID</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="student_id" name="student_id" placeholder="Your Student ID.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="account_id">ACCOUNT ID</label><br>
            </div>
            <div class="col-75">
               <br> <input type="text" id="account_id" name="account_id" placeholder="Your Account ID.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="name">NAME</label><br>
            </div>
            <div class="col-75">
               <br> <input type="text" id="name" name="name" placeholder="Your Name.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="name">COURSE</label><br>
            </div>
            <div class="col-75">
               <br> <input type="text" id="course" name="course" placeholder="Your Course.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="rank">RANK</label><br>
            </div>
            <div class="col-75">
                <br><select id="rank" name="rank">
                <option value="pco">PCO</option>
                <option value="pnco">PNCO</option>
                <option value="nup">NUP</option>
                </select></br>
            </div>
            <div class="col-25">
               <br> <label for="office_name">OFFICE NAME</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="office_name" name="office_name" placeholder="Your Office Name.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="name">YEAR</label><br>
            </div>
            <div class="col-75">
               <br> <input type="text" id="year" name="year" placeholder="Year.."><br>
    
            
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


    </body>
</html>
