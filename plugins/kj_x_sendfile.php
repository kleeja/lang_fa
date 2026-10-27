<?php
//
// kj_x_sendfile in Persian: its name, its description, its message after the installation and its words,
// with the keys of kj_x_sendfile_translations()
//

return [
    'title' => 'دانلود با X-Sendfile',
    'description' => 'بگذارید Apache یا Nginx دانلودها، تصاویر و تصاویر بندانگشتی را به‌جای عبور از PHP با X-Sendfile یا X-Accel-Redirect بفرستد، برای دانلود سریع‌تر و بار سبک‌تر روی سرور.',
    'first_run' => "
این افزونه زبانه تنظیمات X-Sendfile را به صفحه تنظیمات اضافه می‌کند و تا زمانی که روشنش نکنید خاموش می‌ماند.
ابتدا وب‌سرور خود را همان‌طور که راهنمای افزونه نشان می‌دهد آماده کنید، سپس سرور خود را انتخاب کنید و ارسال فایل‌ها از طریق وب‌سرور را روی بله بگذارید.
<br>
<a href='./index.php?cp=options&amp;smt=kj_x_sendfile'>تنظیمات X-Sendfile</a> -
<a href='./index.php?cp=s_help#help-kj_x_sendfile'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/kj_x_sendfile/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'CONFIG_KLJ_MENUS_KJ_X_SENDFILE' => 'تنظیمات X-Sendfile',
        'KJ_X_SENDFILE_TYPE' =>
            'وب‌سرور <small>سروری که سایت شما را اجرا می‌کند. Apache به ماژول mod_xsendfile نیاز دارد و Nginx از ابتدا از X-Accel-Redirect پشتیبانی می‌کند.</small>',
        'KJ_X_SENDFILE_ENABLE' =>
            'ارسال فایل‌ها از طریق وب‌سرور <small>وب‌سرور شما به‌جای PHP دانلودها، تصاویر و تصاویر بندانگشتی را می‌فرستد. ابتدا سرور را همان‌طور که راهنمای افزونه نشان می‌دهد آماده کنید، وگرنه بازدیدکنندگان فایل‌های خالی می‌گیرند.</small>',
        'KJ_X_SENDFILE_APACHE' => 'Apache (X-Sendfile)',
        'KJ_X_SENDFILE_NGINX' => 'Nginx (X-Accel-Redirect)',
    ],
];
