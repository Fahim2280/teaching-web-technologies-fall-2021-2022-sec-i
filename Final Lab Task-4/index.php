<!DOCTYPE html>

<head>

<body>
    <title>
       Job Portal
    </title>
    <h1>Portal</h1>
    <table align="center">
        <tr>
            <td>SEARCH</td>
            <td><input type="text" name="SEARCH " value=""></td>
        </tr>
    </table>
    <br>
    <form action="DataAdd.php" method="post" enctype="multipart/form-data">
        <h1>Register</h1>
        <table>
            <tr>
                <td>User name </td>
                <td><input type="text" id="UserName" name="UserName" value=""></td>
            </tr>
            <tr>
                <td>Password </td>
                <td><input type="text" id="Password" name="Password" value=""></td>
            </tr>
            <tr>
                <td>Name </td>
                <td><input type="text" id="Name" name="Name" value=""></td>
            </tr>
            <tr>
                <td>Company Name </td>
                <td><input type="text" id="ComName" name="ComName" value=""></td>
            </tr>
            <tr>
                <td>Contact no </td>
                <td><input type="text" id="ContactNo" name="ContactNo" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" id="button" name="uplode" value="confirm"></td>
            </tr>
        </table>
    </form>
    <form action="DataUpdate.php" method="post" enctype="multipart/form-data">
        <h1>Update data</h1>
        <table>
            <tr>
                <td>User name </td>
                <td><input type="text" id="UserName" name="UserName" value=""></td>
            </tr>
            <tr>
                <td>Password </td>
                <td><input type="text" id="Password" name="Password" value=""></td>
            </tr>
            <tr>
                <td>Name </td>
                <td><input type="text" id="Name" name="Name" value=""></td>
            </tr>
            <tr>
                <td>Company Name </td>
                <td><input type="text" id="ComName" name="ComName" value=""></td>
            </tr>
            <tr>
                <td>Contact no </td>
                <td><input type="text" id="ContactNo" name="ContactNo" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" id="button" name="uplode" value="confirm"></td>
            </tr>
        </table>
    </form>
    <form action="../controller/eventDataDelet.php" method="post" enctype="multipart/form-data">
        <h1>Delete data</h1>
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" id="SERIAL" name="SERIAL" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" class="delet_box" name="" id="submit" value="Delete"></td>
            </tr>
        </table>
    </form>
</body>
</head>
</html>