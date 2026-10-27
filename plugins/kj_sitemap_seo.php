<?php
//
// kj_sitemap_seo in Persian: its name, its description and its message after the installation.
// The plugin has no words of its own
//

return [
    'title' => 'سئوی نقشه سایت',
    'description' => 'یک نقشه سایت XML از آخرین بارگذاری‌های خود منتشر کنید تا موتورهای جستجو فایل‌ها و تصاویر جدید را زودتر پیدا کنند.',
    'first_run' => "
این افزونه یک نقشه سایت XML از ۱۰۰ بارگذاری آخر منتشر می‌کند و در بخش head هر صفحه به آن پیوند می‌دهد.
خط زیر را به فایل robots.txt در ریشه دامنه خود اضافه کنید تا موتورهای جستجو نقشه سایت را پیدا کنند:
<br>
<code>Sitemap: go.php?go=sitemap</code>
<br>
<a href='go.php?go=sitemap' target='_blank' rel='noopener'>باز کردن نقشه سایت</a> -
<a href='./index.php?cp=s_help#help-kj_sitemap_seo'>خواندن راهنما</a> -
<a href='https://github.com/kleeja/kj_sitemap_seo/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [],
];
