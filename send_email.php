<?php
header('Content-Type: application/json'); // Penting agar JavaScript membaca sebagai JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars(trim($_POST['name'] ?? '')); // Gunakan ?? '' untuk PHP 7+ dan default jika tidak ada
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $pesan = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validasi sederhana
    if (empty($nama) || empty($email) || empty($pesan)) {
        echo json_encode(['status' => 'error', 'message' => 'Semua kolom harus diisi.']); // <-- Ubah ke 'status'
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Format email tidak valid.']); // <-- Ubah ke 'status'
        exit;
    }

    $to = "mbclab1234@gmail.com"; // Ganti dengan email tujuan Anda
    $subject = "Pesan dari Website MBC Laboratory: " . $nama;
    $body = "Nama: " . $nama . "\n" .
            "Email: " . $email . "\n" .
            "Pesan:\n" . $pesan;
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Pesan berhasil dikirim.']); // <-- Ubah ke 'status'
    } else {
        // Untuk debugging, Anda bisa tambahkan error_get_last()
        // $error = error_get_last();
        // error_log("Mail sending failed: " . print_r($error, true));
        echo json_encode(['status' => 'error', 'message' => 'Terjadi kesalahan saat mengirim pesan.']); // <-- Ubah ke 'status'
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Metode permintaan tidak valid.']); // <-- Ubah ke 'status'
}
?>