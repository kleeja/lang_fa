<?php
//
// kj_recaptcha in Persian: its name, its description, its message after the installation and its words,
// with the keys of kj_recaptcha_translations()
//

return [
    'title' => 'محافظت reCAPTCHA',
    'description' => 'از فرم‌های ورود، ثبت‌نام، بازیابی گذرواژه، تماس، گزارش و بارگذاری، و ورود به پنل مدیریت با Google reCAPTCHA v2 یا v3 به‌جای کد امنیتی کلیجا محافظت کنید.',
    'first_run' => "
این افزونه زبانه تنظیمات reCAPTCHA را به صفحه تنظیمات اضافه می‌کند. کلیجا کد امنیتی خودش را نگه می‌دارد تا زمانی که
نوع reCAPTCHA را انتخاب کنید و کلید سایت و کلید مخفی‌ای را که از کنسول مدیریت Google reCAPTCHA می‌گیرید وارد کنید.
<br>
<a href='./index.php?cp=options&amp;smt=kj_recaptcha'>تنظیمات reCAPTCHA</a> -
<a href='./index.php?cp=s_help#help-kj_recaptcha'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/kj_recaptcha/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'CONFIG_KLJ_MENUS_KJ_RECAPTCHA' => 'تنظیمات reCAPTCHA',
        'KJ_RECAPTCHA_TYPE' =>
            'نوع reCAPTCHA <small>نوع کلیدهای خود را انتخاب کنید. reCAPTCHA در هر فرمی که کد امنیتی در آن فعال است جای آن را می‌گیرد و از ورود به پنل مدیریت محافظت می‌کند. تا زمانی که هر دو کلید پر نشده‌اند، کلیجا کد خودش را نگه می‌دارد.</small>',
        'KJ_RECAPTCHA_SITEKEY' =>
            'کلید سایت <small>کلید عمومی از کنسول مدیریت reCAPTCHA. مرورگر بازدیدکنندگان برای نمایش reCAPTCHA از آن استفاده می‌کند.</small>',
        'KJ_RECAPTCHA_SECRET' =>
            'کلید مخفی <small>کلید خصوصی از کنسول مدیریت reCAPTCHA. سرور شما با آن هر پاسخ را نزد گوگل بررسی می‌کند. آن را خصوصی نگه دارید.</small>',
        'KJ_RECAPTCHA_DISABLED' => 'غیرفعال (استفاده از کد امنیتی کلیجا)',
        'KJ_RECAPTCHA_DEFAULT' => 'v2: کادر «من ربات نیستم»',
        'KJ_RECAPTCHA_INVISIBLE' => 'v2: نشان نامرئی',
        'KJ_RECAPTCHA_VERSION3' => 'v3: امتیاز در پس‌زمینه، بدون چالش',
        'KJ_RECAPTCHA_FAILED' => 'بررسی reCAPTCHA ناموفق بود. لطفاً دوباره امتحان کنید.',
    ],
];
