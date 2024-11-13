<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $description = htmlspecialchars($_POST['description']);

    $to = "ramdanfathir015@gmail.com";
    $subject = "Pesan dari $email";
    $message = "Email: $email\n\nDeskripsi Masalah:\n$description";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Pengiriman pesan gagal. Silakan coba lagi.'); window.location.href='contact_form.php';</script>";
    }
} else {
    header("Location: contact_form.php");
    exit();
}
