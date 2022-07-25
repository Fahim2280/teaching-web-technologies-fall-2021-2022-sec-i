<!DOCTYPE html>
<html>

<body>
   <form action="Search.php" method="get" enctype="">
      <fieldset style="background-color:DodgerBlue;">
         <h1>Booking.com</h1>
         <table>
            <tr>
               <td>Search </td>
               <td><input type="text" name="search" value=""></td>
               <td><button type="submit">Search</button></td>
            </tr>
            <tr>
               <td><a href="SignUp.html"> View Gallery </a> <br></td>
            </tr>
         </table>
      </fieldset>
      </from>
      <table>
         <?php
         if ($_GET['search'] == 'sudhrbon') {
            echo ' <td><img src="sudhrbon.jpg" alt="sudhrbon" width="200" height="150"><br>
               <a href="SignUp.html"> Sudhrbon </a> <br>
               <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
               <a href="SignUp.html"> 2 hoteles </a> <br></td>';
         }


         if ($_GET['search'] == 'labbugkella') {
            echo '<td><img src="labbugkella.jpg" alt="labbugkella" width="200" height="150"><br>
                <a href="SignUp.html"> labbugkella </a> <br>
                <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
                <a href="SignUp.html"> 10 hoteles </a> <br></td>';
         }
         if ($_GET['search'] == 'mohastangor') {
            echo '<td>
                <img src="mohastangor.jpg" alt="mohastangor" width="200" height="150"><br>
                <a href="SignUp.html"> mohastangor</a> <br>
                <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
                <a href="SignUp.html"> 15 hoteles </a> <br></td>';
         }
         if ($_GET['search'] == 'Sajek') {
            echo
            '<td>
                <img src="Sajek.jpg" alt="Sajek" width="200" height="150"><br>
                <a href="SignUp.html"> Sajek </a> <br>
                <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
                <a href="SignUp.html"> 5 hoteles </a> <br></td>';
         }
         if ($_GET['search'] == 'Sylhet') {
            echo '<td>
                <img src="Sylhet.jpg" alt="Sylhet" width="200" height="150"><br>
                <a href="SignUp.html"> Sylhet </a> <br>
                <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
                <a href="SignUp.html"> 3 hoteles </a> <br>
            </td>';
         }
         if ($_GET['search'] == 'sudhrbon') {
            echo ' <td><img src="sudhrbon.jpg" alt="sudhrbon" width="200" height="150"><br>
            <a href="SignUp.html"> Sudhrbon </a> <br>
            <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
            <a href="SignUp.html"> 2 hoteles </a> <br></td>';
         }


         if ($_GET['search'] == 'labbugkella') {
            echo '<td><img src="labbugkella.jpg" alt="labbugkella" width="200" height="150"><br>
             <a href="SignUp.html"> labbugkella </a> <br>
             <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
             <a href="SignUp.html"> 10 hoteles </a> <br></td>';
         }
         if ($_GET['search'] == 'mohastangor') {
            echo '<td>
             <img src="mohastangor.jpg" alt="mohastangor" width="200" height="150"><br>
             <a href="SignUp.html"> mohastangor</a> <br>
             <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
             <a href="SignUp.html"> 15 hoteles </a> <br></td>';
         }
         if ($_GET['search'] == 'Sajek') {
            echo
            '<td>
             <img src="Sajek.jpg" alt="Sajek" width="200" height="150"><br>
             <a href="SignUp.html"> Sajek </a> <br>
             <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
             <a href="SignUp.html"> 5 hoteles </a> <br></td>';
         }
         if ($_GET['search'] == 'Sylhet') {
            echo '<td>
             <img src="Sylhet.jpg" alt="Sylhet" width="200" height="150"><br>
             <a href="SignUp.html"> Sylhet </a> <br>
             <p>Budget Friendly Travel, <br> Cleanliness, Friendly Locals</p>
             <a href="SignUp.html"> 3 hoteles </a> <br>
         </td>';
         }
         ?>
      </table>

</body>

</html>