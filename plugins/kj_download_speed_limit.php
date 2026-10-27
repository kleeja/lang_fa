<?php
//
// kj_download_speed_limit in Persian: its name, its description, its message after the installation and its words,
// with the keys of kj_download_speed_limit_translations()
//

return [
    'title' => 'محدودیت سرعت دانلود',
    'description' => 'بیشترین سرعت دانلود هر گروه را بر حسب کیلوبایت بر ثانیه تعیین کنید تا در پهنای باند سرور خود صرفه‌جویی کنید.',
    'first_run' => "
این افزونه فیلد محدودیت سرعت دانلود را به تنظیمات هر گروه اضافه می‌کند و تا زمانی که آن را تنظیم نکنید هیچ گروهی محدودیت ندارد.
برای تعیین سرعت یک گروه، در مدیریت گروه‌ها روی آن ویرایش اطلاعات را انتخاب کنید و سرعت را بر حسب KB/s بنویسید، یا ۰ برای بدون محدودیت.
<br>
<a href='./index.php?cp=g_users'>مدیریت گروه‌ها</a> -
<a href='./index.php?cp=s_help#help-kj_download_speed_limit'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/kj_download_speed_limit/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'KJ_DOWNLOAD_SPEED_LIMIT_NUMBER' =>
            'محدودیت سرعت دانلود <small>بیشترین سرعت هر دانلود برای این گروه. برای بدون محدودیت آن را ۰ بگذارید.</small>',
        'KJ_DOWNLOAD_SPEED_LIMIT_UNIT' => 'KB/s',
    ],
];
