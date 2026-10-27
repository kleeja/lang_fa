<?php
// Kleeja Plugin
// lang_fa
// Version: 1.0
// Developer: Kleeja team

// Prevent illegal run
if (!defined('IN_PLUGINS_SYSTEM')) {
    exit();
}

// Plugin Basic Information
$kleeja_plugin['lang_fa']['information'] = [
    // The casual name of this plugin, anything can a human being understands
    'plugin_title' => [
        'en' => 'Persian Language',
        'ar' => 'اللغة الفارسية',
        'fa' => 'زبان فارسی',
    ],
    // Who wrote this plugin?
    'plugin_developer' => 'Kleeja.net',
    // This plugin version
    'plugin_version' => '1.0',
    // Explain what is this plugin, why should I use it?
    'plugin_description' => [
        'en' => 'Translates Kleeja into Persian (Farsi): the pages of visitors, the control panel and the help guides',
        'ar' => 'تترجم كليجا إلى الفارسية: صفحات الزوار ولوحة التحكم وأدلة المساعدة',
        'fa' => 'کلیجا را به فارسی ترجمه می‌کند: صفحه‌های بازدیدکنندگان، پنل مدیریت و راهنماها',
    ],
    // Min version of Kleeja that's requiered to run this plugin
    'plugin_kleeja_version_min' => '4.0.0',
    // Max version of Kleeja that support this plugin, use 0 for unlimited
    'plugin_kleeja_version_max' => '4.9',
    // Should this plugin run before others?, 0 is normal, and higher number has high priority
    'plugin_priority' => 0,
];

//after installation message, you can remove it, it's not requiered
$kleeja_plugin['lang_fa']['first_run']['ar'] = "
أصبحت اللغة الفارسية (<strong>fa</strong>) متاحة في كليجا.
لاستخدامها اختر «fa» من <strong>الإعدادات ← الواجهة والتصميم</strong>، أو غيّر لغة مجموعة معيّنة من صفحة المستخدمين والمجموعات.
<br>
<a href='./index.php?cp=options&amp;smt=interface'>إعدادات الواجهة</a> -
<a href='./index.php?cp=s_help#help-lang_fa'>دليل الإضافة</a> -
<a href='https://github.com/kleeja/lang_fa/issues' target='_blank' rel='noopener'>الإبلاغ عن مشكلة</a>
";

$kleeja_plugin['lang_fa']['first_run']['en'] = "
The Persian language (<strong>fa</strong>) is now available in Kleeja.
To use it, choose \"fa\" in <strong>Settings → Interface and design settings</strong>, or change the language of one group in Users & Groups.
<br>
<a href='./index.php?cp=options&amp;smt=interface'>Interface settings</a> -
<a href='./index.php?cp=s_help#help-lang_fa'>Plugin guide</a> -
<a href='https://github.com/kleeja/lang_fa/issues' target='_blank' rel='noopener'>Report a problem</a>
";

$kleeja_plugin['lang_fa']['first_run']['fa'] = "
زبان فارسی (<strong>fa</strong>) اکنون در کلیجا در دسترس است.
برای استفاده از آن، «fa» را در <strong>تنظیمات ← تنظیمات رابط و طراحی</strong> انتخاب کنید، یا زبان یک گروه را در کاربران و گروه‌ها تغییر دهید.
<br>
<a href='./index.php?cp=options&amp;smt=interface'>تنظیمات رابط</a> -
<a href='./index.php?cp=s_help#help-lang_fa'>راهنمای افزونه</a> -
<a href='https://github.com/kleeja/lang_fa/issues' target='_blank' rel='noopener'>گزارش مشکل</a>
";

/**
 * special functions
 */

if (!function_exists('lang_fa_add_option')) {
    // the code of the language, the value of $config['language'] that the plugin answers to
    define('LANG_FA_CODE', 'fa');

    // the language files that the plugin translates, in its fa/ folder. The installer has no plugins,
    // so it is never translated: it only reads the languages in lang/ of Kleeja
    define('LANG_FA_FILES', ['common', 'acp', 'help']);

    /**
     * add Persian to a list of languages. Kleeja builds its lists from the folders of lang/,
     * where Persian isn't, so the lists of the control panel would not offer it
     * @param  string $options  the <option> tags of the list
     * @param  string $selected the language that the list shows as chosen
     * @return string
     */
    function lang_fa_add_option($options, $selected)
    {
        // a lang/fa/ folder that the site owner added, Kleeja lists it already
        if (str_contains($options, 'value="' . LANG_FA_CODE . '"')) {
            return $options;
        }

        return $options .
            '<option value="' .
            LANG_FA_CODE .
            '"' .
            ($selected === LANG_FA_CODE ? ' selected="selected"' : '') .
            '>' .
            LANG_FA_CODE .
            '</option>' .
            "\n";
    }

    /**
     * the words of the guide on the help page, in the language of the control panel, and in English
     * for the words that its translation misses
     * @return array
     */
    function lang_fa_help_words()
    {
        global $config;

        $words = (array) require __DIR__ . '/language/help_en.php';
        $language = preg_replace('/[^a-z0-9_-]/i', '', (string) ($config['language'] ?? ''));
        $translation = __DIR__ . "/language/help_{$language}.php";

        if ($language !== '' && $language !== 'en' && file_exists($translation)) {
            // in its own line, Prettier drops the brackets of (require $translation) + $words
            $translated = require $translation;
            $words = (array) $translated + $words;
        }

        return $words;
    }

    /**
     * a section of the guide from its numbered words, like LANG_FA_HELP_TIP_1, LANG_FA_HELP_TIP_2 ..
     * its title, when it has its own, is LANG_FA_HELP_TIP_TITLE
     * @param  array  $words
     * @param  string $type  how Kleeja shows it: features, steps, tips, warnings or faq
     * @param  string $name  the name of its words, LANG_FA_HELP_{name}_1
     * @return array
     */
    function lang_fa_help_section($words, $type, $name)
    {
        $prefix = 'LANG_FA_HELP_' . $name;
        $section = ['type' => $type, 'title' => $words[$prefix . '_TITLE'] ?? '', 'items' => []];

        for ($n = 1; isset($words[$prefix . ($type === 'faq' ? '_Q_' : '_') . $n]); $n++) {
            $section['items'][] =
                $type === 'faq'
                    ? ['q' => $words[$prefix . '_Q_' . $n], 'a' => $words[$prefix . '_A_' . $n] ?? '']
                    : $words[$prefix . '_' . $n];
        }

        return $section;
    }
}

