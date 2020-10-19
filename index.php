<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
    include 'config.php';
    $sql = "SELECT * FROM students JOIN studentclass WHERE students.s_class = studentclass.c_id";
    $result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");
    if(mysqli_num_rows($result)>0){
    
    
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Country</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php 
        while ($row = mysqli_fetch_assoc($result)){
               
        ?>
            <tr>
                <td><?php echo $row['s_id']; ?></td>
                <td><?php echo $row['s_name']; ?></td>
                <td><?php echo $row['s_country']; ?></td>
                <td><?php echo $row['c_name']; ?></td>
                <td><?php echo $row['s_phone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['s_id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['s_id']; ?>'>Delete</a>
                </td>
            </tr>
            
            <?php }
            ?>
        </tbody>
    </table>
    <?php }else{
                echo "<h2>No record found</h2>";
            } 
            mysqli_close($conn) 
            ?>
</div>
</div>
</body>
</html>
