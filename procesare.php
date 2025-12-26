<?php
// --- 1. CONFIGURARE BAZĂ DE DATE ---
$servername = "localhost";
$username = "root";       // Userul tău de MySQL
$password = "";           // Parola ta (lasă gol dacă nu ai)
$dbname = "nume_baza_date"; // Numele bazei tale de date

// --- 2. PRELUARE DATE DIN FORMULAR ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $tip_client = $_POST['tip_client']; // 'chef' sau 'restaurant'
    $nume = filter_var($_POST['nume'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefon = filter_var($_POST['telefon'], FILTER_SANITIZE_STRING);
    
    // Logică pentru a salva detaliul corect
    $detalii = "";
    if ($tip_client == 'chef') {
        $detalii = $_POST['experienta'] . " Ani experiență";
    } else {
        $detalii = "Restaurant: " . $_POST['nume_restaurant'];
    }

    // --- 3. CONECTARE SI SALVARE ÎN MYSQL ---
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificăm conexiunea
    if ($conn->connect_error) {
        die("Conexiune eșuată: " . $conn->connect_error);
    }

    $sql = "INSERT INTO cereri_audit (tip_client, nume, email, telefon, detalii_specifice)
            VALUES ('$tip_client', '$nume', '$email', '$telefon', '$detalii')";

    if ($conn->query($sql) === TRUE) {
        
        // --- 4. TRIMITERE EMAIL AUTOMAT CĂTRE CLIENT ---
        $to = $email;
        $subject = "Confirmare Solicitare Audit - Chef Audit Pro";
        
        // Mesaj HTML stilizat
        $message = "
        <html>
        <head>
          <title>Confirmare Audit</title>
        </head>
        <body style='background-color:#000; color:#fff; font-family:Arial, sans-serif; padding:20px;'>
          <div style='border:1px solid #C5A059; padding:30px; border-radius:10px; text-align:center;'>
            <h2 style='color:#C5A059;'>Salut, $nume!</h2>
            <p>Îți mulțumim că ai aplicat pentru <strong>Standardul de Aur în Bucătărie</strong>.</p>
            <p>Solicitarea ta a fost înregistrată cu succes în baza noastră de date.</p>
            <hr style='border:0; border-top:1px solid #333; margin:20px 0;'>
            <p style='color:#ccc;'>Un consultant Chef Audit te va contacta în curând la telefonul <strong>$telefon</strong> pentru a stabili detaliile evaluării.</p>
            <br>
            <p style='font-size:12px; color:#888;'>Echipa Chef Audit Pro</p>
          </div>
        </body>
        </html>
        ";

        // Setări Header pentru HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Chef Audit <no-reply@domeniultau.ro>' . "\r\n"; // Pune domeniul tău aici

        // Trimite email-ul
        mail($to, $subject, $message, $headers);

        // --- 5. REDIRECȚIONARE ÎNAPOI PE SITE CU MESAJ DE SUCCES ---
        echo "<script>
                alert('Felicitări! Solicitarea a fost trimisă. Verifică-ți emailul.');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
