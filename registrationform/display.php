<?php
include('config.php');

$res = $conn->query("SELECT * FROM reg_data");

$markup = '<table border="2" cellpadding="4" cellspacing="4">
                <tr>
                    <td> <font face="Arial">Serial Number</font></td>
                    <td> <font face="Arial">Full Name</font></td>
                    <td> <font face="Arial">Username</font></td>
                    <td> <font face="Arial">Contact Number</font></td>
                    <td> <font face="Arial">Email</font></td>
                    <td> <font face="Arial">Address</font></td>
                    <td> <font face="Arial">gender</font></td>
                    <td> <font face="Arial">Password</font></td>
                    <td> <font face="Arial">Confirm Password</font></td>
                    <td colspan="2"> <font face="Arial">Operations</font></td>
                    </tr> ';
                    while($row = $res->fetch_assoc()){
                        $markup .= '<tr>
                                    <td>'.$row['id'].'</td>
                                    <td>'.$row['fname'].'</td>
                                    <td>'.$row['uname'].'</td>
                                    <td>'.$row['cnumber'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['addresss'].'</td>
                                    <td>'.$row['gender'].'</td>
                                    <td>'.$row['passwd'].'</td>             
                                    <td>'.$row['cpasswd'].'</td>
                                    <td><a href=update.php?id='.$row['id'].' target=_blank>Update</a></td>
                                    <td><a href=delete.php?id='.$row['id'].'>Delete</a></td>

                                    </tr>';
                    }

                $markup .= '</table>';
                echo $markup;
                
?>