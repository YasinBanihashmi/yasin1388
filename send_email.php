<?php
// دریافت شماره از فرم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumber = $_POST['phoneNumber'];

    // تنظیمات ایمیل
    $to = "seidyasin174@example.com"; // ایمیل خود را اینجا وارد کنید
    $subject = "شماره جدید از فرم تماس";
    $message = "شماره تلفن وارد شده: " . $phoneNumber;
    $headers = "From: no-reply@example.com" . "\r\n" .
               "Reply-To: no-reply@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // ارسال ایمیل
    if (mail($to, $subject, $message, $headers)) {
        echo "ایمیل با موفقیت ارسال شد!";
    } else {
        echo "خطا در ارسال ایمیل!";
    }
} else {
    echo "درخواست نامعتبر!";
}
?>