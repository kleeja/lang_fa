<?php
//
// menu_toggle in Persian: its name, its description, its message after the installation and its words,
// with the keys of menu_toggle_translations()
//

return [
    'title' => 'نمایش و پنهان‌سازی منو',
    'description' => 'پیوندهای منوهای سایت و صفحه‌های منوی پنل مدیریت را پنهان یا نمایان کنید.',
    'first_run' => "
این افزونه تنظیمات منو را به تنظیمات پنل مدیریت اضافه کرد. آنجا می‌توانید پیوندهایی را از منوی اصلی
و منوی کاربری سایت خود، و صفحه‌هایی را از منوی پنل مدیریت پنهان کنید.
<br>
<a href='./index.php?cp=menus_toggle'>تنظیمات منو</a> -
<a href='./index.php?cp=s_help#help-menu_toggle'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/menu_toggle/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'R_MENUS_TOGGLE' => 'تنظیمات منو',
        'MENU_TOGGLE_INTRO' =>
            'انتخاب کنید کدام پیوندها در منوهای سایت شما و منوی پنل مدیریت نمایش داده شوند. پنهان‌کردن یک پیوند فقط آن را از منویش برمی‌دارد: خود صفحه همچنان از نشانی‌اش باز می‌شود.',
        'MENU_TOGGLE_TOP_MENU' => 'منوی اصلی',
        'MENU_TOGGLE_SIDE_MENU' => 'منوی کاربری',
        'MENU_TOGGLE_ADMIN_MENU' => 'منوی پنل مدیریت',
        'MENU_TOGGLE_TOP_MENU_EXP' => 'پیوندهای نوار ناوبری، در بالای هر صفحه سایت شما.',
        'MENU_TOGGLE_SIDE_MENU_EXP' =>
            'پیوندهای حساب. اعضا آن‌ها را در منوی زیر نام کاربری خود پیدا می‌کنند و مهمانان ورود و ثبت‌نام را می‌بینند.',
        'MENU_TOGGLE_ADMIN_MENU_EXP' =>
            'صفحه‌های نوار کناری پنل مدیریت، برای همه مدیران. داشبورد، تنظیمات و راهنما همیشه در آن می‌مانند.',
        'MENU_TOGGLE_HINT' =>
            'کلید یک پیوند را خاموش کنید تا پنهان شود، یا روشن کنید تا دوباره نمایش داده شود، سپس تغییرات خود را ذخیره کنید.',
        'MENU_TOGGLE_HIDDEN' => 'پنهان',
        'MENU_TOGGLE_FOR_MEMBERS' => 'برای اعضا',
        'MENU_TOGGLE_FOR_GUESTS' => 'برای مهمانان',
        'MENU_TOGGLE_SAVE' => 'ذخیره تغییرات',
        'MENU_TOGGLE_FOUNDERS_ONLY' =>
            'فقط بنیان‌گذاران می‌توانند منوی پنل مدیریت را تغییر دهند، چون همه مدیران آن را می‌بینند. از یکی از بنیان‌گذاران این سایت بخواهید آن را تغییر دهد.',
    ],
];
