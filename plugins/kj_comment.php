<?php
//
// kj_comment in Persian: its name, its description, its message after the installation and its words,
// with the keys of kj_comment_translations(). Some words go in attributes of HTML, so they have no double quotes
//

return [
    'title' => 'دیدگاه‌های کلیجا',
    'description' => 'افزودن دیدگاه به فایل‌ها',
    'first_run' => "
این افزونه یک کادر دیدگاه به صفحه دانلود هر فایل اضافه کرد که اعضای واردشده دیدگاه‌هایشان را در آن می‌نویسند،
و صفحه مدیریت دیدگاه‌ها را به پنل مدیریت اضافه کرد که در آن دیدگاه‌های کل سایت را می‌خوانید و حذف می‌کنید.
<br>
<a href='./index.php?cp=comment_manager'>مدیریت دیدگاه‌ها</a> -
<a href='./index.php?cp=s_help#help-kj_comment'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/kj_comment/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'NO_4_GUEST' => 'برای پیوستن به گفتگو وارد شوید.',
        'COMNTS' => 'دیدگاه‌ها',
        'COMNT' => 'دیدگاه',
        'ADD_COMNT' => 'افزودن دیدگاه',
        'R_COMMENT_MANAGER' => 'مدیریت دیدگاه‌ها',
        'KJC_PLACEHOLDER' => 'دیدگاهی بنویسید…',
        'KJC_SEND' => 'ارسال دیدگاه',
        'KJC_SHORTCUT' => 'Ctrl + Enter برای ارسال',
        'KJC_EMPTY_LIST' => 'هنوز دیدگاهی نیست. نخستین دیدگاه را شما بنویسید.',
        'KJC_EMPTY' => 'پیش از ارسال چیزی بنویسید.',
        'KJC_TOO_LONG' => 'دیدگاه حداکثر می‌تواند %s نویسه باشد.',
        'KJC_ADDED' => 'دیدگاه شما ارسال شد.',
        'KJC_DELETED' => 'دیدگاه حذف شد.',
        'KJC_DELETE_CONFIRM' => 'این دیدگاه حذف شود؟ این کار قابل بازگشت نیست.',
        'KJC_NOT_FOUND' => 'این دیدگاه دیگر وجود ندارد یا شما نمی‌توانید آن را حذف کنید.',
        'KJC_UPLOADER' => 'بارگذارنده',
        'KJC_ADMIN_HINT' => 'دیدگاه‌هایی که روی فایل‌های سایت نوشته شده‌اند، از جدیدترین.',
    ],
];
