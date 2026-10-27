<?php
//
// kj_amp_seo in Persian: its name, its description, its message after the installation and its words,
// with the keys of kj_amp_seo_translations()
//

return [
    'title' => 'سئوی AMP',
    'description' => 'به هر صفحه دانلود یک نسخه AMP سریع بدهید که موتورهای جستجو پیدایش کنند، با دکمه‌های اشتراک‌گذاری و تبلیغات AdSense اختیاری.',
    'first_run' => "
این افزونه به هر صفحه دانلود یک نسخه AMP سریع می‌دهد که موتورهای جستجو از طریق پیوندی
در بخش head صفحه معمولی پیدایش می‌کنند، با دکمه‌های اشتراک‌گذاری و تبلیغات AdSense اختیاری.
گزینه‌های آن در زبانه تنظیمات AMP در صفحه تنظیمات است.
<br>
<a href='./index.php?cp=options&amp;smt=kj_amp_seo'>تنظیمات AMP</a> -
<a href='https://github.com/kleeja/kj_amp_seo/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'CONFIG_KLJ_MENUS_KJ_AMP_SEO' => 'تنظیمات AMP',
        'KJ_AMP_SEO_ENABLE' =>
            'فعال‌سازی صفحه‌های دانلود AMP <small>به هر صفحه دانلود یک نسخه AMP سریع می‌دهد و از بخش head صفحه معمولی به آن پیوند می‌دهد تا موتورهای جستجو پیدایش کنند.</small>',
        'KJ_AMP_SEO_SHARE_BUTTONS' =>
            'نمایش دکمه‌های اشتراک‌گذاری <small>دکمه‌هایی برای اشتراک‌گذاری صفحه دانلود در X (توییتر)، فیسبوک، واتس‌اپ و پینترست یا با ایمیل اضافه می‌کند.</small>',
        'KJ_AMP_SEO_ADSENSE_CLIENT' =>
            'شناسه ناشر AdSense <small>مقدار data-ad-client در کد تبلیغ شما، مانند <span class="text-nowrap">ca-pub-1234567890123456</span>. تبلیغات فقط وقتی نمایش داده می‌شوند که این مقدار تنظیم شده باشد.</small>',
        'KJ_AMP_SEO_TOP_AD' =>
            'شناسه جایگاه تبلیغ بالا <small>مقدار data-ad-slot واحد تبلیغی که بالای جزئیات فایل نمایش داده می‌شود. برای نمایش‌ندادن تبلیغ در آنجا خالی بگذارید.</small>',
        'KJ_AMP_SEO_MIDDLE_AD' =>
            'شناسه جایگاه تبلیغ میانی <small>مقدار data-ad-slot واحد تبلیغی که بالای دکمه دانلود نمایش داده می‌شود. برای نمایش‌ندادن تبلیغ در آنجا خالی بگذارید.</small>',
        'KJ_AMP_SEO_STICKY_AD' =>
            'شناسه جایگاه تبلیغ چسبان <small>مقدار data-ad-slot یک واحد تبلیغ ۳۲۰×۵۰ که به‌صورت بنری ثابت در پایین صفحه‌نمایش نشان داده می‌شود. برای نمایش‌ندادن بنر خالی بگذارید.</small>',
    ],
];
