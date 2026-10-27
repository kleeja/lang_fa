<?php
//
// advanced_watermark in Persian: its name, its description, its message after the installation and its words,
// with the keys of advanced_watermark_translations()
//

return [
    'title' => 'واترمارک پیشرفته',
    'description' => 'تصاویر بارگذاری‌شده را با تصویر یا متن دلخواه خود واترمارک کنید، جای آن، قلم و رنگ‌ها را انتخاب کنید و نتیجه را پیش‌نمایش ببینید.',
    'first_run' => "
این افزونه صفحه واترمارک تصویر را به پنل مدیریت اضافه کرد؛ آنجا انتخاب می‌کنید که تصاویر بارگذاری‌شده
با یک تصویر یا یک متن واترمارک شوند، جای آن، قلم و رنگ‌ها را تنظیم می‌کنید و نتیجه را پیش‌نمایش می‌بینید.
تصاویر گروه‌هایی واترمارک می‌شوند که «فعال‌سازی واترمارک تصویر» برایشان روشن است.
<br>
<a href='./index.php?cp=watermark_settings'>واترمارک تصویر</a> -
<a href='https://github.com/kleeja/advanced_watermark/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'R_WATERMARK_SETTINGS' => 'واترمارک تصویر',
        'WATERMARK_TYPE' => 'نوع واترمارک',
        'WATERMARK_TYPE_IMAGE' => 'تصویر',
        'WATERMARK_TYPE_TEXT' => 'متن',
        'WATERMARK_POSITION' => 'جایگاه',
        'WATERMARK_POSITION_TL' => 'بالا چپ',
        'WATERMARK_POSITION_TC' => 'بالا وسط',
        'WATERMARK_POSITION_TR' => 'بالا راست',
        'WATERMARK_POSITION_BL' => 'پایین چپ',
        'WATERMARK_POSITION_BC' => 'پایین وسط',
        'WATERMARK_POSITION_BR' => 'پایین راست',
        'WATERMARK_IMAGE_SETTINGS' => 'واترمارک تصویری',
        'WATERMARK_IMAGE_PATH' => 'تصویر واترمارک',
        'WATERMARK_IMAGE_HINT' => 'یک فایل PNG، GIF یا JPG. فایل PNG با پس‌زمینه شفاف تمیزترین نتیجه را می‌دهد.',
        'WATERMARK_IMAGE_MISSING' =>
            'فایل تصویر واترمارک پیدا نشد، پس تصاویر واترمارک نمی‌شوند. یک تصویر جدید بارگذاری کنید.',
        'WATERMARK_IMAGE_UPLOAD' => 'بارگذاری تصویر واترمارک',
        'WATERMARK_NOT_IMAGE' => 'فایل بارگذاری‌شده یک تصویر معتبر PNG، GIF یا JPG نیست.',
        'WATERMARK_TEXT_SETTINGS' => 'واترمارک متنی',
        'WATERMARK_TEXT_CONTENT' => 'متن واترمارک',
        'WATERMARK_TEXT_FONT' => 'قلم',
        'WATERMARK_TEXT_FONT_DEFAULT' => 'Arial (پیش‌فرض)',
        'WATERMARK_TEXT_FONT_KACSTOFFICE' => 'KacstOffice (فقط حروف عربی)',
        'WATERMARK_TEXT_SIZE' => 'اندازه قلم',
        'WATERMARK_TEXT_COLOR' => 'رنگ متن',
        'WATERMARK_TEXT_BACKGROUND' => 'رنگ پس‌زمینه',
        'WATERMARK_TEXT_BACKGROUND_ENABLE' => 'نمایش پس‌زمینه پشت متن',
        'WATERMARK_NOT_ENABLED_NOTE' =>
            'تصاویر فقط وقتی واترمارک می‌شوند که برای گروه بارگذارنده <strong>فعال‌سازی واترمارک تصویر</strong> روشن باشد. آن را برای هر گروه در <a href="./?cp=g_users&amp;smt=general">کاربران و گروه‌ها</a>، در بخش <strong>ویرایش اطلاعات</strong> روشن کنید.',
        'WATERMARK_PREVIEW' => 'پیش‌نمایش',
        'WATERMARK_PREVIEW_NOTE' =>
            'تنظیمات شما ذخیره شد. این تصویر نمونه نشان می‌دهد واترمارک روی تصاویر بارگذاری‌شده چگونه دیده می‌شود.',
        'WATERMARK_PREVIEW_CREDIT' => 'عکس نمونه از',
    ],
];
