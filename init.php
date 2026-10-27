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
        'en' =>
            'Translates Kleeja into Persian (Farsi): the pages of visitors, the control panel and the help guides, and the plugins of the Kleeja store',
        'ar' => 'تترجم كليجا إلى الفارسية: صفحات الزوار ولوحة التحكم وأدلة المساعدة، وإضافات متجر كليجا',
        'fa' => 'کلیجا را به فارسی ترجمه می‌کند: صفحه‌های بازدیدکنندگان، پنل مدیریت و راهنماها، و افزونه‌های فروشگاه کلیجا',
    ],
    // Min version of Kleeja that's requiered to run this plugin
    'plugin_kleeja_version_min' => '4.0.0',
    // Max version of Kleeja that support this plugin, use 0 for unlimited
    'plugin_kleeja_version_max' => '4.9',
    // Should this plugin run before others?, 0 is normal, and higher number has high priority.
    // It runs after all the others: its admin_help_guides translates the guides that the other plugins added
    'plugin_priority' => -100,
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

    // the Persian of the other plugins, which come in English and Arabic: plugins/{plugin}.php has the name,
    // the description, the message after the installation and the words of a plugin, plugins/help/{plugin}.php
    // the words of its guide. The keys are the keys of the plugin, in its *_translations() and language/help_en.php
    define('LANG_FA_PLUGINS_FOLDER', __DIR__ . '/plugins');

    /**
     * the Persian of another plugin, from plugins/{plugin}.php
     * @param  string $plugin the name of the plugin
     * @return array  title, description, first_run and words, empty for a plugin that isn't translated here
     */
    function lang_fa_plugin($plugin)
    {
        static $plugins = [];

        if (!isset($plugins[$plugin])) {
            $file = LANG_FA_PLUGINS_FOLDER . '/' . $plugin . '.php';
            $plugins[$plugin] = preg_match('/^[a-z0-9_]+$/', $plugin) && is_file($file) ? (array) include $file : [];
        }

        return $plugins[$plugin];
    }

    /**
     * the Persian words of the enabled plugins, which they read from $olang before their English ones
     * @return array
     */
    function lang_fa_plugins_words()
    {
        $words = [];

        foreach (glob(LANG_FA_PLUGINS_FOLDER . '/*.php') ?: [] as $file) {
            $plugin = basename($file, '.php');

            if (!empty(Plugins::getInstance()->installed_plugin_info($plugin))) {
                $words = array_merge($words, lang_fa_plugin($plugin)['words'] ?? []);
            }
        }

        return $words;
    }

    /**
     * the guides of the help page in Persian. A plugin builds its guide from its language/help_{code}.php,
     * and has no help_fa.php, so its guide is in English: each English text is replaced with the Persian one
     * that has the same key in plugins/help/{plugin}.php. The texts that it added to the guides of Kleeja too
     * @param  array $help_guides
     * @return array
     */
    function lang_fa_translate_guides($help_guides)
    {
        $persian = $patterns = [];

        foreach (glob(LANG_FA_PLUGINS_FOLDER . '/help/*.php') ?: [] as $file) {
            $english = PATH . KLEEJA_PLUGINS_FOLDER . '/' . basename($file, '.php') . '/language/help_en.php';

            if (!is_file($english)) {
                continue;
            }

            $english = (array) include $english;

            foreach ((array) include $file as $key => $text) {
                if (!isset($english[$key])) {
                    continue;
                }

                // a plugin can fill {names} of its words before it builds the guide, like the address of its page
                if (preg_match('/\{[a-z_]+\}/', $english[$key])) {
                    $patterns[] = lang_fa_placeholder_pattern($english[$key]) + ['persian' => $text];
                } else {
                    $persian[$english[$key]] = $text;
                }
            }
        }

        array_walk_recursive($help_guides, function (&$text) use ($persian, $patterns) {
            if (!is_string($text)) {
                return;
            }

            if (isset($persian[$text])) {
                $text = $persian[$text];

                return;
            }

            foreach ($patterns as $pattern) {
                if (preg_match($pattern['regex'], $text, $match)) {
                    $values = [];

                    foreach ($pattern['names'] as $n => $name) {
                        $values += ['{' . $name . '}' => $match[$n + 1]];
                    }

                    $text = strtr($pattern['persian'], $values);

                    return;
                }
            }
        });

        return $help_guides;
    }

    /**
     * the regular expression of an English text that has {names}, which matches the text with any value in them
     * @param  string $english
     * @return array  regex, and names: the name of each group of the regex, in order
     */
    function lang_fa_placeholder_pattern($english)
    {
        $names = [];

        // preg_quote() writes the braces as \{ and \}
        $regex = preg_replace_callback(
            '/\\\\\{([a-z_]+)\\\\\}/',
            function ($match) use (&$names) {
                $names[] = $match[1];

                return '(.*?)';
            },
            preg_quote($english, '/'),
        );

        return ['regex' => '/^' . $regex . '$/s', 'names' => $names];
    }

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

        // with the common words of Kleeja, the words of the other plugins. Kleeja adds the Persian words of its
        // database to $olang right after this, so the words that a plugin brings in Persian itself go over these
        if ($name === 'common') {
            global $olang;

            $olang = array_merge((array) $olang, lang_fa_plugins_words());
        }

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

        global $config;

        if ($config['language'] === LANG_FA_CODE) {
            $help_guides = lang_fa_translate_guides($help_guides);
        }

        return compact('help_guides');
    },

    // the name and the description of the other plugins on the Plugins page, and the message after installing one.
    // Kleeja chooses them in English for a language that a plugin doesn't have
    'require_admin_page_end_j_plugins' => function ($args) {
        global $config;

        if ($config['language'] !== LANG_FA_CODE) {
            return;
        }

        $changed = [];

        if (!empty($args['installed_plugins'])) {
            $installed_plugins = $args['installed_plugins'];

            foreach ($installed_plugins as $plugin => $row) {
                $persian = lang_fa_plugin((string) $plugin);

                foreach (['plugin_title' => 'title', 'plugin_description' => 'description'] as $info => $key) {
                    if (!empty($persian[$key]) && isset($row['extra_info'][$info])) {
                        $installed_plugins[$plugin]['extra_info'][$info] = shorten_text($persian[$key], 100);
                    }
                }
            }

            $changed['installed_plugins'] = $installed_plugins;
        }

        if (!empty($args['plugin_first_run']) && !empty($args['plg_name']) && isset($args['text'])) {
            $persian = lang_fa_plugin((string) $args['plg_name'])['first_run'] ?? '';

            if ($persian !== '') {
                $changed['text'] = str_replace($args['plugin_first_run'], $persian, $args['text']);
            }
        }

        return $changed;
    },
];
