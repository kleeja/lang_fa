<?php
//
// thumbs_generator in Persian: its name, its description, its message after the installation and its words,
// with the keys of thumbs_generator_translations()
//

return [
    'title' => 'سازنده تصاویر بندانگشتی',
    'description' => 'تصاویر بندانگشتی ناموجود تصاویری را که از قبل بارگذاری شده‌اند، با یک کلیک از پنل مدیریت بسازید.',
    'first_run' => "
این افزونه صفحه سازنده تصاویر بندانگشتی را به پنل مدیریت اضافه کرد. آنجا روی ساخت تصاویر بندانگشتی ناموجود کلیک کنید
تا هر تصویر بارگذاری‌شده‌ای که تصویر بندانگشتی ندارد، یکی با اندازه تعیین‌شده در تنظیمات بارگذاری بگیرد.
<br>
<a href='./index.php?cp=thumbs_generator'>سازنده تصاویر بندانگشتی</a> -
<a href='./index.php?cp=s_help#help-thumbs_generator'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/thumbs_generator/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'R_THUMBS_GENERATOR' => 'سازنده تصاویر بندانگشتی',
        'THUMBS_GENERATOR_INTRO' =>
            'برای هر تصویر بارگذاری‌شده‌ای که تصویر بندانگشتی ندارد یکی بسازید، مانند تصاویری که وقتی پوشه thumbs وجود نداشت بارگذاری شدند. تصاویری که از قبل تصویر بندانگشتی دارند دست‌نخورده می‌مانند.',
        'THUMBS_GENERATOR_DETAILS' => 'جزئیات',
        'THUMBS_GENERATOR_IMAGES' => 'تصاویر بارگذاری‌شده',
        'THUMBS_GENERATOR_SIZE' => 'اندازه تصویر بندانگشتی',
        'THUMBS_GENERATOR_LIBRARY' => 'کتابخانه تصویر',
        'THUMBS_GENERATOR_CHANGE_SIZE' => 'تغییر اندازه',
        'THUMBS_GENERATOR_START' => 'ساخت تصاویر بندانگشتی ناموجود',
        'THUMBS_GENERATOR_CONTINUE' => 'ادامه',
        'THUMBS_GENERATOR_RUNNING' => 'در حال ساخت تصاویر بندانگشتی. تا پایان کار این صفحه را باز نگه دارید.',
        'THUMBS_GENERATOR_PROGRESS' => '%1$s از %2$s تصویر بررسی شد',
        'THUMBS_GENERATOR_CREATED' => 'تصاویر بندانگشتی ساخته‌شده',
        'THUMBS_GENERATOR_EXISTING' => 'از قبل تصویر بندانگشتی داشتند',
        'THUMBS_GENERATOR_MISSING' => 'فایل اصلی پیدا نشد',
        'THUMBS_GENERATOR_FAILED' => 'ساخته نشد',
        'THUMBS_GENERATOR_DONE' => 'تمام شد. همه تصاویر بررسی شدند.',
        'THUMBS_GENERATOR_PARTIAL' =>
            'برخی تصاویر هنوز بررسی نشده‌اند، چون زمان مجاز یک درخواست تمام شد. برای ادامه دوباره بسازید.',
        'THUMBS_GENERATOR_FAILED_NOTE' =>
            'تصاویری که تصویر بندانگشتی نگرفتند ممکن است آسیب‌دیده یا برای حافظه در دسترس PHP خیلی بزرگ باشند، یا پوشه thumbs آن‌ها قابل‌نوشتن نباشد.',
        'THUMBS_GENERATOR_MISSING_NOTE' =>
            'تصاویری که فایل اصلی‌شان پیدا نشد در پایگاه داده فهرست شده‌اند، اما فایل‌هایشان روی این سرور نیست.',
        'THUMBS_GENERATOR_ERROR' =>
            'سازنده متوقف شد چون سرور طبق انتظار پاسخ نداد. روی ادامه کلیک کنید تا از جایی که متوقف شد ادامه دهد.',
        'THUMBS_GENERATOR_SESSION' =>
            'نشست پنل مدیریت شما پایان یافته است. این صفحه را دوباره بارگذاری کنید، دوباره وارد شوید و سازنده را دوباره شروع کنید.',
        'THUMBS_GENERATOR_NO_IMAGES' => 'هنوز تصویری بارگذاری نشده است.',
        'THUMBS_GENERATOR_NO_LIBRARY' =>
            'تصاویر بندانگشتی ساخته نمی‌شوند، چون PHP روی این سرور نه افزونه GD دارد و نه Imagick. از هاست خود بخواهید یکی از آن‌ها را فعال کند.',
        'THUMBS_GENERATOR_NO_FOLDER' =>
            'پوشه %s وجود ندارد یا قابل‌نوشتن نیست، پس تصاویر بندانگشتی بارگذاری‌های جدید آنجا ذخیره نمی‌شوند. آن را بسازید و قابل‌نوشتن کنید.',
        'THUMBS_GENERATOR_LEAVE' => 'سازنده هنوز در حال اجراست. با این حال صفحه را ترک می‌کنید؟',
    ],
];
