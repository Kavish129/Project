<h3 class="text-center text-success"> All Users </h3>
<table class="table table-bordered mt-5">
    <thead style="background-color: #e3f2fd">
    <?php
    $get_user="Select * from `user_table`";
    $result=mysqli_query($con,$get_user);
    $row_count=mysqli_num_rows($result);

    if($row_count==0){
        echo"<h2 class='text-dark text-center mt-5'> No User yet</h2>";
    }else{
        echo"<tr>
        <th>S1 no </th>
        <th>User name</th>
        <th> user email</th>
        <th> User Address</th>
        <th> user mobile </th>
        <th> Delete </th>
        </tr>
        </thead>
        <tbody class='text-dark'>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $user_id=$row_data['U_ID'];
            $user_name=$row_data['Username'];
            $user_email=$row_data['Email'];
            $User_Address=$row_data['user_address'];
            $User_Contact=$row_data['User_mobile'];
            $number++;
            echo"<tr>
            <td>$number</td>
            <td>$user_name</td>
            <td>$user_email</td>
            <td> $User_Address</td>
            <td> $User_Contact</td>    
            <td><a href='' class='text-dark'><i class='fa-solid fa-trash'></a></i></td>
            ";
        }
    }
    ?>
</table>