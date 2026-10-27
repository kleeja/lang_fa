<?php
//
// kj_recaptcha, its guide on the help page in Persian, with the keys of its language/help_en.php.
// The labels of the reCAPTCHA admin console stay as Google shows them
//

return [
    'KJ_RECAPTCHA_HELP_TITLE' => 'محافظت reCAPTCHA',
    'KJ_RECAPTCHA_HELP_INTRO' =>
        'ربات‌ها و هرزنامه را با Google reCAPTCHA متوقف کنید. افزونه جای کد امنیتی کلیجا را در فرم‌های شما می‌گیرد و از ورود به پنل مدیریت محافظت می‌کند، با کادر reCAPTCHA v2، نشان نامرئی v2 یا reCAPTCHA v3.',

    'KJ_RECAPTCHA_HELP_FEATURE_1' =>
        'وقتی <strong>فعال‌سازی کپچا در کلیجا</strong> روشن باشد، فرم‌های ورود، ثبت‌نام، بازیابی گذرواژه، <strong>تماس با ما</strong> و <strong>گزارش</strong> به‌جای کد امنیتی، reCAPTCHA می‌خواهند.',
    'KJ_RECAPTCHA_HELP_FEATURE_2' =>
        'وقتی <strong>فعال‌سازی کد امنیتی برای دانلود</strong> روشن باشد، فرم بارگذاری پیش از پذیرفتن فایل‌ها reCAPTCHA می‌خواهد.',
    'KJ_RECAPTCHA_HELP_FEATURE_3' =>
        'ورود به پنل مدیریت همیشه reCAPTCHA می‌خواهد، به‌جای کدی که کلیجا پس از گذرواژه نادرست نشان می‌دهد.',
    'KJ_RECAPTCHA_HELP_FEATURE_4' =>
        'سه نوع: <strong>کادر «من ربات نیستم»</strong>، <strong>نشان نامرئی</strong> که فقط وقتی گوگل به ربات‌بودن مشکوک شود چالش نشان می‌دهد، و <strong>v3</strong> که هرگز چالش نشان نمی‌دهد و ارسال‌هایی را که امتیازشان زیر ۰.۵ باشد رد می‌کند.',
    'KJ_RECAPTCHA_HELP_FEATURE_5' =>
        'سرور شما هر پاسخ را با کلید مخفی شما نزد گوگل بررسی می‌کند، پس ربات نمی‌تواند با ارسال مستقیم فرم از بررسی بگذرد.',
    'KJ_RECAPTCHA_HELP_FEATURE_6' =>
        'reCAPTCHA از زبان صفحه پیروی می‌کند و کادر آن از حالت تیره قالب bootstrap و پنل مدیریت.',

    'KJ_RECAPTCHA_HELP_STEP_TITLE' => 'راه‌اندازی reCAPTCHA',
    'KJ_RECAPTCHA_HELP_STEP_1' =>
        '<a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener">کنسول مدیریت reCAPTCHA</a> را باز کنید و با حساب گوگل خود وارد شوید.',
    'KJ_RECAPTCHA_HELP_STEP_2' =>
        'به کلید یک برچسب بدهید و <strong>Score based (v3)</strong> را انتخاب کنید، یا <strong>Challenge (v2)</strong> را با <strong>“I\'m not a robot” Checkbox</strong> یا <strong>Invisible reCAPTCHA badge</strong>.',
    'KJ_RECAPTCHA_HELP_STEP_3' =>
        'دامنه سایت خود را، مانند <code>example.com</code>، بدون <code dir="ltr">https://</code> یا مسیر اضافه کنید. گوگل هر کلید را در یک پروژه Google Cloud نگه می‌دارد: یکی را انتخاب کنید یا بگذارید گوگل آن را بسازد.',
    'KJ_RECAPTCHA_HELP_STEP_4' =>
        'فرم را ارسال کنید، سپس <strong>site key</strong> و <strong>secret key</strong> را کپی کنید.',
    'KJ_RECAPTCHA_HELP_STEP_5' =>
        'در کلیجا، <strong>تنظیمات</strong> و سپس <strong>تنظیمات reCAPTCHA</strong> را باز کنید. <strong>نوع reCAPTCHA</strong> را مطابق کلیدهای خود انتخاب کنید، <strong>کلید سایت</strong> و <strong>کلید مخفی</strong> را بچسبانید و روی <strong>به‌روزرسانی تنظیمات</strong> کلیک کنید.',
    'KJ_RECAPTCHA_HELP_STEP_6' =>
        'مطمئن شوید <strong>فعال‌سازی کپچا در کلیجا</strong> (در <strong>تنظیمات رابط و طراحی</strong>) و <strong>فعال‌سازی کد امنیتی برای دانلود</strong> (در <strong>تنظیمات بارگذاری</strong>) برای فرم‌هایی که می‌خواهید محافظت شوند روشن باشند.',
    'KJ_RECAPTCHA_HELP_STEP_7' =>
        'صفحه ورود سایت خود را در یک پنجره خصوصی باز کنید و وارد شوید تا پیش از خروج از پنل مدیریت مطمئن شوید reCAPTCHA کار می‌کند.',

    'KJ_RECAPTCHA_HELP_FAQ_Q_1' => 'کدام نوع را انتخاب کنم؟',
    'KJ_RECAPTCHA_HELP_FAQ_A_1' =>
        'کادر برای بازدیدکنندگان از همه آشناتر است و هر بازدیدکننده‌ای می‌تواند با حل یک چالش از آن بگذرد. نشان نامرئی فرم را خلوت نگه می‌دارد و فقط وقتی گوگل مطمئن نیست چالش نشان می‌دهد. v3 هرگز کار بازدیدکنندگان را قطع نمی‌کند، اما بازدیدکننده‌ای با امتیاز پایین چالشی برای حل ندارد و اصلاً نمی‌تواند فرم را بفرستد. اگر بازدیدکنندگان واقعی با v3 رد می‌شوند، به یکی از انواع v2 بروید.',
    'KJ_RECAPTCHA_HELP_FAQ_Q_2' => 'همه فرم‌ها می‌گویند بررسی reCAPTCHA ناموفق بود. چرا؟',
    'KJ_RECAPTCHA_HELP_FAQ_A_2' =>
        'بررسی کنید که <strong>نوع reCAPTCHA</strong> با نوع کلیدها یکی باشد (کلید v3 به‌عنوان v2 کار نمی‌کند و کلید کادر به‌عنوان نشان نامرئی کار نمی‌کند)، دامنه سایت شما در فهرست دامنه‌های کلید باشد و سرور شما بتواند با HTTPS به <code>www.google.com</code> دسترسی پیدا کند. با <code>DEV_STAGE</code> در <code>config.php</code>، کلیجا دلیلی را که گوگل می‌دهد در <code>cache/kleeja_log.log</code> می‌نویسد.',
    'KJ_RECAPTCHA_HELP_FAQ_Q_3' => 'چرا فرم تماس با ما reCAPTCHA را نشان نمی‌دهد؟',
    'KJ_RECAPTCHA_HELP_FAQ_A_3' =>
        'reCAPTCHA فقط جایی ظاهر می‌شود که کلیجا کد امنیتی خود را می‌خواست. برای فرم‌های ورود، ثبت‌نام، بازیابی گذرواژه، <strong>تماس با ما</strong> و <strong>گزارش</strong>، <strong>فعال‌سازی کپچا در کلیجا</strong> و برای فرم بارگذاری، <strong>فعال‌سازی کد امنیتی برای دانلود</strong> را روشن کنید.',
    'KJ_RECAPTCHA_HELP_FAQ_Q_4' => 'آیا گوگل برای reCAPTCHA هزینه می‌گیرد؟',
    'KJ_RECAPTCHA_HELP_FAQ_A_4' =>
        'گوگل کلیدهای reCAPTCHA را در پروژه‌های Google Cloud نگه می‌دارد، با ۱۰٬۰۰۰ بررسی رایگان در ماه. هر ورود، ثبت‌نام، پیام یا بارگذاری یک بررسی است. اگر سایت شما بیشتر نیاز دارد، صفحه reCAPTCHA پروژه خود را در کنسول Google Cloud ببینید.',
    'KJ_RECAPTCHA_HELP_FAQ_Q_5' => 'نمی‌توانم وارد پنل مدیریت شوم. چه کنم؟',
    'KJ_RECAPTCHA_HELP_FAQ_A_5' =>
        '<code dir="ltr">define(\'STOP_CAPTCHA\', true);</code> را به <code>config.php</code> اضافه کنید. آن‌وقت ورود به پنل مدیریت reCAPTCHA را رد می‌کند. وارد شوید، کلیدها را درست کنید یا نوع را روی <strong>غیرفعال</strong> بگذارید، سپس آن خط را بردارید.',

    'KJ_RECAPTCHA_HELP_TIP_1' =>
        'برای آزمایش reCAPTCHA روی رایانه خودتان، <code>localhost</code> را به فهرست دامنه‌های یک کلید جداگانه اضافه کنید و کلیدهای واقعی را برای سایت خود نگه دارید.',
    'KJ_RECAPTCHA_HELP_TIP_2' =>
        'با v3، صفحه reCAPTCHA پروژه شما امتیاز هر فرم را با نام‌های <code>login</code>، <code>register</code>، <code>get_pass</code>، <code>call</code>، <code>report</code>، <code>upload</code> و <code>admin_login</code> نشان می‌دهد.',
    'KJ_RECAPTCHA_HELP_TIP_3' =>
        'تا زمانی که هر دو کلید را پر نکرده و نوعی انتخاب نکرده‌اید، کلیجا کد امنیتی خودش را نگه می‌دارد، پس فرم‌هایتان هیچ‌وقت بی‌محافظت نمی‌مانند.',

    'KJ_RECAPTCHA_HELP_WARNING_1' =>
        'کلید مخفی را خصوصی نگه دارید. اگر فاش شد، کلید را در کنسول مدیریت reCAPTCHA حذف کنید و کلید جدیدی بسازید.',
    'KJ_RECAPTCHA_HELP_WARNING_2' =>
        'اگر سرور شما به گوگل دسترسی نداشته باشد، همه فرم‌های محافظت‌شده رد می‌شوند، از جمله ورود به پنل مدیریت.',
    'KJ_RECAPTCHA_HELP_WARNING_3' =>
        'بازدیدکنندگان در فرم‌های محافظت‌شده اسکریپت reCAPTCHA را از گوگل بارگذاری می‌کنند. در سیاست حریم خصوصی خود به reCAPTCHA اشاره کنید و نشان reCAPTCHA را همان‌طور که شرایط گوگل می‌خواهد نمایان نگه دارید.',
    'KJ_RECAPTCHA_HELP_WARNING_4' =>
        'قالب DragDrop فایل‌ها را بدون پاسخ reCAPTCHA بارگذاری می‌کند. با این قالب، <strong>فعال‌سازی کد امنیتی برای دانلود</strong> را خاموش نگه دارید، وگرنه بارگذاری‌ها رد می‌شوند.',

    'KJ_RECAPTCHA_HELP_NOTE' =>
        'زبانه <strong>تنظیمات reCAPTCHA</strong> متعلق به افزونه <strong>محافظت reCAPTCHA</strong> است. <a href="#help-kj_recaptcha">راهنمای آن را بخوانید</a>.',
];
