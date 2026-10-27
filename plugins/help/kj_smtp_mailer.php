<?php
//
// kj_smtp_mailer, its guide on the help page in Persian, with the keys of its language/help_en.php.
// The plugin has its own Persian words, title and message after the installation, so it has no plugins/kj_smtp_mailer.php:
// the names in <strong> are its Persian words, in kj_smtp_mailer_translations() of its functions.php
//

return [
    'KJ_SMTP_MAILER_HELP_TITLE' => 'ارسال ایمیل SMTP کلیجا',
    'KJ_SMTP_MAILER_HELP_INTRO' =>
        'ایمیل‌های سایت خود را به‌جای تابع mail در PHP از طریق سرور SMTP خودتان بفرستید. هر پیام با یک صندوق ایمیل واقعی وارد می‌شود، که پیام‌های بازیابی گذرواژه و پاسخ‌های شما را از پوشه هرزنامه دور نگه می‌دارد و روی هاست‌هایی که تابع mail در PHP را مسدود می‌کنند کار می‌کند.',

    'KJ_SMTP_MAILER_HELP_FEATURE_1' =>
        'همه پیام‌های کلیجا را می‌فرستد: بازیابی گذرواژه، پاسخ‌های شما از <strong>پیام‌ها</strong> و <strong>گزارش‌ها</strong> و هشدارهای پیام‌ها و گزارش‌های جدید.',
    'KJ_SMTP_MAILER_HELP_FEATURE_2' =>
        'زبانه <strong>تنظیمات آماده</strong> تنظیمات سرور Hostinger یا Gmail را با یک کلیک پر می‌کند.',
    'KJ_SMTP_MAILER_HELP_FEATURE_3' =>
        'زبانه <strong>وضعیت و آزمایش</strong> نشان می‌دهد که آیا افزونه ایمیل‌های سایت را می‌فرستد، آنچه هنوز کم است را فهرست می‌کند و یک پیام آزمایشی می‌فرستد. وقتی سرور پیام آزمایشی را رد کند، صفحه دلیلی را که سرور می‌دهد نشان می‌دهد.',
    'KJ_SMTP_MAILER_HELP_FEATURE_4' =>
        'تا زمانی که تنظیمات آن کامل نشده، افزونه به ایمیل‌ها کاری ندارد و کلیجا همچنان آن‌ها را با تابع mail در PHP می‌فرستد.',
    'KJ_SMTP_MAILER_HELP_FEATURE_5' =>
        'هشدارهای پیام‌ها و گزارش‌های جدید نشانی بازدیدکننده را دارند. افزونه آن‌ها را از نشانی خودتان می‌فرستد و نشانی بازدیدکننده را به‌عنوان نشانی پاسخ اضافه می‌کند تا بتوانید مستقیم به بازدیدکننده پاسخ دهید.',
    'KJ_SMTP_MAILER_HELP_FEATURE_6' =>
        'پیام‌ها طراحی ایمیل‌های کلیجا را حفظ می‌کنند، با یک نسخه متن ساده برای برنامه‌های ایمیلی که HTML نشان نمی‌دهند.',

    'KJ_SMTP_MAILER_HELP_STEP_TITLE' => 'راه‌اندازی ارسال ایمیل SMTP',
    'KJ_SMTP_MAILER_HELP_STEP_1' =>
        'یک صندوق ایمیل برای سایت نزد هاست یا ارائه‌دهنده ایمیل خود بسازید، مانند <code>noreply@yourdomain.com</code>، و سرور SMTP، درگاه، نام کاربری و گذرواژه آن را یادداشت کنید.',
    'KJ_SMTP_MAILER_HELP_STEP_2' =>
        'اگر ارائه‌دهنده شما در زبانه <strong>تنظیمات آماده</strong> صفحه <strong>ارسال ایمیل SMTP</strong> هست، روی کارت آن <strong>از این تنظیمات استفاده کن</strong> را بزنید.',
    'KJ_SMTP_MAILER_HELP_STEP_3' =>
        '<strong>تنظیمات</strong> و سپس <strong>ارسال ایمیل SMTP</strong> را باز کنید. فیلدهایی را که هنوز خالی‌اند، همان‌طور که فهرست زیر توضیح می‌دهد، پر کنید و روی <strong>به‌روزرسانی تنظیمات</strong> کلیک کنید.',
    'KJ_SMTP_MAILER_HELP_STEP_4' =>
        'در زبانه <strong>وضعیت و آزمایش</strong> بررسی کنید که صفحه می‌گوید ایمیل‌های سایت از طریق سرور SMTP شما ارسال می‌شوند.',
    'KJ_SMTP_MAILER_HELP_STEP_5' =>
        'نشانی خودتان را در <strong>ارسال به</strong> وارد کنید، روی <strong>ارسال آزمایشی</strong> کلیک کنید و بررسی کنید که پیام به صندوق ورودی شما می‌رسد.',

    'KJ_SMTP_MAILER_HELP_SETTING_TITLE' => 'تنظیمات',
    'KJ_SMTP_MAILER_HELP_SETTING_1' =>
        '<strong>ایمیل فرستنده</strong> و <strong>نام فرستنده</strong>: نشانی و نامی که پیام‌های شما از آن فرستاده می‌شوند. بیشتر سرورها فقط نشانی صندوقی را که وارد می‌شود، یا نشانی‌ای از همان دامنه را می‌پذیرند.',
    'KJ_SMTP_MAILER_HELP_SETTING_2' =>
        '<strong>همیشه از این نشانی ارسال کن</strong> و <strong>همیشه با این نام ارسال کن</strong>: وقتی <strong>بله</strong> باشند، هر پیام از نشانی و نام بالا فرستاده می‌شود. وقتی <strong>خیر</strong> باشند، پیام از نشانی و نامی فرستاده می‌شود که کلیجا به آن می‌دهد، که برای هشدارهای پیام‌ها و گزارش‌های جدید، نشانی و نام بازدیدکننده است.',
    'KJ_SMTP_MAILER_HELP_SETTING_3' =>
        '<strong>میزبان SMTP</strong>: نشانی سرور ایمیل، مانند <code>smtp.gmail.com</code>.',
    'KJ_SMTP_MAILER_HELP_SETTING_4' =>
        '<strong>درگاه SMTP</strong> و <strong>رمزنگاری SMTP</strong>: از درگاه ۵۸۷ با <strong>TLS</strong> یا درگاه ۴۶۵ با <strong>SSL</strong> استفاده کنید. درگاه خالی یعنی ۴۶۵ با <strong>SSL</strong> و در غیر این صورت ۵۸۷. <strong>بدون رمزنگاری</strong> همچنان اتصال را رمزگذاری می‌کند اگر سرور از آن پشتیبانی کند.',
    'KJ_SMTP_MAILER_HELP_SETTING_5' =>
        '<strong>احراز هویت SMTP</strong>: آن را روی <strong>بله</strong> نگه دارید، مگر اینکه سرور شما ایمیل سایت را بدون ورود بپذیرد.',
    'KJ_SMTP_MAILER_HELP_SETTING_6' =>
        '<strong>نام کاربری SMTP</strong> و <strong>گذرواژه SMTP</strong>: اطلاعات ورود صندوق ایمیل. نام کاربری معمولاً نشانی ایمیل کامل است.',

    'KJ_SMTP_MAILER_HELP_FAQ_Q_1' => 'زبانه وضعیت و آزمایش می‌گوید ایمیل‌های سایت هنوز از تابع mail در PHP استفاده می‌کنند. چرا؟',
    'KJ_SMTP_MAILER_HELP_FAQ_A_1' =>
        'تنظیمات هنوز کامل نیست و صفحه آنچه را کم است فهرست می‌کند: <strong>میزبان SMTP</strong>، <strong>ایمیل فرستنده</strong>، یا <strong>نام کاربری SMTP</strong> و <strong>گذرواژه SMTP</strong> وقتی <strong>احراز هویت SMTP</strong> روشن است. اگر می‌گوید کتابخانه PHPMailer وجود ندارد، افزونه را دوباره از بسته انتشار آن نصب کنید: کپی کد منبع افزونه آن را ندارد.',
    'KJ_SMTP_MAILER_HELP_FAQ_Q_2' => 'آزمایش با «Could not authenticate» شکست می‌خورد. چه چیزی را بررسی کنم؟',
    'KJ_SMTP_MAILER_HELP_FAQ_A_2' =>
        'سرور نام کاربری یا گذرواژه را رد کرده است. نشانی ایمیل کامل را در <strong>نام کاربری SMTP</strong> وارد کنید و گذرواژه را دوباره بنویسید. Gmail گذرواژه حساب را اینجا نمی‌پذیرد: تأیید دومرحله‌ای را در حساب گوگل خود روشن کنید، یک گذرواژه برنامه (App Password) بسازید و آن را در <strong>گذرواژه SMTP</strong> وارد کنید.',
    'KJ_SMTP_MAILER_HELP_FAQ_Q_3' => 'آزمایش با «Could not connect to SMTP host» شکست می‌خورد. چه چیزی را بررسی کنم؟',
    'KJ_SMTP_MAILER_HELP_FAQ_A_3' =>
        'کلیجا نتوانست به سرور برسد. <strong>میزبان SMTP</strong> را بررسی کنید و مطمئن شوید <strong>درگاه SMTP</strong> و <strong>رمزنگاری SMTP</strong> با هم جورند: ۵۸۷ با <strong>TLS</strong>، ۴۶۵ با <strong>SSL</strong>. بسیاری از هاست‌ها درگاه‌های ارسال ایمیل را مسدود می‌کنند. درگاه دیگر را امتحان کنید یا از هاست بخواهید آن را باز کند. درگاه مسدود ممکن است آزمایش را تا ۳۰ ثانیه پیش از شکست منتظر نگه دارد.',
    'KJ_SMTP_MAILER_HELP_FAQ_Q_4' => 'سرور پیام آزمایشی را پذیرفت، اما پیام نرسید. چرا؟',
    'KJ_SMTP_MAILER_HELP_FAQ_A_4' =>
        'ابتدا پوشه هرزنامه را نگاه کنید. سپس بررسی کنید که <strong>ایمیل فرستنده</strong> نشانی صندوقی باشد که وارد می‌شود یا نشانی‌ای از همان دامنه، و دامنه رکوردهای SPF و DKIM داشته باشد. هاست یا ارائه‌دهنده ایمیل شما توضیح می‌دهد چطور آن‌ها را اضافه کنید.',
    'KJ_SMTP_MAILER_HELP_FAQ_Q_5' => 'کجا ببینم چرا یک پیام سایت فرستاده نشد؟',
    'KJ_SMTP_MAILER_HELP_FAQ_A_5' =>
        'در گزارش خطای PHP سرور شما، در خطی که با <code dir="ltr">kj_smtp_mailer:</code> شروع می‌شود. دلیلی که سرور داده و بخشی از نشانی در آن است. محتوای پیام آنجا نوشته نمی‌شود، چون ممکن است گذرواژه‌ای جدید در آن باشد.',

    'KJ_SMTP_MAILER_HELP_TIP_1' =>
        'به‌جای نشانی شخصی خود، ایمیل را از صندوقی بفرستید که برای سایت ساخته شده، مانند <code>noreply@yourdomain.com</code>.',
    'KJ_SMTP_MAILER_HELP_TIP_2' => 'پس از تغییر هر تنظیم، دوباره یک پیام آزمایشی بفرستید.',
    'KJ_SMTP_MAILER_HELP_TIP_3' =>
        'حساب‌های ایمیل رایگان، مانند Gmail، هر روز تعداد محدودی پیام می‌فرستند. برای یک سایت پربازدید از صندوق ایمیل هاست خود یا یک سرویس ارسال ایمیل استفاده کنید.',

    'KJ_SMTP_MAILER_HELP_WARNING_1' =>
        'تنظیمات آماده جای <strong>میزبان SMTP</strong>، <strong>درگاه SMTP</strong>، <strong>رمزنگاری SMTP</strong> و <strong>احراز هویت SMTP</strong> را می‌گیرد. فرستنده، نام کاربری و گذرواژه شما همان‌طور می‌مانند.',
    'KJ_SMTP_MAILER_HELP_WARNING_2' =>
        'کلیجا <strong>گذرواژه SMTP</strong> را همان‌طور که هست در پایگاه داده خود ذخیره می‌کند. از گذرواژه‌ای استفاده کنید که حساب دیگری ندارد.',
    'KJ_SMTP_MAILER_HELP_WARNING_3' =>
        '<strong>همیشه از این نشانی ارسال کن</strong> را فقط وقتی روی <strong>خیر</strong> بگذارید که سرور شما هر فرستنده‌ای را بپذیرد. وگرنه هشدارهای پیام‌ها و گزارش‌های جدید رد می‌شوند یا به هرزنامه می‌روند.',
    'KJ_SMTP_MAILER_HELP_WARNING_4' =>
        'فقط بنیان‌گذار می‌تواند صفحه <strong>ارسال ایمیل SMTP</strong> را باز کند، چون ایمیل می‌فرستد و تنظیمات سرور را تغییر می‌دهد.',

    'KJ_SMTP_MAILER_HELP_NOTE' =>
        'زبانه <strong>ارسال ایمیل SMTP</strong> متعلق به افزونه <strong>ارسال ایمیل SMTP کلیجا</strong> است که ایمیل‌های سایت را از طریق سرور ایمیل خودتان می‌فرستد. <a href="#help-kj_smtp_mailer">راهنمای آن را بخوانید</a>.',
];
