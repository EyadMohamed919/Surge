<?php 
require_once __DIR__ . "/../model/ContactModel.php";
class ContactView{
    
    public static function fetchContactTable()
    {
        $contactModel = new ContactModel();
        $contactArray = $contactModel->getAllContact();
        foreach ($contactArray as $contact) {
            echo "<tr>";
                echo '<td>
                <span class="sender-name">' . $contact->getFname() . '</span>
                <a href="mailto:ahmed@example.com" class="sender-email">' . $contact->getEmail() . '</a>
                <span class="sender-phone"><i class="fa-solid fa-phone fa-xs"></i>' . $contact->getPhone() . '</span>
            </td>
            <td>
                <div class="message-text">
                    ' . $contact->getMessage() . '
                </div>
            </td>
            <td>
                <span class="timestamp">' . $contact->getDate() . '</span>
            </td>
            <td>
                <div class="action-group">
                    <a href="src/router/ContactRouter.php?delete=' . $contact->getId() . '" class="btn-icon" title="Delete"><i class="fa-solid fa-trash"></i></a>
                </div>
            </td>';
            echo "</tr>";
        }
    }
}
?>