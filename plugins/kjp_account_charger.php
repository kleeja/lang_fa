<?php
//
// kjp_account_charger in Persian: its name, its description, its message after the installation and its words,
// with the keys of kjp_account_charger_translations()
//

return [
    'title' => 'افزایش موجودی برای پرداخت کلیجا',
    'description' => 'به اعضایی که گروهشان مجوز دریافت سود دارد اجازه می‌دهد موجودی خود را با روش‌های پرداخت کلیجا افزایش دهند. به پرداخت کلیجا ۲.۰ یا جدیدتر نیاز دارد.',
    'first_run' => "
این افزونه افزایش موجودی را به منوی کاربری اعضایی که گروهشان مجوز دریافت سود دارد اضافه کرد،
و تنظیم کمترین مبلغ افزایش موجودی را به تنظیمات پرداخت کلیجا.
<br>
<a href='./index.php?cp=options&amp;smt=kleeja_payment'>تنظیمات</a> -
<a href='./index.php?cp=s_help#help-kjp_account_charger'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/kjp_account_charger/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
",
    'words' => [
        'KJP_ACT_CHARGE_ACCOUNT' => 'افزایش موجودی برای <strong>%s</strong>',
        'KJP_ACT_ARCH_CHARGE_ACCOUNT' => 'افزایش‌های موجودی',
        'KJP_CHRG_ACNT' => 'افزایش موجودی',
        'KJP_CHRG_INTRO' => 'مبلغ به محض کامل‌شدن پرداخت به موجودی شما اضافه می‌شود.',
        'KJP_CHRG_AMNT' => 'مبلغ',
        'KJP_CHRG_MTHD' => 'روش پرداخت',
        'KJP_CHRG' => 'ادامه به پرداخت',
        'KJP_MIN_CHARGE_IS' => 'کمترین مبلغ افزایش موجودی <bdi>%s</bdi> است.',
        'KJP_ACC_CHARGED' => 'موجودی شما <bdi>%s</bdi> افزایش یافت.',
        'KJP_CHRG_INVALID_AMOUNT' => 'مبلغ را به‌صورت عدد صحیح و بدون اعشار وارد کنید.',
        'KJP_CHRG_NO_METHOD' => 'در حال حاضر هیچ روش پرداختی برای افزایش موجودی در دسترس نیست. لطفاً بعداً دوباره امتحان کنید.',
        'KJP_CHRG_NO_BALANCE' => 'موجودی را نمی‌توان از خودش افزایش داد. روش پرداخت دیگری انتخاب کنید.',
        'KJP_MIN_CHARGE_AMOUNT' =>
            'کمترین مبلغ افزایش موجودی<small>کمترین مبلغی که یک عضو هر بار می‌تواند به موجودی خود اضافه کند، به‌صورت عدد صحیح به ارز سایت.</small>',
        'KJP_CHRG_REQUIRES_KJP' =>
            'افزایش موجودی افزودنی پرداخت کلیجا است. ابتدا پرداخت کلیجا ۲.۰ یا جدیدتر را نصب و فعال کنید، سپس این افزونه را نصب کنید.',
    ],
];
