<?php
//
// lang_fa, its guide on the help page of the control panel
// English
//
// The guide is built by the admin_help_guides hook in init.php, the texts here can have HTML.
//  - a list is numbered: LANG_FA_HELP_TIP_1, LANG_FA_HELP_TIP_2 ... it ends at the first missing number,
//    so an item can be added or removed without touching the code
//  - LANG_FA_HELP_{LIST}_TITLE is the title of the list, a list without it takes the title that Kleeja gives its type
//  - questions and answers are LANG_FA_HELP_FAQ_Q_1 and LANG_FA_HELP_FAQ_A_1, a question has no HTML
//  - names in <strong> are written as the control panel shows them, the words of Kleeja are in lang/en/
//

return [
    'LANG_FA_HELP_TITLE' => 'Persian Language',
    'LANG_FA_HELP_INTRO' =>
        'This plugin translates Kleeja into Persian (Farsi): the pages of your visitors, the control panel and this help page, from right to left. Kleeja doesn\'t switch to Persian by itself: after installing the plugin, choose the language <code>fa</code> for the whole site or for some groups, as shown below.',
    'LANG_FA_HELP_LINK' => 'Interface and design settings',

    //
    // the whole site
    //
    'LANG_FA_HELP_STEP_TITLE' => 'Show the whole site in Persian',
    'LANG_FA_HELP_STEP_1' => 'Open <strong>Settings → Interface and design settings</strong>.',
    'LANG_FA_HELP_STEP_2' => 'In the <strong>Language</strong> list, choose <code>fa</code>.',
    'LANG_FA_HELP_STEP_3' =>
        'Select <strong>Update Settings</strong>. Every group now sees Kleeja in Persian, and so do you: the control panel reloads in Persian, from right to left.',

    //
    // one group
    //
    'LANG_FA_HELP_GROUP_STEP_TITLE' => 'Show Persian to some groups only',
    'LANG_FA_HELP_GROUP_STEP_1' =>
        'Open <strong>Users & Groups</strong>, and select <strong>Edit data</strong> on the group. For example, <strong>Guests</strong> are the visitors who aren\'t signed in.',
    'LANG_FA_HELP_GROUP_STEP_2' => 'In the <strong>Language</strong> list, choose <code>fa</code>, then select <strong>Submit</strong>.',
    'LANG_FA_HELP_GROUP_STEP_3' =>
        'Or do it from the <strong>Dashboard</strong>: in <strong>Quick Actions</strong>, choose <code>fa</code> under <strong>Language</strong>, choose the group next to it, and select <strong>Change</strong>.',

    //
    // common questions
    //
    'LANG_FA_HELP_FAQ_Q_1' => 'The Language list has no “fa”. Why?',
    'LANG_FA_HELP_FAQ_A_1' =>
        'The plugin adds <code>fa</code> to the lists only while it is enabled. Check it in <strong>Plugins</strong>. The words are in the folder of the plugin, so there is no <code>fa</code> folder in the <code>lang</code> folder of Kleeja, and none is needed.',
    'LANG_FA_HELP_FAQ_Q_2' => 'Some texts are still in English. Why?',
    'LANG_FA_HELP_FAQ_A_2' =>
        'The texts that you wrote yourself aren\'t translated: the name of your service, the <strong>Welcome message</strong>, the <strong>Terms</strong> and the <strong>Extra Templates</strong>. Write them in Persian. This plugin translates the plugins of the Kleeja store too, their pages and their guides on this page. Another plugin shows its words in Persian only when it comes with a Persian translation.',
    'LANG_FA_HELP_FAQ_Q_3' => 'The control panel is in Persian now. How do I switch it back?',
    'LANG_FA_HELP_FAQ_A_3' =>
        'Follow the same steps and choose <code>en</code> or <code>ar</code>. In Persian, the menu item is <strong>تنظیمات</strong>, the page is <strong>تنظیمات رابط و طراحی</strong>, the list is <strong>زبان</strong> and the button is <strong>به‌روزرسانی تنظیمات</strong>.',
    'LANG_FA_HELP_FAQ_Q_4' => 'Can my visitors choose Persian themselves?',
    'LANG_FA_HELP_FAQ_A_4' =>
        'Not with the Language Switcher plugin: its menu lists only the languages in the <code>lang</code> folder of Kleeja. Make Persian the language of their group instead.',
    'LANG_FA_HELP_FAQ_Q_5' => 'What happens when I disable or delete the plugin?',
    'LANG_FA_HELP_FAQ_A_5' =>
        'While it is disabled, the groups that use Persian see Kleeja in English, from left to right, until you enable it again. Deleting it gives English back to the site and to every group that used Persian.',

    //
    // beside the guide
    //
    'LANG_FA_HELP_TIP_1' =>
        'To keep the control panel in your own language while your visitors see Persian, choose Persian for the <strong>Guests</strong> and <strong>Users</strong> groups only.',
    'LANG_FA_HELP_TIP_2' =>
        'The installation wizard, in the <code>install</code> folder, runs without plugins, so it is never shown in Persian.',

    'LANG_FA_HELP_WARNING_1' =>
        'The control panel is shown in the language of your group. Choosing Persian in <strong>Interface and design settings</strong>, which changes every group, or for the <strong>Admins</strong> group, shows the control panel in Persian too.',
];
