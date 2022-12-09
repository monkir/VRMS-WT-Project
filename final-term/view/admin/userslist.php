
<?php 
//if($_SERVER['REQUEST_METHOD']=='POST')
{
    $userid="";
    if(isset($_POST['userid']))
    {
        $userid=$_POST['userid'];
    }
    include_once '../../model/admin_model.php';
    $result= searchPassenger($userid);
    if($result->num_rows==0)
    {
        echo "No Results Founded";
    }
    else
    {
        ?>
        <table>
            <tr>
                <th>Userid</th>
                <th>Usertype</th>
                <th>Status</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
            while($row = $result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['usertype']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td style="width: 200px;"><?php echo $row['adress']; ?></td>
                    <td>
                        <img src="../profile_image/<?php echo $row['profile_image']; ?>" alt="" height="50px">
                    </td>
                    <td>
                        <button onclick="deletePassenger('<?php echo $row['userid']; ?>', '<?php echo $row['profile_image']; ?>')">Delete</a>
                        <button onclick="blockPassenger()">Block</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    } 
}
?>