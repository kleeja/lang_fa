<?php
//
// vbulletin_integration in Persian: its name, its description, its message after the installation and its words,
// with the keys of vbulletin_integration_translations()
//

return [
    'title' => 'یکپارچه‌سازی vBulletin',
    'description' => 'بگذارید اعضای یک انجمن vBulletin با حساب‌های انجمن خود وارد کلیجا شوند.',
    'first_run' => "
این افزونه صفحه یکپارچه‌سازی vBulletin را به پنل مدیریت اضافه کرد. وارد کنید کلیجا چطور به پایگاه داده انجمن برسد،
آزمایش اتصال را اجرا کنید و سپس یکپارچه‌سازی را روشن کنید تا اعضای انجمن با حساب‌های انجمن وارد کلیجا شوند.
<br>
<a href='./index.php?cp=vbulletin_settings'>یکپارچه‌سازی vBulletin</a> -
<a href='./index.php?cp=s_help#help-vbulletin_integration'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/vbulletin_integration/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'R_VBULLETIN_SETTINGS' => 'یکپارچه‌سازی vBulletin',
        'VBULLETIN_INTR_TAB_SETTINGS' => 'تنظیمات',
        'VBULLETIN_INTR_TAB_TEST' => 'آزمایش اتصال',
        'VBULLETIN_INTR_STATUS_ON' =>
            'یکپارچه‌سازی روشن است. اعضا با حساب‌های vBulletin خود وارد کلیجا می‌شوند و فقط مدیران انجمن می‌توانند این پنل مدیریت را باز کنند.',
        'VBULLETIN_INTR_STATUS_OFF' =>
            'یکپارچه‌سازی خاموش است، پس کلیجا از حساب‌های خودش استفاده می‌کند. وارد کنید کلیجا چطور به پایگاه داده انجمن برسد، ذخیره کنید، سپس روی <strong>آزمایش و روشن‌کردن</strong> کلیک کنید.',
        'VBULLETIN_INTR_STATUS_OFF_NOTE' => 'روشن‌کردن آن شما را خارج می‌کند. دوباره با حساب یکی از مدیران انجمن وارد شوید.',
        'VBULLETIN_INTR_STATUS_PAUSED' =>
            'یکپارچه‌سازی روشن است، اما <code>DISABLE_INTR</code> در config.php تعریف شده، پس تا زمانی که آن را برندارید از حساب‌های کلیجا استفاده می‌شود.',
        'VBULLETIN_INTR_TURN_ON' => 'آزمایش و روشن‌کردن',
        'VBULLETIN_INTR_TURN_OFF' => 'خاموش‌کردن',
        'VBULLETIN_INTR_TURN_OFF_CONFIRM' =>
            'یکپارچه‌سازی خاموش شود؟ دوباره از حساب‌های کلیجا استفاده می‌شود و باید با یک حساب مدیر کلیجا وارد شوید.',
        'VBULLETIN_INTR_TURNED_ON' => 'یکپارچه‌سازی روشن است. دوباره با حساب یکی از مدیران انجمن وارد شوید.',
        'VBULLETIN_INTR_TURNED_OFF' =>
            'یکپارچه‌سازی خاموش است و کلیجا دوباره از حساب‌های خودش استفاده می‌کند. دوباره با یک حساب مدیر کلیجا وارد شوید.',
        'VBULLETIN_INTR_NOT_TURNED_ON' =>
            'یکپارچه‌سازی هنوز خاموش است، چون آزمایش مشکلی پیدا کرد. آن را برطرف کنید و دوباره امتحان کنید.',
        'VBULLETIN_INTR_NOT_SAVED' =>
            'این تنظیمات ذخیره نشد. یکپارچه‌سازی روشن است و کلیجا با آن‌ها به انجمن نمی‌رسد، پس هیچ‌کس نمی‌توانست وارد شود. آنچه را آزمایش پیدا کرد برطرف کنید، یا ابتدا یکپارچه‌سازی را خاموش کنید.',
        'VBULLETIN_INTR_SAVE' => 'ذخیره تنظیمات',
        'VBULLETIN_INTR_SECTION_FORUM' => 'انجمن',
        'VBULLETIN_INTR_LINK' => 'نشانی انجمن',
        'VBULLETIN_INTR_LINK_HELP' =>
            'اعضا برای ثبت‌نام، بازنشانی گذرواژه یا ویرایش پروفایلشان به آنجا فرستاده می‌شوند. برای نمونه: https://example.com/forum',
        'VBULLETIN_INTR_VERSION' => 'نسخه vBulletin',
        'VBULLETIN_INTR_VERSION_HELP' => 'هر نسخه گذرواژه‌ها را به شکل متفاوتی ذخیره می‌کند و نشانی صفحه‌های خودش را دارد.',
        'VBULLETIN_INTR_VERSION_5' => 'vBulletin 5 یا جدیدتر',
        'VBULLETIN_INTR_VERSION_4' => 'vBulletin 3 یا 4',
        'VBULLETIN_INTR_SECTION_DB' => 'پایگاه داده انجمن',
        'VBULLETIN_INTR_TYPE' => 'جزئیات اتصال',
        'VBULLETIN_INTR_TYPE_HELP' => 'وقتی انجمن روی این سرور است آن‌ها را از فایل‌های انجمن بخوانید، یا اینجا وارد کنید.',
        'VBULLETIN_INTR_TYPE_PATH' => 'از config.php انجمن',
        'VBULLETIN_INTR_TYPE_DB' => 'اینجا وارد کنید',
        'VBULLETIN_INTR_PATH' => 'پوشه انجمن',
        'VBULLETIN_INTR_PATH_HELP' => 'محل انجمن نسبت به پوشه کلیجا. برای نمونه: ../forum',
        'VBULLETIN_INTR_CONFIG_PATH' => 'فایل پیکربندی',
        'VBULLETIN_INTR_CONFIG_PATH_HELP' =>
            'محل آن درون پوشه انجمن: /core/includes/config.php برای vBulletin 5 و جدیدتر، /includes/config.php برای vBulletin 3 و 4.',
        'VBULLETIN_INTR_DB_SERVER' => 'سرور پایگاه داده',
        'VBULLETIN_INTR_DB_SERVER_HELP' => 'وقتی پایگاه داده روی این سرور است، معمولاً localhost.',
        'VBULLETIN_INTR_DB_PORT' => 'درگاه',
        'VBULLETIN_INTR_DB_NAME' => 'نام پایگاه داده',
        'VBULLETIN_INTR_DB_USER' => 'نام کاربری پایگاه داده',
        'VBULLETIN_INTR_DB_PASSWORD' => 'گذرواژه پایگاه داده',
        'VBULLETIN_INTR_DB_PASSWORD_HELP' => 'گذرواژه ذخیره‌شده هرگز نمایش داده نمی‌شود. برای نگه‌داشتن آن فیلد را خالی بگذارید.',
        'VBULLETIN_INTR_DB_PREFIX' => 'پیشوند جدول‌ها',
        'VBULLETIN_INTR_DB_PREFIX_HELP' =>
            'پیشوند جدول‌های انجمن، مانند vb_ در vb_user. اگر جدول‌ها پیشوندی ندارند خالی بگذارید.',
        'VBULLETIN_INTR_ENCODING' => 'مجموعه نویسه‌ها',
        'VBULLETIN_INTR_ENCODING_HELP' =>
            'مجموعه نویسه‌های اتصال، معمولاً utf8mb4 یا utf8. انجمن‌های قدیمی‌تری که متن UTF-8 را در جدول‌های latin1 نگه می‌دارند به latin1 نیاز دارند.',
        'VBULLETIN_INTR_ERR_TITLE' => 'تنظیمات ذخیره نشد:',
        'VBULLETIN_INTR_ERR_LINK' => 'نشانی کامل انجمن را وارد کنید که با http:// یا https:// شروع شود.',
        'VBULLETIN_INTR_ERR_LINK_DEFAULT' =>
            'پیش از روشن‌کردن یکپارچه‌سازی، نشانی انجمن خود را در تنظیمات وارد کنید. اعضا برای ثبت‌نام و بازنشانی گذرواژه به آنجا فرستاده می‌شوند.',
        'VBULLETIN_INTR_ERR_CONFIG_NAME' => 'نام فایل پیکربندی vBulletin، config.php است.',
        'VBULLETIN_INTR_ERR_DETAILS' => 'سرور، نام و نام کاربری پایگاه داده را بدون فاصله وارد کنید.',
        'VBULLETIN_INTR_ERR_PORT' => 'درگاه عددی از ۱ تا ۶۵۵۳۵ است.',
        'VBULLETIN_INTR_ERR_PREFIX' => 'پیشوند جدول‌ها فقط می‌تواند حروف لاتین، اعداد و زیرخط داشته باشد.',
        'VBULLETIN_INTR_ERR_CHARSET' => 'مجموعه نویسه‌ها نامی مانند utf8mb4، utf8 یا latin1 است.',
        'VBULLETIN_INTR_TEST_INTRO' =>
            'آزمایش با تنظیمات ذخیره‌شده به پایگاه داده انجمن وصل می‌شود و بررسی می‌کند که کلیجا بتواند اعضای آن را بخواند. چیزی را در انجمن تغییر نمی‌دهد.',
        'VBULLETIN_INTR_TEST_RUN' => 'اجرای آزمایش',
        'VBULLETIN_INTR_TEST_RESULTS' => 'نتایج آزمایش',
        'VBULLETIN_INTR_TEST_OK' => 'همه بررسی‌ها موفق بود: کلیجا می‌تواند اعضای انجمن را بخواند.',
        'VBULLETIN_INTR_TEST_FAILED' => 'آزمایش مشکلی پیدا کرد. آن را در تنظیمات برطرف کنید و دوباره آزمایش را اجرا کنید.',
        'VBULLETIN_INTR_TEST_SKIPPED' => 'بررسی نشد، چون یک بررسی پیشین ناموفق بود.',
        'VBULLETIN_INTR_STEP_DETAILS' => 'جزئیات اتصال',
        'VBULLETIN_INTR_STEP_DETAILS_FILE' => 'از %s خوانده شد.',
        'VBULLETIN_INTR_STEP_DETAILS_DB' => 'پایگاه داده %1$s روی %2$s، با کاربر %3$s.',
        'VBULLETIN_INTR_STEP_FILE_MISSING' => 'کلیجا نمی‌تواند %s را پیدا کند یا بخواند.',
        'VBULLETIN_INTR_STEP_FILE_EMPTY' => '%s جزئیات پایگاه داده vBulletin را ندارد.',
        'VBULLETIN_INTR_STEP_FILE_HINT' => 'پوشه انجمن و فایل پیکربندی را در تنظیمات بررسی کنید.',
        'VBULLETIN_INTR_STEP_CONNECT' => 'اتصال پایگاه داده',
        'VBULLETIN_INTR_STEP_CONNECT_OK' => 'به MySQL %s وصل شد.',
        'VBULLETIN_INTR_STEP_CONNECT_NO_DRIVER' => 'PHP نمی‌تواند به MySQL وصل شود، چون افزونه pdo_mysql آن فعال نیست.',
        'VBULLETIN_INTR_STEP_CONNECT_NO_DRIVER_HINT' => 'از هاست خود بخواهید افزونه pdo_mysql را فعال کند.',
        'VBULLETIN_INTR_STEP_CONNECT_DENIED_HINT' => 'نام کاربری و گذرواژه پایگاه داده را بررسی کنید.',
        'VBULLETIN_INTR_STEP_CONNECT_NO_DB_HINT' => 'نام پایگاه داده را بررسی کنید و اینکه این کاربر به آن دسترسی داشته باشد.',
        'VBULLETIN_INTR_STEP_CONNECT_CHARSET_HINT' => 'مجموعه نویسه‌ها را بررسی کنید.',
        'VBULLETIN_INTR_STEP_CONNECT_SERVER_HINT' =>
            'سرور و درگاه را بررسی کنید و اینکه سرور پایگاه داده از این سرور اتصال بپذیرد.',
        'VBULLETIN_INTR_STEP_MEMBERS' => 'جدول اعضا',
        'VBULLETIN_INTR_STEP_MEMBERS_OK' => 'اعضا در %1$s: %2$s.',
        'VBULLETIN_INTR_STEP_MEMBERS_NO_TABLE' => 'پایگاه داده جدول %s را ندارد.',
        'VBULLETIN_INTR_STEP_MEMBERS_NO_TABLE_HINT' => 'پیشوند جدول‌ها را بررسی کنید و اینکه این پایگاه داده انجمن باشد.',
        'VBULLETIN_INTR_STEP_MEMBERS_NO_COLUMNS' =>
            'جدول اعضا ستون‌های گذرواژه نسخه vBulletin‌ای را که انتخاب کردید ندارد.',
        'VBULLETIN_INTR_STEP_MEMBERS_NO_COLUMNS_HINT' => 'نسخه vBulletin را در تنظیمات بررسی کنید.',
        'VBULLETIN_INTR_STEP_ADMINS' => 'مدیران انجمن',
        'VBULLETIN_INTR_STEP_ADMINS_OK' => 'مدیرانی که می‌توانند پنل مدیریت را باز کنند: %s.',
        'VBULLETIN_INTR_STEP_ADMINS_NONE' =>
            'گروه اصلی هیچ عضوی Administrators نیست، پس با روشن‌شدن یکپارچه‌سازی هیچ‌کس نمی‌توانست پنل مدیریت را باز کند.',
        'VBULLETIN_INTR_STEP_ADMINS_NONE_HINT' =>
            'کلیجا اعضایی را راه می‌دهد که گروه اصلی‌شان در vBulletin، Administrators (گروه ۶) است.',
    ],
];
