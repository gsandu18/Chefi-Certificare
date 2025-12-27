<?php
// --- 1. CONFIGURARE BAZĂ DE DATE ---
// Schimbă aici cu datele tale reale din cPanel
$servername = "localhost";
$username = "chefaudi_admin";   // Userul tău de bază de date
$password = "parola_ta_aici";   // Parola userului
$dbname = "chefaudi_audit";     // Numele bazei de date

// --- 2. CONFIGURARE EMAIL ---
// Adresa de pe care se trimite (trebuie să existe în cPanel la Email Accounts)
$email_expeditor = "office@chefaudit.com"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Preluare și curățare date
    $tip_client = $_POST['tip_client']; 
    $nume = filter_var($_POST['nume'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefon = filter_var($_POST['telefon'], FILTER_SANITIZE_STRING);
    
    // Detalii specifice în funcție de tipul clientului
    $detalii = "";
    if ($tip_client == 'chef') {
        $detalii = $_POST['experienta'] . " Ani experiență";
    } else {
        $detalii = "Restaurant: " . $_POST['nume_restaurant'];
    }

    // --- 3. CONECTARE SI SALVARE ÎN MYSQL ---
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexiune eșuată: " . $conn->connect_error);
    }

    $sql = "INSERT INTO cereri_audit (tip_client, nume, email, telefon, detalii_specifice)
            VALUES ('$tip_client', '$nume', '$email', '$telefon', '$detalii')";

    if ($conn->query($sql) === TRUE) {
        
        // --- 4. PREGĂTIRE EMAIL HTML (DESIGNUL TĂU) ---
        $to = $email;
        $subject = "Confirmare Înregistrare - ChefAudit Elită";
        
        // Header-ele sunt OBLIGATORII pentru ca emailul să arate a HTML (nu text simplu)
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Chef Audit <' . $email_expeditor . '>' . "\r\n";

        // Aici introducem codul tău HTML într-o variabilă PHP
        // Am inserat variabila $nume pentru a personaliza mesajul ("Salutare, $nume")
        $message = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                body { font-family: "Segoe UI", Helvetica, Arial, sans-serif; margin: 0; padding: 0; background-color: #0d0d0d; color: #ffffff; }
                .container { max-width: 600px; margin: 0 auto; background-color: #161616; border: 1px solid #222; }
                .header { padding: 40px 20px; text-align: center; border-bottom: 1px solid #C5A02B; }
                .content { padding: 40px 30px; line-height: 1.6; }
                .footer { padding: 20px; text-align: center; font-size: 12px; color: #555; border-top: 1px solid #222; }
                .gold { color: #C5A02B; font-weight: bold; }
                .btn { display: inline-block; padding: 15px 30px; background-color: #C5A02B; color: #000000; text-decoration: none; font-weight: bold; text-transform: uppercase; margin-top: 25px; border-radius: 2px; }
                h1 { font-family: "Times New Roman", serif; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 20px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <img src="https://chefaudit.com/logo.png" alt="ChefAudit Logo" width="150" style="display: block; margin: 0 auto;">
                </div>
                <div class="content">
                    <h1>Bun venit în <span class="gold">Elită</span></h1>
                    
                    <p>Salutare, <strong>' . $nume . '</strong>,</p>
                    
                    <p>Vă confirmăm cu plăcere că solicitarea dumneavoastră pentru <span class="gold">Auditul de Etichetă și Protocol Gastronomic 2026</span> a fost înregistrată cu succes în baza noastră de date.</p>
                    <p>Bazându-ne pe o experiență de <strong>7 ani</strong> în reședințele de lux din România și Italia, am creat acest standard pentru a valida profesioniștii care stăpânesc nu doar arta gătitului, ci și pe cea a discreției absolute.</p>
                    <p><strong>Ce urmează:</strong> Dosarul dumneavoastră va fi analizat de echipa noastră, iar în perioada următoare veți primi detaliile pentru sesiunile de pre-evaluare din 2025.</p>
                    
                    <p>Până atunci, vă invităm să ne contactați direct pe WhatsApp pentru orice întrebări urgente.</p>
                    
                    <a href="https://wa.me/40722893476" class="btn">Contact Direct WhatsApp</a>
                </div>
                <div class="footer">
                    &copy; 2026 CHEFAUDIT.COM | Powered by Bucătarul Personal<br>
                    București | Toscana | Milano
                </div>
            </div>
        </body>
        </html>
        ';

        // --- 5. TRIMITEREA EFECTIVĂ ---
        mail($to, $subject, $message, $headers);

        // --- 6. REDIRECȚIONARE CĂTRE SITE ---
        echo "<script>
                alert('Solicitarea a fost trimisă cu succes! Verifică-ți emailul pentru confirmare.');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
