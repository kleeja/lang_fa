<?php
//
// phpbb_integration in Persian: its name, its description, its message after the installation and its words,
// with the keys of phpbb_integration_translations()
//

return [
    'title' => 'یکپارچه‌سازی phpBB',
    'description' => 'بگذارید اعضای یک انجمن phpBB با حساب‌های انجمن خود وارد کلیجا شوند.',
    'first_run' => "
این افزونه صفحه یکپارچه‌سازی phpBB را به پنل مدیریت اضافه کرد. نشانی انجمن را وارد کنید، فایل kjauth.php را
در پوشه انجمن بگذارید، آزمایش اتصال را اجرا کنید و سپس یکپارچه‌سازی را روشن کنید تا اعضای انجمن با حساب‌های انجمن
وارد کلیجا شوند.
<br>
<a href='./index.php?cp=phpbb_settings'>یکپارچه‌سازی phpBB</a> -
<a href='./index.php?cp=s_help#help-phpbb_integration'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/phpbb_integration/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'R_PHPBB_SETTINGS' => 'یکپارچه‌سازی phpBB',
        'PHPBB_INTR_TAB_SETTINGS' => 'تنظیمات',
        'PHPBB_INTR_TAB_BRIDGE' => 'فایل kjauth.php',
        'PHPBB_INTR_TAB_TEST' => 'آزمایش اتصال',
        'PHPBB_INTR_STATUS_ON' =>
            'یکپارچه‌سازی روشن است. اعضا با حساب‌های phpBB خود وارد کلیجا می‌شوند و فقط بنیان‌گذاران انجمن می‌توانند این پنل مدیریت را باز کنند.',
        'PHPBB_INTR_STATUS_OFF' =>
            'یکپارچه‌سازی خاموش است، پس کلیجا از حساب‌های خودش استفاده می‌کند. نشانی انجمن را وارد کنید، فایل kjauth.php را در پوشه انجمن بگذارید، سپس روی <strong>آزمایش و روشن‌کردن</strong> کلیک کنید.',
        'PHPBB_INTR_STATUS_OFF_NOTE' => 'روشن‌کردن آن شما را خارج می‌کند. دوباره با حساب یکی از بنیان‌گذاران انجمن وارد شوید.',
        'PHPBB_INTR_STATUS_PAUSED' =>
            'یکپارچه‌سازی روشن است، اما <code>DISABLE_INTR</code> در config.php تعریف شده، پس تا زمانی که آن را برندارید از حساب‌های کلیجا استفاده می‌شود.',
        'PHPBB_INTR_STATUS_UPDATED' =>
            'به‌روزرسانی افزونه یکپارچه‌سازی را خاموش کرد، چون این نسخه به فایل kjauth.php جدیدی در انجمن نیاز دارد. فایل را با فایل زبانه <strong>فایل kjauth.php</strong> جایگزین کنید، سپس روی <strong>آزمایش و روشن‌کردن</strong> کلیک کنید.',
        'PHPBB_INTR_NOTICE_UPDATED' =>
            'به‌روزرسانی افزونه یکپارچه‌سازی phpBB را خاموش کرد: فایل kjauth.php انجمن باید با نسخه جدید جایگزین شود. <a href="./?cp=phpbb_settings&amp;case=bridge">آن را جایگزین کنید</a>، سپس یکپارچه‌سازی را دوباره روشن کنید.',
        'PHPBB_INTR_TURN_ON' => 'آزمایش و روشن‌کردن',
        'PHPBB_INTR_TURN_OFF' => 'خاموش‌کردن',
        'PHPBB_INTR_TURN_OFF_CONFIRM' =>
            'یکپارچه‌سازی خاموش شود؟ دوباره از حساب‌های کلیجا استفاده می‌شود و باید با یک حساب مدیر کلیجا وارد شوید.',
        'PHPBB_INTR_TURNED_ON' => 'یکپارچه‌سازی روشن است. دوباره با حساب یکی از بنیان‌گذاران انجمن وارد شوید.',
        'PHPBB_INTR_TURNED_OFF' =>
            'یکپارچه‌سازی خاموش است و کلیجا دوباره از حساب‌های خودش استفاده می‌کند. دوباره با یک حساب مدیر کلیجا وارد شوید.',
        'PHPBB_INTR_NOT_TURNED_ON' =>
            'یکپارچه‌سازی هنوز خاموش است، چون آزمایش مشکلی پیدا کرد. آن را برطرف کنید و دوباره امتحان کنید.',
        'PHPBB_INTR_NOT_SAVED' =>
            'نشانی جدید ذخیره نشد. یکپارچه‌سازی روشن است و kjauth.php در آن نشانی پاسخ نمی‌دهد، پس هیچ‌کس نمی‌توانست وارد شود. آنچه را آزمایش پیدا کرد برطرف کنید، یا ابتدا یکپارچه‌سازی را خاموش کنید.',
        'PHPBB_INTR_SAVE' => 'ذخیره تنظیمات',
        'PHPBB_INTR_SECTION_FORUM' => 'انجمن',
        'PHPBB_INTR_LINK' => 'نشانی انجمن',
        'PHPBB_INTR_LINK_HELP' =>
            'نشانی پوشه اصلی انجمن. کلیجا kjauth.php را آنجا پیدا می‌کند و اعضا را برای ثبت‌نام، بازنشانی گذرواژه یا ویرایش حسابشان به آنجا می‌فرستد. برای نمونه: https://example.com/forum',
        'PHPBB_INTR_PATH' => 'پوشه انجمن',
        'PHPBB_INTR_PATH_HELP' =>
            'اختیاری. محل انجمن روی این سرور، نسبت به پوشه کلیجا، مانند ../forum. آن‌وقت کلیجا خودش kjauth.php را آنجا می‌نویسد. وقتی انجمن روی سرور دیگری است خالی بگذارید.',
        'PHPBB_INTR_ERR_TITLE' => 'تنظیمات ذخیره نشد:',
        'PHPBB_INTR_ERR_LINK' => 'نشانی کامل انجمن را وارد کنید که با http:// یا https:// شروع شود.',
        'PHPBB_INTR_ERR_LINK_DEFAULT' =>
            'پیش از روشن‌کردن یکپارچه‌سازی، نشانی انجمن خود را در تنظیمات وارد کنید. اعضا برای ثبت‌نام و بازنشانی گذرواژه به آنجا فرستاده می‌شوند.',
        'PHPBB_INTR_BRIDGE_INTRO' =>
            'کلیجا نام‌های کاربری و گذرواژه‌های انجمن را از طریق kjauth.php بررسی می‌کند، فایل کوچکی که در انجمن اجرا می‌شود. این فایل کلید یکپارچه‌سازی را دارد، پس آن را خصوصی نگه دارید.',
        'PHPBB_INTR_BRIDGE_STEP_1' =>
            'فایل زیر را با نام <code>kjauth.php</code> در پوشه اصلی انجمن، کنار <code>config.php</code> آن ذخیره کنید.',
        'PHPBB_INTR_BRIDGE_FOLDER' => 'کلیجا هنگام اجرای آزمایش، خودش آن را در این پوشه می‌نویسد:',
        'PHPBB_INTR_BRIDGE_STEP_2' => 'زبانه <strong>آزمایش اتصال</strong> را باز کنید و آزمایش را اجرا کنید.',
        'PHPBB_INTR_BRIDGE_ADDRESS' => 'کلیجا kjauth.php را در این نشانی صدا می‌زند:',
        'PHPBB_INTR_BRIDGE_STEP_3' =>
            'وقتی کلید جدیدی می‌سازید، فایل انجمن را با فایل جدید جایگزین کنید، مگر اینکه کلیجا خودش آن را آنجا بنویسد.',
        'PHPBB_INTR_BRIDGE_FILE' => 'محتوای فایل',
        'PHPBB_INTR_KEY' => 'کلید یکپارچه‌سازی',
        'PHPBB_INTR_KEY_HELP' => 'kjauth.php فقط درخواست‌هایی را می‌پذیرد که این کلید را دارند. فایل زیر از قبل آن را دارد.',
        'PHPBB_INTR_KEY_NEW' => 'ساخت کلید جدید',
        'PHPBB_INTR_KEY_NEW_CONFIRM' => 'کلید جدیدی ساخته شود؟ فایل kjauth.php انجمن باید با فایل جدید جایگزین شود.',
        'PHPBB_INTR_KEY_NEW_CONFIRM_ON' =>
            'کلید جدیدی ساخته شود؟ کلیجا kjauth.php را در پوشه انجمن جایگزین می‌کند و پیش از استفاده از کلید جدید آزمایش را اجرا می‌کند. سپس باید دوباره با حساب انجمن خود وارد شوید.',
        'PHPBB_INTR_KEY_CHANGED_WRITTEN' => 'کلید جدیدی ساخته شد و کلیجا kjauth.php جدید را در پوشه انجمن نوشت.',
        'PHPBB_INTR_KEY_CHANGED_ON' =>
            'کلید جدید در حال استفاده است و کلیجا kjauth.php جدید را در پوشه انجمن نوشت. دوباره با حساب یکی از بنیان‌گذاران انجمن وارد شوید.',
        'PHPBB_INTR_KEY_CHANGED_COPY' =>
            'کلید جدیدی ساخته شد. kjauth.php را در پوشه انجمن با فایل جدید زیر جایگزین کنید، سپس آزمایش اتصال را اجرا کنید.',
        'PHPBB_INTR_KEY_NOT_CHANGED_FOLDER' =>
            'کلید تغییر نکرد. تا زمانی که یکپارچه‌سازی روشن است، کلیجا باید خودش kjauth.php جدید را در پوشه انجمن بنویسد: پوشه انجمن را تنظیم کنید و kjauth.php را آنجا قابل‌نوشتن کنید. یا ابتدا یکپارچه‌سازی را خاموش کنید.',
        'PHPBB_INTR_KEY_NOT_CHANGED_TEST' =>
            'کلید تغییر نکرد، چون kjauth.php با آن از آزمایش نگذشت. انجمن دوباره فایل با کلید فعلی را دارد.',
        'PHPBB_INTR_TEST_INTRO' =>
            'آزمایش، kjauth.php انجمن را با تنظیمات ذخیره‌شده صدا می‌زند و بررسی می‌کند که کلید را بپذیرد و انجمن بنیان‌گذار داشته باشد. وقتی پوشه انجمن تنظیم شده باشد، کلیجا ابتدا kjauth.php را آنجا می‌نویسد.',
        'PHPBB_INTR_TEST_RUN' => 'اجرای آزمایش',
        'PHPBB_INTR_TEST_RESULTS' => 'نتایج آزمایش',
        'PHPBB_INTR_TEST_OK' => 'همه بررسی‌ها موفق بود: کلیجا می‌تواند اعضای انجمن را وارد کند.',
        'PHPBB_INTR_TEST_FAILED' => 'آزمایش مشکلی پیدا کرد. آن را برطرف کنید و دوباره آزمایش را اجرا کنید.',
        'PHPBB_INTR_TEST_SKIPPED' => 'بررسی نشد، چون یک بررسی پیشین ناموفق بود.',
        'PHPBB_INTR_STEP_ADDRESS' => 'نشانی انجمن',
        'PHPBB_INTR_STEP_ADDRESS_OK' => 'کلیجا kjauth.php را در %s صدا می‌زند.',
        'PHPBB_INTR_STEP_ADDRESS_HINT' => 'نشانی پوشه اصلی انجمن را در زبانه تنظیمات وارد کنید.',
        'PHPBB_INTR_STEP_FILE' => 'kjauth.php در پوشه انجمن',
        'PHPBB_INTR_STEP_FILE_WRITTEN' => 'کلیجا %s را نوشت.',
        'PHPBB_INTR_STEP_FILE_CURRENT' => '%s به‌روز است.',
        'PHPBB_INTR_STEP_FILE_NO_FOLDER' =>
            'هیچ پوشه انجمنی تنظیم نشده، پس کلیجا فایل را ننوشت. آن را خودتان از زبانه فایل kjauth.php به انجمن کپی کنید.',
        'PHPBB_INTR_STEP_FILE_NOT_PHPBB' => 'کلیجا هیچ انجمن phpBB‌ای در %s پیدا نکرد.',
        'PHPBB_INTR_STEP_FILE_NOT_WRITABLE' => 'کلیجا نمی‌تواند %s را بنویسد.',
        'PHPBB_INTR_STEP_FILE_HINT' =>
            'پوشه انجمن را در زبانه تنظیمات بررسی کنید، یا خودتان فایل را از زبانه فایل kjauth.php به انجمن کپی کنید. بررسی‌های بعدی نشان می‌دهند که آیا انجمن آن را دارد.',
        'PHPBB_INTR_STEP_CONNECT' => 'اتصال',
        'PHPBB_INTR_STEP_CONNECT_OK' => 'kjauth.php در %s پاسخ داد.',
        'PHPBB_INTR_STEP_CONNECT_FAILED' => 'کلیجا نتوانست به %s وصل شود.',
        'PHPBB_INTR_STEP_CONNECT_NO_CLIENT' =>
            'PHP نمی‌تواند درخواست وب بفرستد: افزونه curl آن فعال نیست و allow_url_fopen خاموش است.',
        'PHPBB_INTR_STEP_CONNECT_NO_CLIENT_HINT' => 'از هاست خود بخواهید افزونه curl در PHP را فعال کند.',
        'PHPBB_INTR_STEP_CONNECT_SERVER_HINT' =>
            'نشانی انجمن را بررسی کنید و اینکه این سرور به آن دسترسی دارد. نشانی https به گواهی معتبر نیاز دارد.',
        'PHPBB_INTR_STEP_CONNECT_REDIRECT' => 'انجمن درخواست را به %s هدایت می‌کند.',
        'PHPBB_INTR_STEP_CONNECT_REDIRECT_HINT' =>
            'نشانی‌ای را که انجمن به آن هدایت می‌کند، اغلب نشانی https آن، در زبانه تنظیمات وارد کنید.',
        'PHPBB_INTR_STEP_CONNECT_MISSING' => '%s پیدا نشد.',
        'PHPBB_INTR_STEP_CONNECT_MISSING_HINT' =>
            'kjauth.php را در پوشه اصلی انجمن، کنار config.php آن بگذارید و نشانی انجمن را بررسی کنید.',
        'PHPBB_INTR_STEP_CONNECT_OLD' => 'kjauth.php انجمن از نسخه قدیمی‌تر این افزونه است.',
        'PHPBB_INTR_STEP_CONNECT_OLD_HINT' => 'آن را با فایل زبانه فایل kjauth.php جایگزین کنید.',
        'PHPBB_INTR_STEP_CONNECT_UNKNOWN' => 'پاسخ از kjauth.php نیامده است (%s).',
        'PHPBB_INTR_STEP_CONNECT_UNKNOWN_HINT' =>
            'بررسی کنید که نشانی انجمن پوشه اصلی انجمن باشد و kjauth.php آن همان فایل زبانه فایل kjauth.php باشد. خطای PHP انجمن هم اینجا نشان داده می‌شود.',
        'PHPBB_INTR_STEP_CONNECT_VERSION' => 'kjauth.php انجمن نسخه %1$s است و این افزونه به نسخه %2$s نیاز دارد.',
        'PHPBB_INTR_STEP_KEY' => 'کلید یکپارچه‌سازی',
        'PHPBB_INTR_STEP_KEY_OK' => 'kjauth.php کلید را پذیرفت. انجمن phpBB %s را اجرا می‌کند.',
        'PHPBB_INTR_STEP_KEY_WRONG' => 'kjauth.php کلید را رد کرد.',
        'PHPBB_INTR_STEP_KEY_WRONG_HINT' =>
            'فایل انجمن کلید دیگری دارد. آن را با فایل زبانه فایل kjauth.php جایگزین کنید.',
        'PHPBB_INTR_STEP_CACHED_HINT' =>
            'kjauth.php در پوشه انجمن درست است، اما انجمن با نسخه دیگری پاسخ می‌دهد. ممکن است سرور آن هنوز نسخه قدیمی را از حافظه نهان اجرا کند: یک دقیقه دیگر آزمایش را دوباره اجرا کنید یا PHP را دوباره راه‌اندازی کنید. همچنین بررسی کنید که نشانی و پوشه متعلق به یک انجمن باشند.',
        'PHPBB_INTR_STEP_FOUNDERS' => 'بنیان‌گذاران انجمن',
        'PHPBB_INTR_STEP_FOUNDERS_OK' => 'بنیان‌گذارانی که می‌توانند پنل مدیریت را باز کنند: %s.',
        'PHPBB_INTR_STEP_FOUNDERS_NONE' =>
            'انجمن بنیان‌گذاری ندارد، پس با روشن‌شدن یکپارچه‌سازی هیچ‌کس نمی‌توانست پنل مدیریت را باز کند.',
        'PHPBB_INTR_STEP_FOUNDERS_NONE_HINT' => 'کلیجا اعضایی را راه می‌دهد که نوع حسابشان در phpBB، Founder است.',
    ],
];
