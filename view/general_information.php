<?php
    require_once 'header.php';
?>
<p>
    <center>
    <table border="5px">
        <tr>
            <th>Admin</th>
            <th>Employee</th>
            <th>Passenger</th>
            <th>Driver</th>
        </tr>
        <>
            <td valign="top">
                Attribute:
                <ul>
                    <li>String name</li>
                    <li>String id</li>
                    <li>String password</li>
                </ul>
                Methods:
                <ul>
                    <li>void add_employee()</li>
                    <li>void remove_employee()</li>
                    <li>void block_employee()</li>
                    <li>void set_employee_salary()</li>
                    <li>void demote_employee()</li>
                    <li>void set_employee_commission()</li>
                </ul>
            </td>
            <td valign="top">
            Attribute:
                <ul>
                    <li>String name</li>
                    <li>String id</li>
                    <li>String password</li>
                </ul>
                Methods:
                <ul>
                    <li>void add_passanger()</li>
                    <li>void remove_Passenger()</li>
                    <li>void block_passenger()</li>
                    <li>void add_driver()</li>
                    <li>void remove_driver</li>
                    <li>void block_driver</li>
                    <li>void add_trip</li>
                    <li>void approve_trip</li>
                    <li>void cancle_trip</li>
                    <li>void add_car</li>
                    <li>void remove_car</li>
                </ul>
            </td>
            <td valign="top">
            Attribute:
                <ul>
                    <li>String name</li>
                    <li>String id</li>
                    <li>String password</li>
                    <li>string address</li>
                    <li>string contact</li>
                    <li>string email</li>
                    <li>string gender</li>
                    <li></li>
                </ul>
                Methods:
                <ul>
                    <li>void requestTrip</li>
                    <li>void cancelTrip</li>
                    <li>void sendFeedback()</li>
                    <li>void payment()</li>
                    <li>void sentReport()</li>
                </ul>
            </td>

            <td valign="top">
            Attribute:
                <ul>
                    <li>String name</li>
                    <li>String id</li>
                    <li>String password</li>
                    <li>string address</li>
                    <li>string contact</li>
                </ul>
                Methods:
                <ul>
                    <li>void acceptTrip()</li>
                    <li>void rejectTrip()</li>
                    <li>void sendFeedback()</li>
                    <li>void sentReport()</li>
                </ul>
            </td>
        </tr>
    </table>
    </center>

</p>
<?php
    require_once 'footer.php';
?>