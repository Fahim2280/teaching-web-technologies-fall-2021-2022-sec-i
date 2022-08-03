<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./view/card.css" />
</head>
<form action="./controller/search.php" method="POST" enctype="">
    <fieldset style="background-color:DodgerBlue;">
        <h1>Booking.com</h1>
        <table>
            <tr>
                <td>Search </td>
                <td><input type="text" name="Name" value="" id="searchId" placeholder=""></td>
                <td><button type="submit" name="search" value="SEARCH BY ID">Search</button></td>
            </tr>
            <tr>
                <td><a href="SignUp.html"> View Gallery </a> <br></td>
            </tr>
        </table>
    </fieldset>
    </from>

    <script>
        let content = document.getElementById('searchId');

        function imu(x) {
            if (x.length == 0) {
                content.innerHTML = 'empty'
            } else {
                var XML = new XMLHttpRequest();
                XML.onreadystatechange = function() {
                    if (XML.readyState == 4 && XML.status == 200) {
                        content.innerHTML = XML.responseText;
                    }
                };
                XML.open('GET', 'search.php?data=+x', true);
                XML.send();
            }
        }
    </script>
    <?php
    
$conn = mysqli_connect('localhost', 'root', '', 'tours_and_travel');

$sql = "select * from event";
$result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <body>
            <section class="container">
                <div class="col-md-3">
                    <div class="card">
                        <img src="" id="card-image"><?php echo $row['image']; ?></img>
                        <h2 id="title"><?php echo $row['Name'];  ?></h2>
                        <h4 id="H-M-day"><?php echo $row['H_M_day']; ?></h4>
                        <p id="description"><?php echo $row['Event']; ?></p>
                        <a href="">READ MORE</a>
                    </div>
            </section>
        </body>
    <?php

    }

    ?>


    </html>