// Plugin Installation function.
// Nothing to add: the words are read from the folder of the plugin, and the language is chosen in the settings
$kleeja_plugin['lang_fa']['install'] = function ($plg_id) {};

// Nothing to update either, the words of a new version are read from its files.
// Kleeja saves the new version of a plugin only when the plugin has this function
$kleeja_plugin['lang_fa']['update'] = function ($old_version, $new_version) {};

// Plugin Uninstallation, function to be called at unistalling.
// Without the plugin, Kleeja shows a site or a group that still uses Persian in English, from left to right,
// and its lists show no language as chosen, so they go back to English
$kleeja_plugin['lang_fa']['uninstall'] = function ($plg_id) {
    global $SQL, $dbprefix;

    foreach (['config', 'groups_data'] as $table) {
        $SQL->build([
            'UPDATE' => "{$dbprefix}{$table}",
            'SET' => 'value = :english',
            'WHERE' => 'name = :name AND value = :persian',
            'BIND' => ['english' => 'en', 'name' => 'language', 'persian' => LANG_FA_CODE],
        ]);
    }
};

// Plugin functions
$kleeja_plugin['lang_fa']['functions'] = [
    // get_lang() reads the words from lang/{language}/{name}.php, and when that file is missing it merges
    // the English one over $lang, with include_once. So the English words are included here first, and the Persian
    // words go over them: the include_once of Kleeja then gets true, for a file that is included already, and adds
    // nothing. A word that the translation misses shows in English
    'get_lang_func' => function ($args) {
        $name = str_replace('.php', '', $args['name']);

        if (
            $args['config']['language'] !== LANG_FA_CODE ||
            $args['folder'] !== '' ||
            !in_array($name, LANG_FA_FILES, true)
        ) {
            return;
        }

        $english = @include_once PATH . 'lang/en/' . $name . '.php';
        $persian = include __DIR__ . '/' . LANG_FA_CODE . '/' . $name . '.php';

        return ['lang' => array_merge($args['lang'], is_array($english) ? $english : [], $persian)];
    },

    // the language of the site, on the Interface and design settings
    'while_fetch_adm_config' => function ($args) {
        if ($args['row']['name'] !== 'language') {
            return;
        }

        return ['lngfiles' => lang_fa_add_option($args['lngfiles'], $args['con']['language'])];
    },

    // the language of the groups, in the Quick Actions of the dashboard
    'require_admin_page_end_start' => function ($args) {
        global $config, $d_groups;

        if (!isset($args['hurry_langs_list'])) {
            return;
        }

        $selected = $d_groups[$config['default_group']]['configs']['language'] ?? '';

        return ['hurry_langs_list' => lang_fa_add_option($args['hurry_langs_list'], $selected)];
    },

    // the language of one group, on its Edit data page. The fields are built already, so the option goes in their HTML
    'require_admin_page_end_g_users' => function ($args) {
        global $d_groups;

        if (empty($args['data']) || empty($args['req_group'])) {
            return;
        }

        $selected = $d_groups[$args['req_group']]['configs']['language'] ?? '';
        $data = $args['data'];

        foreach ($data as $key => $field) {
            $data[$key]['option'] = preg_replace_callback(
                '!(<select[^>]*\bname="language"[^>]*>)(.*?)(</select>)!s',
                fn($match) => $match[1] . lang_fa_add_option($match[2], $selected) . $match[3],
                $field['option'],
            );
        }

        return compact('data');
    },

    // the guide of the plugin on the help page of the control panel, its words are in language/help_{code}.php.
    // The plugin has no page, the guide links to the settings where the language of the site is chosen
    'admin_help_guides' => function ($args) {
        $help_guides = $args['help_guides'];
        $words = lang_fa_help_words();

        // the name of the plugin is the key, so Kleeja knows that the plugin has its guide
        $help_guides['lang_fa'] = [
            'group' => 'plugins',
            'icon' => 'language',
            'title' => $words['LANG_FA_HELP_TITLE'],
            'intro' => $words['LANG_FA_HELP_INTRO'],
            'link' => './?cp=options&amp;smt=interface',
            'link_title' => $words['LANG_FA_HELP_LINK'],
            // tips and warnings are shown beside the others on wide screens
            'sections' => [
                lang_fa_help_section($words, 'steps', 'STEP'),
                lang_fa_help_section($words, 'steps', 'GROUP_STEP'),
                lang_fa_help_section($words, 'faq', 'FAQ'),
                lang_fa_help_section($words, 'tips', 'TIP'),
                lang_fa_help_section($words, 'warnings', 'WARNING'),
            ],
        ];

        return compact('help_guides');
    },
];
