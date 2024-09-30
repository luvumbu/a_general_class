 <?php 


   // Adresse e-mail de destination
   $to = 'luvumbu.n@gmail.com';
   
   // Sujet de l'e-mail
   $subject = 'Bienvenue sur Bokonzi';
   
   // Message stylé avec HTML et CSS inline
   $message = '
   <html>
   <head>
     <title>Bienvenue sur Bokonzi</title>
     <style>
       body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-color: black;
       }
       .container {
         width: 100%;
         max-width: 600px;
         margin: 0 auto;
         background-color: #ffffff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
       }
       .header {
         background-color: black;
         color: white;
         padding: 10px 0;
         text-align: center;
         border-radius: 8px 8px 0 0;
       }
       .header h1 {
         margin: 0;
       }
       .content {
         margin: 20px 0;
         font-size: 16px;
         line-height: 1.6;
         color: #333333;
       }
       .footer {
         text-align: center;
         font-size: 12px;
         color: #888888;
         margin-top: 20px;
       }
       .btn {
         display: inline-block;
         padding: 10px 20px;
         color: white;
         background-color: black;
         text-decoration: none;
         border-radius: 5px;
         font-size: 16px;
         margin-top: 20px;
       }
     </style>
   </head>
   <body>
     <div class="container">
       <div class="header">
         <h1>Bienvenue sur Bokonzi</h1>
       </div>
       <div class="content">
         <p>Bonjour,</p>
         <p>Merci de vous être inscrit sur Bokonzi. Nous sommes heureux de vous compter parmi nous.</p>
         <p>Pour finaliser votre inscription, veuillez cliquer sur le bouton ci-dessous afin d\'activer votre compte :</p>
         <a href="https://bokonzi.com/activation" class="btn">Activer votre compte</a>
         <p>Pour toute question ou assistance, n\'hésitez pas à nous contacter sur contact@bokonzi.com.</p>
         <p>Cordialement,</p>
         <p><strong>L\'équipe Bokonzi</strong></p>
       </div>
       <div class="footer">
         <p>&copy; 2024 Bokonzi - Tous droits réservés</p>
       </div>
     </div>
   </body>
   </html>
   ';
   
   // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
   $headers = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
   // En-têtes supplémentaires (facultatif)
   $headers .= 'From: contact@bokonzi.com' . "\r\n";
   $headers .= 'Reply-To: contact@bokonzi.com' . "\r\n";
   
   // Envoi de l'e-mail
   if(mail($to, $subject, $message, $headers)) {
       echo 'E-mail envoyé avec succès.';
   } else {
       echo 'Échec de l\'envoi de l\'e-mail.';
   }
 


   ?>