<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #FFFCFA;
        }

        nav{
            background-color: #681A1A;
            font-family: 'Montserrat', sans-serif;
        }
        .navbar {
          min-height: 100px;
        }

        .container-fluid {
            font-size: 20px;
        }
          
        nav ul li a, .navbar-brand{
          color: #ffff !important;
            margin-left: 80px;
        }

        nav li a {
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

  


        .container {
            margin: auto;
            text-align: center;
            display:flex;
            margin-top: 20px;
        }
        td .container1{
            margin: 0 auto;
        }
        
        .container1 {
            margin: 0 auto;
            text-align: center;
            display:flex;
        }
        .container1 .deleter, .container1 .updater{
            background-color: #681A1A;
            width: 100px;
            margin: 5px;
            text-align: center;
            justify-content:center;
            padding: 10px;
            border-radius: 5px;

        }
        .click, .UpdateClick{
            
            min-width:100px;
            padding: 10px;
            text-decoration: none;
            color: #f2f2f2;
            width:40px;
        }


        table {
            border-spacing: 0px;
            width: 100%;
            border: 1px solid black;
        }

        table td, table th {
            padding: .75em;
            vertical-align: top;
            text-align: center;
            border-top: 1px solid #0d0d0d;
            overflow: hidden;
        }
        table td:last-child{
            width:100px;
        }
    
        .popup_box{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          border-radius: 5px;
        }
        .popup_box{
          width: 400px;
          background: #f2f2f2;
          text-align: center;
          align-items: center;
          padding: 40px;
          border: 1px solid #b3b3b3;
          box-shadow: 0px 5px 10px rgba(0,0,0,.2);
          z-index: 9999;
          display: none;
        }
        .popup_box i{
          font-size: 60px;
          color: #eb9447;
          border: 5px solid #eb9447;
          padding: 20px 40px;
          border-radius: 50%;
          margin: -10px 0 20px 0;
        }
        .popup_box h1{
          font-size: 30px;
          color: #1b2631;
          margin-bottom: 5px;
        }
        .popup_box label{
          font-size: 23px;
          color: #404040;
        }
        .popup_box .btns{
          margin: 40px 0 0 0;
        }
              .btns .btn1, .btns .btn2{
          background: #681A1A;
          color: white;
          display: block;
          font-size: 18px;
          border-radius: 5px;
          border: 1px solid #808080;
          padding: 10px 13px;
          width: 50%;
          margin: 0 auto;
        }
        .btns a {
          text-decoration: none;
        }
        .btns .btn2{
          margin-bottom: 15px;
          background: #681A1A;
        }
        .btns .btn1:hover{
          transition: .5s;
          background: #ac4141;
        }
        .btns .btn2:hover{
          transition: .5s;
          background: #ac4141;
        }
        .deleter:hover, .updater:hover{
            color: #f2f2f2;
        }


    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
// JavaScript function to display confirmation dialog
function confirmDelete(id) {
  sid = id;
}

$(document).ready(function(){
        $('.click').click(function(){
          $('.popup_box').css("display", "block");
        });
        $('.btn1').click(function(){
          $('.popup_box').css("display", "none");
        });
        $('.btn2').click(function(){
          $('.popup_box').css("display", "none");
          window.location.href = "delete.php?id=" + sid;
          alert("Record has been deleted successfully.");
        });
      });

</script>


</head>
<body>

<?php include 'navigation.php'; ?>

<div class="container">
<?php
require("connection.php");

$students = mysqli_query($conn,"select * from student");
$j = mysqli_affected_rows($conn);

echo "
<table>
<tr>
    <th>STUDENT ID</th>
    <th>ACCOUNT ID</th>
    <th>RANK</th>
    <th>OFFICE NAME</th>
    <th>ACTIONS</th>

</tr>";
while($row = mysqli_fetch_assoc($students)){
    
    $id = $row['student_id'];
    $accId = $row["account_id"];
    $rank = $row["rank"];
    $office_name = $row["office_name"];

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$accId</td>";
    echo "<td>$rank</td>";
    echo "<td>$office_name</td>";
    echo "<td>
    <div class=container1>
    <div class=updater>
    <a href=update_student.php?id=$id class=UpdateClick>UPDATE</a>
    </div>
    <div class=deleter>
    <a onClick=confirmDelete($id) class=click href=#>DELETE</a>
    </div>
    </div>
    
    </td>";
    echo "</tr>";
    echo "<br>";
}



// if(isset($_GET['id'])){

// $id = $_GET['id'];

// $sql = "DELETE FROM student_db WHERE student_id = '$id'";
// mysqli_query($conn,$sql);

// echo "<br><b>Record has been deleted successfully!</b>";

// header("Location: ".$_SERVER['PHP_SELF']);
// exit;
// }

?>
</div>

        <div class="popup_box">
          <h1>Are you sure you want to delete this record?</h1>
          <div class="btns">
            <a href="#" class="btn2">Yes</a>
            <a href="#" class="btn1">No</a>
          </div>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</div>


</head>
</body>
