<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<title>STUDENT CENTER</title>

	<link rel = "preconnect" href="https://fonts.googleapis.com">
    <link rel = "preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href = "https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>    