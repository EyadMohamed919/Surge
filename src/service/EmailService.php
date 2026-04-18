<?php 
class EmailService{
    public static function sendDistributeMail($email, $company, $text)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
       
        $from = 'info@legacygroup-egypt.com';
        $subject = "Distribution Request";
    
        $message = "
        <html>  
        <head>
        <title>New Distribution Request</title>
        </head>
        <body style='background:white;'>
        <h2 style='color: rgba(0, 0, 0);'><strong>Company '" . $company . "' is requesting to distribute</strong>.</h2>
        <p>Message: " . $text . "</p>
        <hr>
        <a href='https://legacygroup-egypt.com' 
            style='background-color: rgba(250, 11, 11); color: #ffffff; padding: 15px 25px; text-decoration: none; border-radius: 10px; font-weight: bold; display: inline-block;'>
            For more information, visit admin page  
        </a>
        <img src='https://www.legacygroup-egypt.com/public/image/LegacyTradeWhiteLogo.svg' style='margin:auto; width:80%; margin-top:15px;'>
        </body>
        </html>
        ";
    
        $headers = [
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=utf-8',
            'From' => $from,
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
    
        mail($email, $subject, $message, $headers, "-f" . $from);
    
    }

    public static function sendContactMail($email, $fname, $text)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
       
        $from = 'info@legacygroup-egypt.com';
        $subject = "Inquiry";
    
        $message = "
        <html>  
        <head>
        <title>New Inquiry Request</title>
        </head>
        <body style='background:white;'>
        <h2 style='color: rgba(0, 0, 0);'><strong>" . $fname . " is reaching out</strong>.</h2>
        <p>Message: " . $text . "</p>
        <hr>
        <a href='https://legacygroup-egypt.com' 
            style='background-color: rgba(250, 11, 11); color: #ffffff; padding: 15px 25px; text-decoration: none; border-radius: 10px; font-weight: bold; display: inline-block;'>
            For more information, visit admin page  
        </a>
        <img src='https://www.legacygroup-egypt.com/public/image/LegacyTradeWhiteLogo.svg' style='margin:auto; width:80%; margin-top:15px;'>
        </body>
        </html>
        ";
    
        $headers = [
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=utf-8',
            'From' => $from,
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
    
        mail($email, $subject, $message, $headers, "-f" . $from);
    
    }
    
    // Usage:
    // sendBasicEmail('user@example.com', 'Hello!', '<h1>Welcome</h1>', 'My Website', 'noreply@example.com');
}