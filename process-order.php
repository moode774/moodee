<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استخراج البيانات من النموذج
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];
    $name = $_POST["name"];
    $transaction = $_POST["transaction"];

    // إعداد محتوى البريد الإلكتروني
    $to = "mnzar7162@GMAIL.COM"; // عنوان البريد الإلكتروني الذي تريد أن ترسل إليه
    $subject = "طلب جديد من متجر الكميات";
    $message = "منتج: $product\n";
    $message .= "الكمية: $quantity\n";
    $message .= "اسم المستخدم: $name\n";
    $message .= "رقم عملية التحويل: $transaction\n";

    // إرسال البريد الإلكتروني
    mail($to, $subject, $message);

    // يمكنك إجراء المزيد من المعالجة أو إعادة التوجيه إلى صفحة تأكيد
    header("Location: confirmation.html");
} else {
    // إذا تم الوصول إلى هذا الملف بدون نموذج POST، يمكنك توجيه المستخدم إلى الصفحة الرئيسية أو صفحة الخطأ
    header("Location: index.html");
}
?>
