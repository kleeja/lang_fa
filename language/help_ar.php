<?php
//
// lang_fa, its guide on the help page of the control panel
// Arabic
//
// The words that are missing here are taken from help_en.php.
// Names in <strong> are written as the control panel shows them, the words of Kleeja are in lang/ar/
//

return [
    'LANG_FA_HELP_TITLE' => 'اللغة الفارسية',
    'LANG_FA_HELP_INTRO' =>
        'تترجم هذه الإضافة كليجا إلى الفارسية: صفحات زوارك ولوحة التحكم وصفحة المساعدة هذه، من اليمين إلى اليسار. لا يتحول كليجا إلى الفارسية من تلقاء نفسه: بعد تثبيت الإضافة اختر اللغة <code>fa</code> للموقع كله أو لبعض المجموعات، كما يلي.',
    'LANG_FA_HELP_LINK' => 'خيارات الواجهة والتصميم',

    //
    // the whole site
    //
    'LANG_FA_HELP_STEP_TITLE' => 'اعرض الموقع كله بالفارسية',
    'LANG_FA_HELP_STEP_1' => 'افتح <strong>إعدادات ← خيارات الواجهة والتصميم</strong>.',
    'LANG_FA_HELP_STEP_2' => 'من قائمة <strong>اللغة</strong> اختر <code>fa</code>.',
    'LANG_FA_HELP_STEP_3' =>
        'اضغط <strong>تحديث الإعدادات</strong>. ترى كل المجموعات كليجا بالفارسية الآن، وأنت أيضًا: تُفتح لوحة التحكم من جديد بالفارسية، من اليمين إلى اليسار.',

    //
    // one group
    //
    'LANG_FA_HELP_GROUP_STEP_TITLE' => 'اعرض الفارسية لبعض المجموعات فقط',
    'LANG_FA_HELP_GROUP_STEP_1' =>
        'افتح <strong>الأعضاء والمجموعات</strong>، واختر <strong>تعديل البيانات</strong> للمجموعة. مجموعة <strong>الزوار</strong> مثلًا هي الزوار الذين لم يسجلوا دخولهم.',
    'LANG_FA_HELP_GROUP_STEP_2' => 'من قائمة <strong>اللغة</strong> اختر <code>fa</code>، ثم اضغط <strong>موافق</strong>.',
    'LANG_FA_HELP_GROUP_STEP_3' =>
        'أو افعل ذلك من <strong>بداية لوحة كليجا</strong>: في <strong>إعدادات سريعة</strong> اختر <code>fa</code> تحت <strong>اللغة</strong>، واختر المجموعة بجانبها، ثم اضغط <strong>تغيير</strong>.',

    //
    // common questions
    //
    'LANG_FA_HELP_FAQ_Q_1' => 'لا أجد «fa» في قائمة اللغة. لماذا؟',
    'LANG_FA_HELP_FAQ_A_1' =>
        'تضيف الإضافة <code>fa</code> إلى القوائم ما دامت مفعّلة فقط، فتحقق منها في <strong>إضافات برمجية</strong>. الكلمات في مجلد الإضافة، لذلك لا يوجد مجلد <code>fa</code> داخل مجلد <code>lang</code> في كليجا، ولا حاجة إليه.',
    'LANG_FA_HELP_FAQ_Q_2' => 'ما زالت بعض النصوص بالإنجليزية. لماذا؟',
    'LANG_FA_HELP_FAQ_A_2' =>
        'النصوص التي كتبتها بنفسك لا تُترجم: اسم مركزك، و<strong>كلمة الترحيب</strong>، و<strong>شروط الخدمة</strong>، و<strong>هيدر وفوتر إضافي</strong>. اكتبها بالفارسية. وتعرض الإضافات الأخرى كلماتها بالفارسية فقط إن كانت معها ترجمة فارسية.',
    'LANG_FA_HELP_FAQ_Q_3' => 'أصبحت لوحة التحكم بالفارسية. كيف أعيدها؟',
    'LANG_FA_HELP_FAQ_A_3' =>
        'اتبع الخطوات نفسها واختر <code>ar</code> أو <code>en</code>. بالفارسية اسم القائمة <strong>تنظیمات</strong>، والصفحة <strong>تنظیمات رابط و طراحی</strong>، وقائمة اللغة <strong>زبان</strong>، والزر <strong>به‌روزرسانی تنظیمات</strong>.',
    'LANG_FA_HELP_FAQ_Q_4' => 'هل يستطيع زواري اختيار الفارسية بأنفسهم؟',
    'LANG_FA_HELP_FAQ_A_4' =>
        'ليس بإضافة مبدّل اللغة: قائمتها تعرض اللغات الموجودة في مجلد <code>lang</code> في كليجا فقط. اجعل الفارسية لغة مجموعتهم بدلًا من ذلك.',
    'LANG_FA_HELP_FAQ_Q_5' => 'ماذا يحدث عندما أعطّل الإضافة أو أحذفها؟',
    'LANG_FA_HELP_FAQ_A_5' =>
        'ما دامت معطّلة، ترى المجموعات التي تستخدم الفارسية كليجا بالإنجليزية، من اليسار إلى اليمين، حتى تفعّلها من جديد. وحذفها يعيد الإنجليزية إلى الموقع وإلى كل مجموعة كانت تستخدم الفارسية.',

    //
    // beside the guide
    //
    'LANG_FA_HELP_TIP_1' =>
        'لتبقى لوحة التحكم بلغتك بينما يرى زوارك الفارسية، اختر الفارسية لمجموعتي <strong>الزوار</strong> و<strong>الاعضاء</strong> فقط.',
    'LANG_FA_HELP_TIP_2' =>
        'معالج التثبيت، في مجلد <code>install</code>، يعمل دون الإضافات، لذلك لا يظهر بالفارسية أبدًا.',

    'LANG_FA_HELP_WARNING_1' =>
        'تظهر لوحة التحكم بلغة مجموعتك. اختيار الفارسية في <strong>خيارات الواجهة والتصميم</strong>، الذي يغيّر كل المجموعات، أو لمجموعة <strong>المسؤولين</strong>، يعرض لوحة التحكم بالفارسية أيضًا.',
];
