<?php
//
// kj_x_sendfile, its guide on the help page in Persian, with the keys of its language/help_en.php.
// The _CODE examples are left out, they stay in English
//

return [
    'KJ_X_SENDFILE_HELP_TITLE' => 'دانلود با X-Sendfile',
    'KJ_X_SENDFILE_HELP_INTRO' =>
        'جابه‌جایی فایل‌ها را به وب‌سرور خود بسپارید. کلیجا همچنان هر درخواست را بررسی می‌کند، دانلود را می‌شمارد و نام فایل را می‌دهد، سپس Apache (mod_xsendfile) یا Nginx (X-Accel-Redirect) خود فایل را می‌فرستد، پس یک دانلود طولانی دیگر PHP را مشغول نگه نمی‌دارد.',

    'KJ_X_SENDFILE_HELP_FEATURE_1' =>
        'هر فایلی را که کلیجا از طریق <code>do.php</code> می‌فرستد پوشش می‌دهد: دانلودها، تصاویر و تصاویر بندانگشتی، با پیوند شناسه یا نام فایل، با یا بدون <strong>بازنویسی نشانی (Mod Rewrite)</strong>.',
    'KJ_X_SENDFILE_HELP_FEATURE_2' =>
        'کلیجا سهم خود را از هر دانلود نگه می‌دارد: فایل را بررسی می‌کند، دانلود را می‌شمارد و نوع فایل و نام اصلی آن را می‌فرستد. فقط جابه‌جایی به وب‌سرور منتقل می‌شود.',
    'KJ_X_SENDFILE_HELP_FEATURE_3' =>
        'وب‌سرور دانلودهای قطع‌شده را ادامه می‌دهد، بخش‌هایی از فایل را به نرم‌افزارهای مدیریت دانلود و پخش‌کننده‌های ویدیو می‌فرستد و سرآیندهای حافظه نهان را اضافه می‌کند، همان‌طور که برای هر فایل ایستا انجام می‌دهد.',
    'KJ_X_SENDFILE_HELP_FEATURE_4' =>
        'با کلیجا در یک زیرپوشه و با نام فایل‌هایی که فاصله، نماد یا حروف غیرلاتین دارند کار می‌کند.',
    'KJ_X_SENDFILE_HELP_FEATURE_5' =>
        'برخی فایل‌ها مانند قبل از PHP می‌گذرند: تصویر جایگزینی که برای تصویر ناموجود نشان داده می‌شود، و دانلودهایی که افزونه <strong>محدودیت سرعت دانلود</strong> برای یک گروه کند می‌کند.',

    'KJ_X_SENDFILE_HELP_STEP_TITLE' => 'راه‌اندازی X-Sendfile',
    'KJ_X_SENDFILE_HELP_STEP_1' => 'وب‌سرور خود را همان‌طور که نمونه Apache یا Nginx زیر نشان می‌دهد آماده کنید.',
    'KJ_X_SENDFILE_HELP_STEP_2' =>
        'در کلیجا، <strong>تنظیمات</strong> و سپس <strong>تنظیمات X-Sendfile</strong> را باز کنید.',
    'KJ_X_SENDFILE_HELP_STEP_3' =>
        '<strong>وب‌سرور</strong> خود را انتخاب کنید، <strong>ارسال فایل‌ها از طریق وب‌سرور</strong> را روی <strong>بله</strong> بگذارید و روی <strong>به‌روزرسانی تنظیمات</strong> کلیک کنید.',
    'KJ_X_SENDFILE_HELP_STEP_4' =>
        'در یک پنجره خصوصی، فایلی را از صفحه دانلودش دانلود کنید و بررسی کنید که باز می‌شود و حجم کامل خود را دارد. اگر فایل خالی است، <strong>ارسال فایل‌ها از طریق وب‌سرور</strong> را به <strong>خیر</strong> برگردانید، سپس پیکربندی سرور را بررسی کنید.',

    'KJ_X_SENDFILE_HELP_APACHE_TITLE' => 'نمونه Apache',
    'KJ_X_SENDFILE_HELP_NGINX_TITLE' => 'نمونه Nginx',

    'KJ_X_SENDFILE_HELP_FAQ_Q_1' => 'از وقتی افزونه را روشن کردم دانلودها خالی‌اند. چرا؟',
    'KJ_X_SENDFILE_HELP_FAQ_A_1' =>
        'وب‌سرور به سرآیند واکنشی نشان نداده، پس هیچ چیزی فایل را نفرستاده است. در Apache بررسی کنید که mod_xsendfile بارگذاری شده باشد و <code>XSendFile On</code> روی پوشه کلیجا اعمال شود. همچنین بررسی کنید که <strong>وب‌سرور</strong> با سروری که سایت شما را اجرا می‌کند یکی باشد: Nginx سرآیند Apache را نادیده می‌گیرد. تا زمانی که درست شود، <strong>ارسال فایل‌ها از طریق وب‌سرور</strong> را روی <strong>خیر</strong> بگذارید تا PHP دوباره فایل‌ها را بفرستد.',
    'KJ_X_SENDFILE_HELP_FAQ_Q_2' => 'Nginx پاسخ ⁦403 Forbidden⁩ یا ⁦404 Not Found⁩ می‌دهد. چرا؟',
    'KJ_X_SENDFILE_HELP_FAQ_A_2' =>
        'Nginx هر فایل را در نشانی آن در پوشه بارگذاری جستجو می‌کند، پس آن نشانی باید به پوشه برسد. قاعده <code dir="ltr">deny all;</code> روی پوشه، افزونه را هم مسدود می‌کند (403). برای پنهان‌کردن پوشه از بازدیدکنندگان و اجازه استفاده افزونه از آن، به‌جایش <code dir="ltr">internal;</code> بنویسید، اما فقط اگر نه <strong>شکل نشانی فایل‌ها</strong> و نه <strong>شکل نشانی تصاویر</strong> روی <strong>مستقیم</strong> باشد، چون پیوندهای مستقیم خود پوشه را باز می‌کنند.',
    'KJ_X_SENDFILE_HELP_FAQ_Q_3' => 'Apache پاسخ ⁦500 Internal Server Error⁩ یا ⁦404 Not Found⁩ می‌دهد. چرا؟',
    'KJ_X_SENDFILE_HELP_FAQ_A_3' =>
        'خطای 500 معمولاً یعنی <code>XSendFile On</code> در فایل <code dir="ltr">.htaccess</code>‌ای است که Apache آن را آنجا اجازه نمی‌دهد: خط را به <code dir="ltr">&lt;VirtualHost&gt;</code> ببرید، یا <code>AllowOverride FileInfo</code> را برای پوشه کلیجا مجاز کنید. خطای 404 یعنی Apache فایل را در مسیری که PHP به آن می‌دهد پیدا نمی‌کند. وقتی PHP در کانتینر دیگری اجرا می‌شود، Apache باید پوشه کلیجا را در همان مسیر ببیند. وقتی پوشه بیرون از مسیرهایی است که mod_xsendfile می‌پذیرد، <code>XSendFilePath</code> را با مسیر کامل پوشه کلیجا به <code dir="ltr">&lt;VirtualHost&gt;</code> اضافه کنید.',
    'KJ_X_SENDFILE_HELP_FAQ_Q_4' => 'چطور بررسی کنم که وب‌سرور فایل‌ها را می‌فرستد؟',
    'KJ_X_SENDFILE_HELP_FAQ_A_4' =>
        'ابزارهای توسعه‌دهنده مرورگر خود را باز کنید، یک فایل را دانلود کنید و پاسخ آن را در زبانه Network ببینید. فایلی که وب‌سرور می‌فرستد سرآیند <code>ETag</code> دارد و فایلی که PHP می‌فرستد ندارد.',
    'KJ_X_SENDFILE_HELP_FAQ_Q_5' => 'آیا افزونه با افزونه محدودیت سرعت دانلود کار می‌کند؟',
    'KJ_X_SENDFILE_HELP_FAQ_A_5' =>
        'بله. دانلودهای گروهی که محدودیت سرعت دارد از PHP می‌گذرند که آن‌ها را با همان سرعت نگه می‌دارد. دانلودهای گروه‌های دیگر از وب‌سرور می‌گذرند.',

    'KJ_X_SENDFILE_HELP_TIP_1' =>
        'افزونه بیشترین کمک را در سایت‌هایی با فایل‌های بزرگ یا دانلودهای هم‌زمان زیاد می‌کند، جایی که هر دانلود تا پایانش یک پردازه PHP را مشغول نگه می‌داشت.',
    'KJ_X_SENDFILE_HELP_TIP_2' =>
        'پشت Cloudflare یا پراکسی دیگر، وب‌سروری را که کلیجا را اجرا می‌کند آماده کنید، نه پراکسی را.',

    'KJ_X_SENDFILE_HELP_WARNING_1' =>
        'پیش از آماده‌شدن وب‌سرور، <strong>ارسال فایل‌ها از طریق وب‌سرور</strong> را روی <strong>بله</strong> نگذارید: بازدیدکنندگان فایل‌های خالی دانلود می‌کنند.',
    'KJ_X_SENDFILE_HELP_WARNING_2' =>
        'وقتی سایت را به سرور دیگری منتقل می‌کنید، <strong>وب‌سرور</strong> و پیکربندی سرور را دوباره بررسی کنید.',

    'KJ_X_SENDFILE_HELP_NOTE' =>
        'زبانه <strong>تنظیمات X-Sendfile</strong> متعلق به افزونه <strong>دانلود با X-Sendfile</strong> است. <a href="#help-kj_x_sendfile">راهنمای آن را بخوانید</a>.',
];
