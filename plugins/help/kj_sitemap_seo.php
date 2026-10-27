<?php
//
// kj_sitemap_seo, its guide on the help page in Persian, with the keys of its language/help_en.php.
// {sitemap_url} and {robots_url} are the addresses of the site, the plugin fills them
//

return [
    'KJ_SITEMAP_SEO_HELP_TITLE' => 'سئوی نقشه سایت',
    'KJ_SITEMAP_SEO_HELP_INTRO' =>
        'به موتورهای جستجو کمک کنید بارگذاری‌های جدید را زودتر پیدا کنند. افزونه یک نقشه سایت XML از ۱۰۰ فایل و تصویر آخر، با تاریخ هر بارگذاری، منتشر می‌کند و در بخش head هر صفحه به آن پیوند می‌دهد.',
    'KJ_SITEMAP_SEO_HELP_LINK' => 'باز کردن نقشه سایت',

    'KJ_SITEMAP_SEO_HELP_FEATURE_1' =>
        'نقشه سایت در هر درخواست از آخرین بارگذاری‌ها ساخته می‌شود، پس همیشه به‌روز است و چیزی برای ساختن یا زمان‌بندی ندارد.',
    'KJ_SITEMAP_SEO_HELP_FEATURE_2' =>
        'هر بارگذاری با پیوندی که کلیجا به آن می‌دهد فهرست می‌شود: صفحه دانلود یک فایل و پیوند یک تصویر، به شکل‌هایی که در <strong>شکل نشانی فایل‌ها</strong> و <strong>شکل نشانی تصاویر</strong> انتخاب شده‌اند.',
    'KJ_SITEMAP_SEO_HELP_FEATURE_3' =>
        'تصاویر همراه با تصویر بندانگشتی‌شان، در قالب نقشه سایت تصویری که گوگل می‌خواند، فهرست می‌شوند.',
    'KJ_SITEMAP_SEO_HELP_FEATURE_4' =>
        'نقشه سایت روی هر سروری در <code dir="ltr">{sitemap_url}</code> است. وقتی فایل <code dir="ltr">.htaccess</code> کلیجا نصب باشد، در <code>sitemap.xml</code> در پوشه کلیجا هم هست.',
    'KJ_SITEMAP_SEO_HELP_FEATURE_5' =>
        'هر صفحه با برچسب <code dir="ltr">&lt;link rel="sitemap"&gt;</code> در بخش head خود به نقشه سایت پیوند می‌دهد.',

    'KJ_SITEMAP_SEO_HELP_STEP_TITLE' => 'ارسال نقشه سایت به موتورهای جستجو',
    'KJ_SITEMAP_SEO_HELP_STEP_1' =>
        'روی <strong>باز کردن نقشه سایت</strong> در بالا کلیک کنید و بررسی کنید که آخرین بارگذاری‌های شما را فهرست می‌کند.',
    'KJ_SITEMAP_SEO_HELP_STEP_2' =>
        'این خط را به <code dir="ltr">{robots_url}</code> اضافه کنید، یا فایل را با آن بسازید: <code dir="ltr">Sitemap: {sitemap_url}</code>',
    'KJ_SITEMAP_SEO_HELP_STEP_3' =>
        'همین نشانی را یک بار در گزارش <strong>Sitemaps</strong> در <a href="https://search.google.com/search-console" target="_blank" rel="noopener">Google Search Console</a> و <a href="https://www.bing.com/webmasters" target="_blank" rel="noopener">Bing Webmaster Tools</a> ارسال کنید.',
    'KJ_SITEMAP_SEO_HELP_STEP_4' =>
        'کار دیگری لازم نیست: موتورهای جستجو خودشان به نقشه سایت برمی‌گردند و بارگذاری‌های جدید را در آن پیدا می‌کنند.',

    'KJ_SITEMAP_SEO_HELP_FAQ_Q_1' => 'چرا افزونه دیگر پس از هر بارگذاری به موتورهای جستجو خبر نمی‌دهد؟',
    'KJ_SITEMAP_SEO_HELP_FAQ_A_1' =>
        'نسخه‌های پیش از ۲.۰.۰ تنظیمی داشتند که بارگذاری‌های جدید را به گوگل، بینگ و سرویس‌های دیگر اطلاع می‌داد (ping). گوگل و بینگ آن نشانی‌ها را بسته‌اند و سرویس‌های دیگر دیگر وجود ندارند، پس نسخه ۲.۰.۰ آن تنظیم را برداشت. موتورهای جستجو نقشه سایت را از طریق <code>robots.txt</code> و نشانی‌ای که برایشان می‌فرستید پیدا می‌کنند.',
    'KJ_SITEMAP_SEO_HELP_FAQ_Q_2' => 'چرا نقشه سایت فقط ۱۰۰ بارگذاری را فهرست می‌کند؟',
    'KJ_SITEMAP_SEO_HELP_FAQ_A_2' =>
        'نقشه سایت برای بارگذاری‌هایی است که موتورهای جستجو هنوز نمی‌شناسند. فایل‌های قدیمی‌تر وقتی جدید بودند در آن بودند و موتورهای جستجو پیوندهایی را که پیدا کرده‌اند نگه می‌دارند. فهرست کوتاه همچنین نقشه سایت را در یک سایت پربازدید سریع نگه می‌دارد.',
    'KJ_SITEMAP_SEO_HELP_FAQ_Q_3' => 'چرا <code>sitemap.xml</code> صفحه خطا نشان می‌دهد؟',
    'KJ_SITEMAP_SEO_HELP_FAQ_A_3' =>
        'آن نشانی به فایل <code dir="ltr">.htaccess</code> کلیجا (که به نام <code>htaccess.txt</code> عرضه می‌شود) و قاعده‌ای نیاز دارد که افزونه هنگام نصب در <code>plugins_rules.php</code> در پوشه کلیجا می‌نویسد. اگر وب‌سرور نتوانسته آن فایل را بنویسد، اجازه آن را بدهید، سپس افزونه را حذف و دوباره نصب کنید. تا آن زمان از <code dir="ltr">{sitemap_url}</code> استفاده کنید که روی هر سروری کار می‌کند.',
    'KJ_SITEMAP_SEO_HELP_FAQ_Q_4' => 'آیا موتورهای جستجو پیوند بخش head صفحه‌ها را می‌خوانند؟',
    'KJ_SITEMAP_SEO_HELP_FAQ_A_4' =>
        'گوگل و بینگ نه: آن‌ها <code>robots.txt</code> و نقشه‌های سایتی را که برایشان فرستاده شده می‌خوانند، پس گام‌های بالا را رد نکنید. این پیوند به ابزارهای دیگر کمک می‌کند نقشه سایت را پیدا کنند.',
    'KJ_SITEMAP_SEO_HELP_FAQ_Q_5' => 'چرا یک تصویر بدون تصویر بندانگشتی فهرست شده است؟',
    'KJ_SITEMAP_SEO_HELP_FAQ_A_5' =>
        'تصویر بندانگشتی آن هرگز ساخته نشده، مثلاً وقتی سرور هنگام بارگذاری کتابخانه GD نداشته است. افزونه تصاویر بندانگشتی ناموجود را رد می‌کند تا موتورهای جستجو تصویری را که کلیجا به‌جای آن‌ها نشان می‌دهد ایندکس نکنند.',

    'KJ_SITEMAP_SEO_HELP_TIP_1' =>
        'گزارش <strong>Sitemaps</strong> در Search Console نشان می‌دهد گوگل آخرین بار کی نقشه سایت شما را خوانده و چند پیوند در آن پیدا کرده است.',
    'KJ_SITEMAP_SEO_HELP_TIP_2' =>
        'نقشه سایت از تنظیمات پیوند کلیجا پیروی می‌کند. پس از تغییر <strong>بازنویسی نشانی (Mod Rewrite)</strong>، <strong>شکل نشانی فایل‌ها</strong> یا <strong>شکل نشانی تصاویر</strong>، بلافاصله پیوندهای جدید را فهرست می‌کند.',

    'KJ_SITEMAP_SEO_HELP_WARNING_1' =>
        'نقشه سایت آخرین بارگذاری‌های هر کاربر و مهمان را به هر کسی که آن را باز کند، از جمله موتورهای جستجو، نشان می‌دهد. در سایتی که فایل‌ها قرار است فقط برای کسانی که پیوندشان را دارند دیده شوند، از افزونه استفاده نکنید.',
    'KJ_SITEMAP_SEO_HELP_WARNING_2' =>
        'موتورهای جستجو <code>robots.txt</code> را فقط در ریشه دامنه می‌خوانند. نسخه‌ای در یک زیرپوشه، مانند پوشه کلیجا، نادیده گرفته می‌شود.',
];
