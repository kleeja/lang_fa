<?php
//
// pdf_viewer in Persian: its name, its description, its message after the installation and its words,
// with the keys of pdf_viewer_translations(). Most words go in attributes of HTML, so they have no double quotes
//

return [
    'title' => 'نمایشگر PDF',
    'description' => 'بگذارید بازدیدکنندگان فایل‌های PDF را پیش از دانلود، در صفحه دانلودشان با نمایشگر PDF.js موزیلا بخوانند.',
    'first_run' => "
این افزونه فایل‌های PDF را در صفحه دانلودشان، زیر جزئیات فایل نشان می‌دهد و به هیچ تنظیمی نیاز ندارد.
یک فایل PDF بارگذاری کنید و صفحه دانلود آن را باز کنید تا آن را ببینید.
<br>
<a href='./index.php?cp=s_help#help-pdf_viewer'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/pdf_viewer/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'PDF_VIEWER_TITLE' => 'پیش‌نمایش PDF',
        'PDF_VIEWER_TOOLBAR' => 'کنترل‌های نمایشگر',
        'PDF_VIEWER_PAGES' => 'صفحه‌های سند',
        'PDF_VIEWER_PREVIOUS' => 'صفحه قبل',
        'PDF_VIEWER_NEXT' => 'صفحه بعد',
        'PDF_VIEWER_PAGE' => 'صفحه',
        'PDF_VIEWER_OF' => 'از',
        'PDF_VIEWER_ZOOM' => 'بزرگ‌نمایی',
        'PDF_VIEWER_ZOOM_IN' => 'بزرگ‌تر',
        'PDF_VIEWER_ZOOM_OUT' => 'کوچک‌تر',
        'PDF_VIEWER_ZOOM_AUTO' => 'بزرگ‌نمایی خودکار',
        'PDF_VIEWER_ZOOM_ACTUAL' => 'اندازه واقعی',
        'PDF_VIEWER_ZOOM_FIT' => 'اندازه صفحه',
        'PDF_VIEWER_ZOOM_WIDTH' => 'اندازه عرض',
        'PDF_VIEWER_PRESENTATION' => 'حالت ارائه',
        'PDF_VIEWER_FULLSCREEN' => 'تمام‌صفحه',
        'PDF_VIEWER_LOADING' => 'در حال بارگذاری سند…',
        'PDF_VIEWER_ERROR' => 'این فایل را نمی‌توان اینجا پیش‌نمایش کرد. همچنان می‌توانید آن را دانلود کنید.',
        'PDF_VIEWER_ERROR_PASSWORD' =>
            'این فایل با گذرواژه محافظت شده، پس نمی‌توان آن را اینجا پیش‌نمایش کرد. برای باز کردن آن را دانلود کنید.',
    ],
];
