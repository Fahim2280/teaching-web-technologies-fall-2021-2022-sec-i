<!DOCTYPE html>

<head>

<body>
    <title>
       Employere Portal
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
        <h1>New Job</h1>
        <table> 
            <tr>
                <td>Company Name </td>
                <td><input type="text" id="ComName" name="ComName" value=""></td>
            </tr>
            <tr>
                <td>Job title </td>
                <td><input type="text" id="JobTitle" name="JobTitle" value=""></td>
            </tr>
            <tr>
                <td>Job loction </td>
                <td><input type="text" id="JobLoction" name="JobLection" value=""></td>
            </tr>
            <tr>
                <td>Salary </td>
                <td><input type="text" id="Salary" name="Salary" value=""></td>
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
                <td>Company Name </td>
                <td><input type="text" id="ComName" name="ComName" value=""></td>
            </tr>
            <tr>
                <td>Job title </td>
                <td><input type="text" id="JobTitle" name="JobTitle" value=""></td>
            </tr>
            <tr>
                <td>Job loction </td>
                <td><input type="text" id="JobLoction" name="JobLection" value=""></td>
            </tr>
            <tr>
                <td>Salary </td>
                <td><input type="text" id="Salary" name="Salary" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" id="button" name="uplode" value="confirm"></td>
            </tr>
        </table>
    </form>
    <form action="../controller/eventDataDelet.php" method="post" enctype="multipart/form-data">
        <h1>Delete Job</h1>
        <table>
            <tr>
                <td>Job number</td>
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