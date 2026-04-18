<?php 
require_once __DIR__ . "/../model/UserModel.php";
class UserView{
    public static function fetchAllUsers()
    {
        $users = UserModel::getAllUsers();
        foreach($users as $user)
        {
            echo '
            <tr>
            <td>' . $user->getUserFName() . ' ' . $user->getUserLName() . '</td>
            <td>'  . $user->getUserEmail() . '</td>
            <td class="actions">
                <a href="src/router/UserRouter.php?delete=' . $user->getUserID() . '"><i class="fa-solid fa-trash"></i></a>
            </td>
            </tr>
            ';
        }
    }
}