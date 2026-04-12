<?php
require_once __DIR__ . "/../model/DistributeModel.php";
class DistributeView{

    public static function fetchDistributeTable()
    {   
        $distributeModel = new DistributeModel();
        $leads = $distributeModel->getAllLeads();
        foreach ($leads as $leads => $lead) {
            if(strlen($lead->getMessage()) > 30)
            {
                $message = substr($lead->getMessage(), 0, 27) . "...";
            }
            else
            {
                $message = $lead->getMessage();
            }

            echo '
            <tr>
                <td>
                    <span class="company-name">' . $lead->getCname() . '</span>
                    <a href="' . $lead->getCwebsite() . '" class="website-link" target="_blank">' . $lead->getCwebsite() . '</a>
                </td>
                <td>' . $lead->getFname() . ' ' . $lead->getLname() .'</td>
                <td>
                    <div class="contact-info"><i class="fa-solid fa-envelope"></i> ' . $lead->getEmail() . '</div>
                    <div class="contact-info"><i class="fa-solid fa-phone"></i>' . $lead->getPhone() . '</div>
                </td>
                <td><div class="message-preview">' . $message . '</div></td>
                <td><span class="status-badge">' . $lead->getDate() .'</span></td>
                <td>
                    <button class="action-btn" title="View Full Message"><i class="fa-solid fa-eye"></i></button>
                    <a href="src/router/DistributeRouter.php?delete=' . $lead->getId() . '" class="action-btn" title="Delete"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            ';
        }
    }


    public static function fetchTwoDistributeTable()
    {   
        $distributeModel = new DistributeModel();
        $leads = $distributeModel->getTwoLeads();
        foreach ($leads as $leads => $lead) {
            echo '
            <tr>
                <td>
                    <span class="company-name">' . $lead->getCname() . '</span>
                </td>
                <td>' . $lead->getFname() . ' ' . $lead->getLname() .'</td>
                <td>
                    <div class="contact-info"><i class="fa-solid fa-envelope"></i> ' . $lead->getEmail() . '</div>
                    <div class="contact-info"><i class="fa-solid fa-phone"></i>' . $lead->getPhone() . '</div>
                </td>
                <td>' . $lead->getDate() . '</td>
            </tr>
            ';
        }
    }
}
?>

