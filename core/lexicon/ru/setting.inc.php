<?php
/**
 * Setting English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['area'] = 'Раздел';
$_lang['area_authentication'] = 'Авторизация и безопасность';
$_lang['area_caching'] = 'Кэширование';
$_lang['area_core'] = 'Ядро';
$_lang['area_editor'] = 'Визуальный редактор';
$_lang['area_file'] = 'Файловая система';
$_lang['area_filter'] = 'Фильтр по разделу...';
$_lang['area_furls'] = 'Дружественные URL';
$_lang['area_gateway'] = 'Шлюз';
$_lang['area_language'] = 'Словарь и язык';
$_lang['area_mail'] = 'Почта';
$_lang['area_manager'] = 'Панель управления';
$_lang['area_phpthumb'] = 'phpThumb';
$_lang['area_proxy'] = 'Прокси';
$_lang['area_session'] = 'Сессии и куки';
$_lang['area_lexicon_string'] = 'Запись словаря для раздела';
$_lang['area_lexicon_string_msg'] = 'Введите ключ записи словаря для раздела. Если запись с таким ключом не будет найдена, отобразится сам ключ. <br />Разделы пространства «core»: authentication, caching, file, furls, gateway, language, manager, session, site, system';
$_lang['area_site'] = 'Сайт';
$_lang['area_system'] = 'Система и сервер';
$_lang['areas'] = 'Разделы';
$_lang['charset'] = 'Кодировка';
$_lang['country'] = 'Страна';
$_lang['description_desc'] = 'Краткое описание настройки. Можно указать ключ словаря.';
$_lang['key_desc'] = 'Ключ настройки. Настройка будет доступна в контенте через подстановщик [[++key]]';
$_lang['name_desc'] = 'Название настройки. Можно указать ключ словаря.';
$_lang['namespace'] = 'Пространство имён';
$_lang['namespace_desc'] = 'Пространство имён, с которым этот параметр связан. Тема словаря "default" для этого пространства имён будет использована при просмотре.';
$_lang['namespace_filter'] = 'Отбор по пространству имён...';
$_lang['search_by_key'] = 'Поиск по ключу...';
$_lang['setting_create'] = 'Создать новый параметр';
$_lang['setting_err'] = 'Пожалуйста, проверьте свои данные в следующих полях: ';
$_lang['setting_err_ae'] = 'Параметр с таким ключом уже есть. Пожалуйста укажите другой ключ.';
$_lang['setting_err_nf'] = 'Параметр не найден.';
$_lang['setting_err_ns'] = 'Параметр не указан';
$_lang['setting_err_remove'] = 'При попытке удаления параметра произошла ошибка';
$_lang['setting_err_save'] = 'При попытке сохранения параметра произошла ошибка.';
$_lang['setting_err_startint'] = 'Название параметра не может начинаться с цифры.';
$_lang['setting_err_invalid_document'] = 'Документ с ID %d не существует. Пожалуйста укажите существующий документ.';
$_lang['setting_remove'] = 'Удалить';
$_lang['setting_remove_confirm'] = 'Вы уверены, что хотите удалить эту настройку? Это может нарушить работу MODX.';
$_lang['setting_update'] = 'Редактировать';
$_lang['settings_after_install'] = 'В случае новой установки вам необходимо проконтролировать введенные настройки, и, при необходимости, изменить их. После того, как вы проверите настройки, нажмите «Сохранить» для обновления настроек базы данных.<br /><br />';
$_lang['settings_desc'] = 'Здесь вы можете изменить основные опции и настройки панели управления, а так же функционирования сайта. Дважды нажмите по настройке в колонке «Значение» для редактирования, или нажмите правой кнопкой мыши для других действий. Чтобы увидеть описание настройки, нажмите на «+».';
$_lang['settings_furls'] = 'Дружественные URL';
$_lang['settings_misc'] = 'Различные настройки';
$_lang['settings_site'] = 'Сайт';
$_lang['settings_ui'] = 'Интерфейс и особенности';
$_lang['settings_users'] = 'Пользователь';
$_lang['system_settings'] = 'Системные настройки';
$_lang['usergroup'] = 'Группа пользователей';

// user settings
$_lang['setting_access_category_enabled'] = 'Проверять доступ к категориям';
$_lang['setting_access_category_enabled_desc'] = 'Включает или отключает проверку прав доступа к категориям. <strong>ВАЖНО: Если эта настройка установлена в «Нет», то все политики доступа к категориям будут игнорироваться!</strong>';

$_lang['setting_access_context_enabled'] = 'Проверять доступ к контекстам';
$_lang['setting_access_context_enabled_desc'] = 'Включает или отключает проверку прав доступа к контекстам. <strong>ВАЖНО: Если эта настройка установлена в «Нет», то все политики доступа к контекстам будут игнорироваться! Не отключайте проверку прав доступа к контекстам для всей системы или для контекста "mgr", иначе вы отключите доступ к интерфейсу панели управления.</strong>';

$_lang['setting_access_resource_group_enabled'] = 'Проверять доступ к группам ресурсов';
$_lang['setting_access_resource_group_enabled_desc'] = 'Включает или отключает проверку прав доступа к группам ресурсов. <strong>ВАЖНО: Если эта настройка установлена в «Нет», то все политики доступа к группам ресурсов будут игнорироваться!</strong>';

$_lang['setting_allow_mgr_access'] = 'Доступ к панели управления';
$_lang['setting_allow_mgr_access_desc'] = 'Активируйте данную опцию для доступа или запрета доступа к панели управления.<strong>ВАЖНО: Если эта настройка установлена в «Нет», то пользователи будут перенаправлены на страницу авторизации или на главную страницу!</strong>';

$_lang['setting_failed_login'] = 'Лимит попыток входа в систему';
$_lang['setting_failed_login_desc'] = 'Укажите число неудачных попыток входа в систему, при превышении которого пользователь будет блокирован.';

$_lang['setting_login_allowed_days'] = 'Разрешённые дни';
$_lang['setting_login_allowed_days_desc'] = 'Укажите дни, в которые пользователю разрешено входить в систему управления сайтом.';

$_lang['setting_login_allowed_ip'] = 'Разрешённые IP адреса';
$_lang['setting_login_allowed_ip_desc'] = 'Укажите IP адреса, через запятую, с которых пользователю разрешено входить в систему управления сайтом.';

$_lang['setting_login_homepage'] = 'Главная страница авторизованного пользователя';
$_lang['setting_login_homepage_desc'] = 'Укажите ID ресурса, на который будет перенаправлен пользователь после авторизации. <strong>ВАЖНО: удостоверьтесь, что ID принадлежит существующему и опубликованному ресурсу, и что у пользователя есть права для его просмотра!</strong>';

// system settings
$_lang['setting_access_policies_version'] = 'Версия системы управления политиками доступа';
$_lang['setting_access_policies_version_desc'] = 'Версия системы управления политиками доступа. НЕ МЕНЯЙТЕ!';

$_lang['setting_allow_forward_across_contexts'] = 'Разрешить перенаправление через контексты';
$_lang['setting_allow_forward_across_contexts_desc'] = 'Если разрешено, символические ссылки и метод API modX::sendForward() смогут перенаправлять запросы на ресурсы из других контекстов.';

$_lang['setting_allow_manager_login_forgot_password'] = 'Отображать «Забыл пароль» на странице входа в панель управления.';
$_lang['setting_allow_manager_login_forgot_password_desc'] = 'Если выбрано «Нет», «Забыл пароль» на странице входа в панель управления не будет отображаться.';

$_lang['setting_allow_tags_in_post'] = 'Разрешить передачу HTML тегов в POST запросах';
$_lang['setting_allow_tags_in_post_desc'] = 'Если выбрано «Нет», все POST действия в пределах панели управления будут очищены от любых тегов. MODX рекомендует оставить эту настройку включённой («Да»).';

$_lang['setting_allow_tv_eval'] = 'Отключить исполнение кода в TV';
$_lang['setting_allow_tv_eval_desc'] = 'Выберите этот параметр, чтобы включить или отключить исполнение кода в TV. Если этот параметр имеет значение «Нет», код или значение обработается как обычный текст.';

$_lang['setting_anonymous_sessions'] = 'Анонимные сессии';
$_lang['setting_anonymous_sessions_desc'] = 'Если параметр отключен, доступ к PHP-сессии будут иметь только пользователи, прошедшие проверку. Это позволит уменьшить накладные расходы для анонимных пользователей, если им не нужен доступ к уникальной сессии. Эта настройка не будет работать, если параметр <i>session_enabled</i> имеет значение <b>false</b> (выключен), т. к. сессии и так не будут создаваться.';

$_lang['setting_archive_with'] = 'Использовать PCLZip';
$_lang['setting_archive_with_desc'] = 'Если выбрано «Да», работы с zip архивами будет использоваться PCLZip вместо ZipArchive. Выберите «Да», если вы получаете "extractTo" ошибки или возникают проблемы с распаковкой пакетов.';

$_lang['setting_auto_menuindex'] = 'Нумерация меню по умолчанию';
$_lang['setting_auto_menuindex_desc'] = 'Выберите «Да» для автоматической нумерации меню по умолчанию.';

$_lang['setting_auto_check_pkg_updates'] = 'Автоматически проверять наличие обновлений пакетов';
$_lang['setting_auto_check_pkg_updates_desc'] = 'Если выбрано «Да», MODX будет автоматически проверять наличие обновлений для пакетов в менеджере пакетов. Это может замедлить загрузку таблицы, отображающей пакеты.';

$_lang['setting_auto_check_pkg_updates_cache_expire'] = 'Время жизни кэша результатов автоматической проверки наличия обновлений пакетов';
$_lang['setting_auto_check_pkg_updates_cache_expire_desc'] = 'Продолжительность времени (в минутах), на которое менеджер пакетов будет кэшировать результаты проверки наличия обновлений пакетов.';

$_lang['setting_allow_multiple_emails'] = 'Разрешить пользователям использовать один адрес электронной почты';
$_lang['setting_allow_multiple_emails_desc'] = 'Если включено, разные пользователи могут использовать один и тот же адрес электронной почты.';

$_lang['setting_automatic_alias'] = 'Автоматически генерировать псевдоним';
$_lang['setting_automatic_alias_desc'] = 'Выберите «Да» для автоматической генерации псевдонимов на базе заголовка ресурса при его сохранении.';

$_lang['setting_base_help_url'] = 'Базовый URL помощи';
$_lang['setting_base_help_url_desc'] = 'Базовый URL для ссылок помощи в верхнем правом углу страниц панели управления.';

$_lang['setting_blocked_minutes'] = 'Длительность блокировки';
$_lang['setting_blocked_minutes_desc'] = 'Время (в минутах), на которое пользователь будет блокирован в случае превышения количества попыток входа в систему. Вводите только цифры (без запятых, пробелов и т.п.).';

$_lang['setting_cache_action_map'] = 'Включить кэширование карты действий';
$_lang['setting_cache_action_map_desc'] = 'Если выбрано «Да», карта действий (или карта контроллеров) будет кэшироваться для ускорения загрузки страниц панели управления.';

$_lang['setting_cache_alias_map'] = 'Разрешить кеширование карты алиасов контекста';
$_lang['setting_cache_alias_map_desc'] = 'Если включено, все URI ресурсов кешируются в контекст. Включайте для небольших сайтов и отключайте для больших сайтов для увеличения производительности.';

$_lang['setting_use_context_resource_table'] = 'Использовать таблицу context_resource';
$_lang['setting_use_context_resource_table_desc'] = 'Когда включено, при обновлении контекста используется таблица context_resource. Это позволяет программно иметь один ресурс в нескольких контекстах одновременно. Если вы не используете эти ресурсы в множестве контекстов через API, можно задать это значение равным false. На крупных сайтах вы можете получить потенциальный прирост производительности в админке.';

$_lang['setting_cache_context_settings'] = 'Включить кэширование настроек контекстов';
$_lang['setting_cache_context_settings_desc'] = 'При включении этой опции, настройки контекстов будут кэшироваться для ускорения загрузки страниц.';

$_lang['setting_cache_db'] = 'Включить кэширование базы данных';
$_lang['setting_cache_db_desc'] = 'Если включено, объекты и наборы результатов выборки по SQL запросам кэшируются, значительно снижая нагрузку на базу.';

$_lang['setting_cache_db_expires'] = 'Время жизни кэша базы данных';
$_lang['setting_cache_db_expires_desc'] = 'Это значение (в секундах) устанавливает период жизни кэша для результатов запроса к базе данных.';

$_lang['setting_cache_db_session'] = 'Включить кэширование сессий, обрабатываемых базой данных.';
$_lang['setting_cache_db_session_desc'] = 'Если выбрано «Да», и настройка "cache_db" включена, сессии, хранящиеся в базе данных, будут также кэшироваться.';

$_lang['setting_cache_db_session_lifetime'] = 'Время жизни кэша сессий базы данных.';
$_lang['setting_cache_db_session_lifetime_desc'] = 'Это значение (в секундах) устанавливает период жизни кэша для сессий, обслуживаемых базой данных.';

$_lang['setting_cache_default'] = 'Кэшируемый по умолчанию';
$_lang['setting_cache_default_desc'] = 'Выберите «Да» для того, чтобы сделать все новые ресурсы кэшируемыми по умолчанию.';
$_lang['setting_cache_default_err'] = 'Кэшировать ресурсы по умолчанию?';

$_lang['setting_cache_disabled'] = 'Отключить глобальное кэширование';
$_lang['setting_cache_disabled_desc'] = 'Выберите «Да» для отключения всего механизма кэширования MODX.';
$_lang['setting_cache_disabled_err'] = 'Пожалуйста, укажите включено или нет кэширование.';

$_lang['setting_cache_expires'] = 'Время жизни кэша';
$_lang['setting_cache_expires_desc'] = 'Это значение (в секундах) устанавливает время жизни кэша.';

$_lang['setting_cache_format'] = 'Используемый формат кэша';
$_lang['setting_cache_format_desc'] = '0 = PHP, 1 = JSON, 2 = сериализация. Выберите один из форматов.';

$_lang['setting_cache_handler'] = 'Класс-обработчик системы кэширования';
$_lang['setting_cache_handler_desc'] = 'Имя класса обработчика, используемого для кэширования.';

$_lang['setting_cache_lang_js'] = 'Кэшировать javascript-файлы с записями словаря';
$_lang['setting_cache_lang_js_desc'] = 'Если включено, то будут добавлены кэширующие заголовки к javascript-файлам с записями словарей для панели управления.';

$_lang['setting_cache_lexicon_topics'] = 'Кэшировать темы словарей';
$_lang['setting_cache_lexicon_topics_desc'] = 'Когда включено, все темы словарей будут кэшироваться — это увеличивает скорость загрузки страниц панели управления. MODX рекомендует оставить этот параметр включённым («Да»).';

$_lang['setting_cache_noncore_lexicon_topics'] = 'Кэшировать темы словарей, не входящие в ядро';
$_lang['setting_cache_noncore_lexicon_topics_desc'] = 'Если выбрано «Нет», темы словарей, не входящие в ядро, не будут кэшироваться. Это может быть удобно при разработке компонентов.';

$_lang['setting_cache_resource'] = 'Включить частичное кэширование ресурсов';
$_lang['setting_cache_resource_desc'] = 'Если включено, то частичное кэширование определяется самими ресурсами. Отключение опции отключит его на всём сайте.';

$_lang['setting_cache_resource_expires'] = 'Время жизни частичного кэша ресурсов';
$_lang['setting_cache_resource_expires_desc'] = 'Это значение (в секундах) устанавливает период жизни частичного кэша ресурсов.';

$_lang['setting_cache_scripts'] = 'Включить кэширование скриптов';
$_lang['setting_cache_scripts_desc'] = 'Когда включено, MODX будет кэшировать все скрипты (сниппеты и плагины) в файлы для увеличения скорости загрузки. MODX рекомендует оставить эту настройку включённой («Да»).';

$_lang['setting_cache_system_settings'] = 'Включить кэширование настроек системы';
$_lang['setting_cache_system_settings_desc'] = 'Если выбрано «Да», настройки системы будут кэшироваться для ускорения загрузки страниц. MODX рекомендует оставить эту настройку включённой («Да»).';

$_lang['setting_clear_cache_refresh_trees'] = 'Обновлять древовидные меню при очистке кэша сайта';
$_lang['setting_clear_cache_refresh_trees_desc'] = 'Если включено, то после обновления кэша сайта будут обновлятся древовидные меню.';

$_lang['setting_compress_css'] = 'Использовать сжатый CSS';
$_lang['setting_compress_css_desc'] = 'Если эта опция включена, MODX будет использовать сжатую версию CSS-стилей в интерфейсе панели управления.';

$_lang['setting_compress_js'] = 'Использовать сжатые javascript-библиотеки';
$_lang['setting_compress_js_desc'] = 'Если выбрано «Да», MODX будет предоставлять сжатую версию файла со скриптами панели управления.';

$_lang['setting_compress_js_groups'] = 'Использовать группировку при сжатии javascript';
$_lang['setting_compress_js_groups_desc'] = 'Группировать javascript-файлы панели управления MODX, используя конфигурацию "groupsConfig" для Google компрессора. Выберите «Да», если вы используете расширение "suhosin" или в других проблемных случаях.';

$_lang['setting_compress_js_max_files'] = 'Максимальное количество сжимаемых javascript-файлов';
$_lang['setting_compress_js_max_files_desc'] = 'Максимальное количество javascript-файлов, сжимаемых MODX за раз, если включено сжатие javascript-библиотек. Уменьшите значение, если возникают проблемы с Google компрессором в панели управления.';

$_lang['setting_concat_js'] = 'Использовать объединённые javascript-библиотеки';
$_lang['setting_concat_js_desc'] = 'Если выбрано «Да», MODX будет использовать объединенные версии javascript-библиотек в панели управления. Это существенно увеличивает скорость загрузки страниц панели управления.';

$_lang['setting_confirm_navigation'] = 'Подтверждать переход с несохраненными изменениями';
$_lang['setting_confirm_navigation_desc'] = 'Если выбрано «Да», пользователю нужно будет подтвердить свое намерение перейти, если есть несохраненные изменения.';

$_lang['setting_container_suffix'] = 'Суффикс контейнера';
$_lang['setting_container_suffix_desc'] = 'Суффикс, который будет добавляться к псевдониму ресурса-контейнера (при включенных дружественных URL).';

$_lang['setting_context_tree_sort'] = 'Включить сортировку контекстов в дереве ресурсов';
$_lang['setting_context_tree_sort_desc'] = 'Если выбрано «Да», контексты будут сортироваться по алфавиту в дереве ресурсов.';
$_lang['setting_context_tree_sortby'] = 'Поле для сортировки контекстов в дереве ресурсов';
$_lang['setting_context_tree_sortby_desc'] = 'Поле, по которому будут сортироваться контексты в дереве ресурсов, если сортировка включена.';
$_lang['setting_context_tree_sortdir'] = 'Направление сортировки контекстов в дереве ресурсов';
$_lang['setting_context_tree_sortdir_desc'] = 'Направление сортировки контекстов в дереве ресурсов, если сортировка включена.';

$_lang['setting_cultureKey'] = 'Язык';
$_lang['setting_cultureKey_desc'] = 'Выберите язык для всех контекстов, за исключением панели управления.';

$_lang['setting_date_timezone'] = 'Временная зона по умолчанию';
$_lang['setting_date_timezone_desc'] = 'Если указано, определяет временную зону по умолчанию для PHP-функций, работающими с датами. Список поддерживаемых значений смотрите <a href="http://php.net/timezones" target="_blank">здесь</a>. Если не указано, и PHP ini-параметр "date.timezone" не задан в вашем окружении, будет использоваться Всемирное координированное время.';

$_lang['setting_debug'] = 'Режим отладки';
$_lang['setting_debug_desc'] = 'Включает/выключает режим отладки в MODX и/или устанавливает уровень отображения ошибок для PHP. "" - использовать текущий error_reporting, "0" - отключить (error_reporting = 0), "1" - включить (error_reporting = -1), или любое другое значение error_reporting (как число).';

$_lang['setting_default_content_type'] = 'Тип содержимого по умолчанию';
$_lang['setting_default_content_type_desc'] = 'Тип содержимого по умолчанию для новых ресурсов.';

$_lang['setting_default_duplicate_publish_option'] = 'Настройки публикации при копировании ресурсов';
$_lang['setting_default_duplicate_publish_option_desc'] = 'Выберите настройки публикации при копировании ресурса. Может быть "unpublish" - все копии будут сняты с публикации, "publish" - все копии будут опубликованы, или "preserve" - у копии будет сохранено состояние публикации копируемого ресурса.';

$_lang['setting_default_media_source'] = 'Источник файлов по умолчанию';
$_lang['setting_default_media_source_desc'] = 'Источник файлов, загружаемый по умолчанию.';

$_lang['setting_default_template'] = 'Шаблон по умолчанию';
$_lang['setting_default_template_desc'] = 'Выберите шаблон по умолчанию, который вы хотите использовать для новых ресурсов. Вы сможете изменить шаблон при редактировании ресурса.';

$_lang['setting_default_per_page'] = 'По умолчанию на странице';
$_lang['setting_default_per_page_desc'] = 'Количество строк, отображаемое по умолчанию в таблицах панели управления.';

$_lang['setting_editor_css_path'] = 'Путь к CSS-файлу';
$_lang['setting_editor_css_path_desc'] = 'Укажите путь к CSS-файлу, который должен использоваться текстовым редактором. Лучше всего указать путь от корневого каталога вашего сервера, например: "/assets/site/style.css". Оставьте это поле пустым, если не хотите использовать стили в редакторе.';

$_lang['setting_editor_css_selectors'] = 'CSS-селекторы для текстового редактора';
$_lang['setting_editor_css_selectors_desc'] = 'Разделенный запятыми список CSS-селекторов для текстового редактора.';

$_lang['setting_emailsender'] = 'Адрес электронной почты';
$_lang['setting_emailsender_desc'] = 'Укажите адрес электронной почты, от имени которого будет производиться отправка писем пользователям с именами учётных записей и паролями.';
$_lang['setting_emailsender_err'] = 'Пожалуйста, укажите адрес электронной почты администратора.';

$_lang['setting_emailsubject'] = 'Тема письма при регистрации';
$_lang['setting_emailsubject_desc'] = 'Укажите текст, который будет отображен в письме подтверждения регистрации, в поле «Тема».';
$_lang['setting_emailsubject_err'] = 'Пожалуйста, установите поле «Тема» письма о подтверждении регистрации.';

$_lang['setting_enable_dragdrop'] = 'Включить перетаскивание в древовидных меню ';
$_lang['setting_enable_dragdrop_desc'] = 'Если указано «Нет», перетаскивание будет недоступно для деревьев ресурсов и элементов.';

$_lang['setting_error_page'] = 'Страница ошибки 404 «Документ не найден»';
$_lang['setting_error_page_desc'] = 'Введите ID ресурса, который вы хотите использовать как страницу ошибки 404 «Документ не найден». <strong>ВАЖНО: убедитесь, что этот ID принадлежит существующему ресурсу, и что этот ресурс опубликован!</strong>';
$_lang['setting_error_page_err'] = 'Пожалуйста, укажите ID ресурса для ошибки 404 «Документ не найден».';

$_lang['setting_ext_debug'] = 'Режим отладки ExtJS';
$_lang['setting_ext_debug_desc'] = 'Включать или не включать загрузку ext-all-debug.js для отладки вашего кода на ExtJS.';

$_lang['setting_extension_packages'] = 'Пакеты расширений';
$_lang['setting_extension_packages_desc'] = 'JSON массив с пакетами расширений, который необходимо загрузить при создании экземпляра класса MODX. В формате: [{"packagename":{path":"path/to/package"},{"anotherpkg":{"path":"path/to/otherpackage"}}]';

$_lang['setting_enable_gravatar'] = 'Использовать Gravatar';
$_lang['setting_enable_gravatar_desc'] = 'Если этот параметр включен, в качестве иконки профиля будет использоваться фото из Gravatar (если пользователь не загружал свои фото в профиль).';

$_lang['setting_failed_login_attempts'] = 'Лимит попыток входа в систему';
$_lang['setting_failed_login_attempts_desc'] = 'Число неудачных попыток входа, при превышении которого пользователь пользователь будет заблокирован.';

$_lang['setting_fe_editor_lang'] = 'Язык текстового редактора во фронтенде сайта';
$_lang['setting_fe_editor_lang_desc'] = 'Выберите язык, который будет использоваться в текстовом редакторе во фронтенде сайта.';

$_lang['setting_feed_modx_news'] = 'URL RSS-канала «Новости MODX»';
$_lang['setting_feed_modx_news_desc'] = 'Укажите URL RSS-канала для виджета «Новости MODX».';

$_lang['setting_feed_modx_news_enabled'] = 'Отображение RSS-канала «Новости MODX»';
$_lang['setting_feed_modx_news_enabled_desc'] = 'Если выбрано «Нет», MODX будет скрывать ленту новостей на начальном экране панели управления.';

$_lang['setting_feed_modx_security'] = 'URL канала «Уведомления безопасности MODX»';
$_lang['setting_feed_modx_security_desc'] = 'Укажите URL RSS-канала для виджета «Уведомления безопасности MODX».';

$_lang['setting_feed_modx_security_enabled'] = 'Отображение RSS-канала «Уведомления безопасности MODX»';
$_lang['setting_feed_modx_security_enabled_desc'] = 'Если выбрано «Нет», MODX будет скрывать ленту «Уведомления безопасности MODX» на начальном экране панели управления.';

$_lang['setting_filemanager_path'] = 'Путь для диспетчера файлов (Устарело)';
$_lang['setting_filemanager_path_desc'] = 'Этот параметр устарел - используйте источники файлов. Сервер IIS зачастую не определяет свойство document_root, которое используется диспетчером файлов для определения мест, которые вам доступны. Если у вас возникли проблемы с использованием диспетчера файлов, убедитесь что этот путь указывает в корневую папку установки MODX.';

$_lang['setting_filemanager_path_relative'] = 'Путь для диспетчера файлов относительный? (Устарело)';
$_lang['setting_filemanager_path_relative_desc'] = 'Этот параметр устарел - используйте источники файлов. Если путь для диспетчера файлов (filemanager_path) является относительным к MODX base_path, то установите для этого параметра значение «Да». Если filemanager_path за пределами docroot, установите значение «Нет».';

$_lang['setting_filemanager_url'] = 'URL диспетчера файлов (Устарело)';
$_lang['setting_filemanager_url_desc'] = 'Этот параметр устарел - используйте источники файлов. Optional. Set this if you want to set an explicit URL to access the files in the MODX file manager from (useful if you have changed filemanager_path to a path outside the MODX webroot). Make sure this is the web-accessible URL of the filemanager_path setting value. If leave this empty, MODX will try to automatically calculate it.';

$_lang['setting_filemanager_url_relative'] = 'URL диспетчера файлов относительный? (Устарело)';
$_lang['setting_filemanager_url_relative_desc'] = 'Этот параметр устарел - используйте источники файлов. Если путь для диспетчера файлов (filemanager_url) является относительным к MODX base_url, то установите для этого параметра значение «Да».';

$_lang['setting_forgot_login_email'] = 'Письмо восстановления пароля';
$_lang['setting_forgot_login_email_desc'] = 'Шаблон электронного письма, отсылаемого при запросе пользователем восстановления имени и/или пароля.';

$_lang['setting_form_customization_use_all_groups'] = 'Учитывать членство во всех группах для настройки форм.';
$_lang['setting_form_customization_use_all_groups_desc'] = 'Если выбрано «Да», для настройки форм будут использоваться все наборы правил для всех групп, в которые входит пользователь. В противном случае, будут использоваться наборы правил только для первичной группы. Важно: при включении этой настройки возможны ошибки из-за конфликтов наборов правил настройки форм.';

$_lang['setting_forward_merge_excludes'] = 'sendForward исключённые поля';
$_lang['setting_forward_merge_excludes_desc'] = 'При использовании символической ссылки её непустые поля переопределяют значения соответствующих полей целевого ресурса; используйте этот разделённый запятыми список полей для того, чтобы отключить переопределение полей ресурса полями символической ссылки.';

$_lang['setting_friendly_alias_lowercase_only'] = 'Только строчные символы в псевдонимах';
$_lang['setting_friendly_alias_lowercase_only_desc'] = 'Разрешить использовать только строчные символы в псевдонимах ресурсов.';

$_lang['setting_friendly_alias_max_length'] = 'Максимальная длина псевдонима';
$_lang['setting_friendly_alias_max_length_desc'] = 'Если указано больше нуля, заданное значение будет использоваться как максимальное число символов, допускаемое в псевдониме ресурсов. Ноль означает отсутствие ограничения.';

$_lang['setting_friendly_alias_realtime'] = 'Создавать ЧПУ-псевдоним (так называемые «дружественные URL») «на лету»';
$_lang['setting_friendly_alias_realtime_desc'] = 'Определяет, должен ли псевдоним ресурса создаваться «на лету» при вводе заголовка или это должно случаться когда ресурс сохранен (настройка <b>automatic_alias</b> должна быть включена, чтобы это работало).';

$_lang['setting_friendly_alias_restrict_chars'] = 'Метод фильтрации символов в псевдонимах';
$_lang['setting_friendly_alias_restrict_chars_desc'] = 'Метод фильтрации символов в псевдонимах ресурса. "pattern" - псевдоним может состоять только из символов соответствующих регулярному выражению, "legal" - псевдоним может состоять из любых допустимых в URL символов, "alpha" - псевдоним может состоять только из букв, и "alphanumeric" - псевдоним может состоять только из букв и цифр.';

$_lang['setting_friendly_alias_restrict_chars_pattern'] = 'Шаблон для фильтрации символов в псевдонимах';
$_lang['setting_friendly_alias_restrict_chars_pattern_desc'] = 'Регулярное выражение для ограничения символов, используемых в псевдонимах ресурсов.';

$_lang['setting_friendly_alias_strip_element_tags'] = 'Вырезать теги элементов из псевдонима';
$_lang['setting_friendly_alias_strip_element_tags_desc'] = 'Определяет, следует ли вырезать теги элементов из псевдонимов ресурсов.';

$_lang['setting_friendly_alias_translit'] = 'Транслитерация псевдонимов';
$_lang['setting_friendly_alias_translit_desc'] = 'Метод транслитерации используемый для псевдонимов ресурсов. Пусто или "none" - не использовать транслитерацию. Другие возможные значения: "iconv" (если доступно PHP расширение "iconv") или название таблицы транслитерации, которая используется пользовательским классом транслитерации. Для включения транслитерации с русского языка надо установить расширение ядра "translit", и в настойке «Транслитерация псевдонимов» написать "russian".';

$_lang['setting_friendly_alias_translit_class'] = 'Класс, управляющий транслитерацией псевдонимов';
$_lang['setting_friendly_alias_translit_class_desc'] = 'Класс, производящий транслитерацию при генерации и фильтрации псевдонима ресурса.';

$_lang['setting_friendly_alias_translit_class_path'] = 'Путь к классу, осуществляющему транслитерацию псевдонимов';
$_lang['setting_friendly_alias_translit_class_path_desc'] = 'Местоположение модели пакета, отвечающего за транслитерацию псевдонимов.';

$_lang['setting_friendly_alias_trim_chars'] = 'Символы, вырезаемые из псевдонима';
$_lang['setting_friendly_alias_trim_chars_desc'] = 'Символы, которые надо вырезать из окончания псевдонима.';

$_lang['setting_friendly_alias_word_delimiter'] = 'Разделитель слов в псевдонимах';
$_lang['setting_friendly_alias_word_delimiter_desc'] = 'Символ, который будет заменять пробелы между словами.';

$_lang['setting_friendly_alias_word_delimiters'] = 'Разделители слов в псевдонимах';
$_lang['setting_friendly_alias_word_delimiters_desc'] = 'Символы, представляющие собой разделители слов при обработке псевдонимов. Эти символы будут преобразованы в предпочитаемый символ-разделитель, указанный в настройке "friendly_alias_word_delimiter".';

$_lang['setting_friendly_urls'] = 'Использовать дружественные URL';
$_lang['setting_friendly_urls_desc'] = 'Эта настройка позволяет использовать в MODX дружественные URL. Обратите внимание, что это работает только на серверах Apache, и вам надо модифицировать файл .htaccess, чтобы этот механизм заработал. Для дополнительной информации смотрите пример файла .htaccess, поставляемого с MODX.';
$_lang['setting_friendly_urls_err'] = 'Пожалуйста, укажите, хотите ли вы использовать дружественные URL.';

$_lang['setting_friendly_urls_strict'] = 'Строгий режим дружественных URL';
$_lang['setting_friendly_urls_strict_desc'] = 'Если выбрано «Да», неканонические запросы, соответствующие ресурсу, будут перенаправлены с кодом 301 на канонический URI для этого ресурса. WARNING: Do not enable if you use custom rewrite rules which do not match at least the beginning of the canonical URI. For example, a canonical URI of foo/ with custom rewrites for foo/bar.html would work, but attempts to rewrite bar/foo.html as foo/ would force a redirect to foo/ with this option enabled.';

$_lang['setting_global_duplicate_uri_check'] = 'Проверять на дублирование URI во всех контекстах';
$_lang['setting_global_duplicate_uri_check_desc'] = 'Выберите «Да», для того чтобы проверять на дублирование URI во всех контекстах. Если выбрано «Нет», будет проверяться только контекст, в котором ресурс сохраняется.';

$_lang['setting_hidemenu_default'] = 'Скрыть из меню по умолчанию';
$_lang['setting_hidemenu_default_desc'] = 'Выберите «Да», для того чтобы параметр «Скрыть из меню» был выбран по умолчанию, при создании новых ресурсов.';

$_lang['setting_inline_help'] = 'Показывать текст подсказки рядом с полем';
$_lang['setting_inline_help_desc'] = 'Если выбрано «Да», рядом с полем будет выводиться текст подсказки. Если выбрано «Нет», подсказка будет «всплывающей».';

$_lang['setting_link_tag_scheme'] = 'Схема URL';
$_lang['setting_link_tag_scheme_desc'] = 'Схема генерации URL для тега [[~id]]. Доступные опции смотрите <a href="http://api.modx.com/revolution/2.2/db_core_model_modx_modx.class.html#\\modX::makeUrl()">здесь</a>.';

$_lang['setting_locale'] = 'Локаль';
$_lang['setting_locale_desc'] = 'Устанавливает локаль для системы. Оставьте пустым чтобы использовать локаль по умолчанию. <a href="http://php.net/setlocale" target="_blank">Документация по настройке локалей в PHP</a> .';

$_lang['setting_lock_ttl'] = 'Время жизни блокировки';
$_lang['setting_lock_ttl_desc'] = 'Количество секунд, на которое будет оставаться блокировка ресурса, если пользователь неактивен.';

$_lang['setting_log_level'] = 'Уровень записи сообщений в журнал ошибок';
$_lang['setting_log_level_desc'] = 'Уровень записи сообщений в журнал ошибок. Чем меньше уровень, тем больше сообщений будет записано. Возможные значения: 0 (FATAL), 1 (ERROR), 2 (WARN), 3 (INFO), и 4 (DEBUG).';

$_lang['setting_log_target'] = 'Метод вывода журнала ошибок';
$_lang['setting_log_target_desc'] = 'Метод вывода сообщений журнала. Возможные значения: "FILE", "HTML", или "ECHO". По умолчанию используется "FILE"';

$_lang['setting_mail_charset'] = 'Кодировка';
$_lang['setting_mail_charset_desc'] = 'Кодировка (по умолчанию) для электронных писем, такая "iso-8859-1" как или "utf-8"';

$_lang['setting_mail_encoding'] = 'Формат кодирования';
$_lang['setting_mail_encoding_desc'] = 'Установите формат кодирования для электронных писем. Это может быть "8bit", "7bit", "binary", "base64", и "quoted-printable".';

$_lang['setting_mail_use_smtp'] = 'Использовать SMTP';
$_lang['setting_mail_use_smtp_desc'] = 'Выберите «Да», для использования SMTP при отправки электронной почты.';

$_lang['setting_mail_smtp_auth'] = 'SMTP аутентификация';
$_lang['setting_mail_smtp_auth_desc'] = 'Выберите «Да», для SMTP аутентификации. Будут использоваться настройки "mail_smtp_user" и "mail_smtp_pass".';

$_lang['setting_mail_smtp_helo'] = 'SMTP Helo сообщение';
$_lang['setting_mail_smtp_helo_desc'] = 'Определяет сообщение SMTP HELO (по умолчанию имя хоста).';

$_lang['setting_mail_smtp_hosts'] = 'SMTP хосты';
$_lang['setting_mail_smtp_hosts_desc'] = 'Список хостов, разделенных запятыми. Для каждого хоста можно указать свой порт в следующем формате: [hostname:port] (например: "smtp1.example.com:25;smtp2.example.com"). MODX будет пытаться использовать хосты по порядку.';

$_lang['setting_mail_smtp_keepalive'] = 'SMTP удержание соединения';
$_lang['setting_mail_smtp_keepalive_desc'] = 'Предотвращать закрытие SMTP соединения после каждой отправки сообщения. Не рекомендуется.';

$_lang['setting_mail_smtp_pass'] = 'SMTP пароль';
$_lang['setting_mail_smtp_pass_desc'] = 'Пароль, используемый при SMTP авторизации.';

$_lang['setting_mail_smtp_port'] = 'SMTP номер порта';
$_lang['setting_mail_smtp_port_desc'] = 'Укажите порт SMTP сервера.';

$_lang['setting_mail_smtp_prefix'] = 'SMTP префикс для соединений';
$_lang['setting_mail_smtp_prefix_desc'] = 'Префикс соединений. Доступные варианты: "", "ssl", "tls"';

$_lang['setting_mail_smtp_single_to'] = 'SMTP посылать по одному';
$_lang['setting_mail_smtp_single_to_desc'] = 'Предоставляет возможность отправлять сообщения адресатам из поля "to" по одному, вместо разовой отправки на все адреса.';

$_lang['setting_mail_smtp_timeout'] = 'SMTP время ожидания';
$_lang['setting_mail_smtp_timeout_desc'] = 'Определяет время ожидания (timeout) SMTP сервера. Не работает на win32 серверах.';

$_lang['setting_mail_smtp_user'] = 'SMTP пользователь';
$_lang['setting_mail_smtp_user_desc'] = 'Пользователь, используемый при SMTP авторизации.';

$_lang['setting_main_nav_parent'] = 'Основное меню';
$_lang['setting_main_nav_parent_desc'] = 'Контейнер, содержащий все записи основного меню.';

$_lang['setting_manager_direction'] = 'Направление текста в панели управления';
$_lang['setting_manager_direction_desc'] = 'Выберите направление в котором будет генерироваться текст в панели управления (слева-направо или справа-налево).';

$_lang['setting_manager_date_format'] = 'Формат даты в панели управления';
$_lang['setting_manager_date_format_desc'] = 'Строка в формате PHP date(), определяющая формат даты в панели управления.';

$_lang['setting_manager_favicon_url'] = 'URL фавиконки панели управления';
$_lang['setting_manager_favicon_url_desc'] = 'Если указано, установленное значение будет использоваться в качестве URL фавиконки панели управления MODX. Необходимо указать либо URL относительно директории /manager/, либо абсолютный URL.';

$_lang['setting_manager_js_cache_file_locking'] = 'Включить блокировку файлов JS/CSS кэша.';
$_lang['setting_manager_js_cache_file_locking_desc'] = 'Блокировка файлов кэша. Выберите «Нет» если используется файловая система NFS.';
$_lang['setting_manager_js_cache_max_age'] = 'Время жизни кэша JS/CSS файлов панели управления';
$_lang['setting_manager_js_cache_max_age_desc'] = 'Максимальное время жизни (в секундах) кэша браузера для сжатых JS/CSS файлов панели управления. Используйте большее значение для уменьшения расхода трафика.';
$_lang['setting_manager_js_document_root'] = 'Корневая директория для сжатия JS/CSS';
$_lang['setting_manager_js_document_root_desc'] = 'Если ваш сервер не определяет переменную "DOCUMENT_ROOT", укажите её явно здесь для включения сжатия CSS/JS файлов панели управления. Не изменяйте если вы не понимаете, что означает эта настройка.';
$_lang['setting_manager_js_zlib_output_compression'] = 'Включить zlib сжатие для JS/CSS файлов панели управления';
$_lang['setting_manager_js_zlib_output_compression_desc'] = 'Использовать или нет zlib сжатие для JS/CSS файлов панели управления. Не включайте, если не уверены что PHP-опция "zlib.output_compression" установлена в 1. MODX рекомендует выключить эту настройку («Нет»).';

$_lang['setting_manager_lang_attribute'] = 'Языковые атрибуты HTML и XML панели управления';
$_lang['setting_manager_lang_attribute_desc'] = 'Введите языковой код, который наиболее подходит для выбранного языка панели управления. Это позволит браузерам отображать содержимое в наилучшем для вас формате.';

$_lang['setting_manager_language'] = 'Язык панели управления';
$_lang['setting_manager_language_desc'] = 'Установите язык, используемый в панели управления.';

$_lang['setting_manager_login_url_alternate'] = 'Альтернативный URL страницы входа в панель управления';
$_lang['setting_manager_login_url_alternate_desc'] = 'Альтернативный URL, на который будет направлен неавторизованный пользователь при необходимости авторизации в панели управления. Форма входа должна авторизовать пользователя в контексте "mgr".';

$_lang['setting_manager_login_start'] = 'Страница входа в панель управления';
$_lang['setting_manager_login_start_desc'] = 'Введите ID ресурса, на который будет перенаправлен пользователь после входа в панель управления. <strong>ВАЖНО: убедитесь, что введённый вами ID принадлежит существующему ресурсу, что он опубликован и доступен для пользователя!</strong>';

$_lang['setting_manager_theme'] = 'Шаблон панели управления';
$_lang['setting_manager_theme_desc'] = 'Выберите шаблон для панели управления.';

$_lang['setting_manager_time_format'] = 'Формат времени в панели управления';
$_lang['setting_manager_time_format_desc'] = 'Строка в формате PHP date(), определяющая формат отображения времени в панели управления.';

$_lang['setting_manager_use_tabs'] = 'Использовать вкладки для вывода панелей';
$_lang['setting_manager_use_tabs_desc'] = 'Если выбрано «Да», то для вывода панелей будут использоваться вкладки. Иначе будут использоваться отдельные панели.';

$_lang['setting_manager_week_start'] = 'Первый день недели';
$_lang['setting_manager_week_start_desc'] = 'Укажите день, с которого начинается неделя. Используйте 0 (или оставьте поле пустым) для воскресенья, 1 для понедельника и т.д.';

$_lang['setting_mgr_tree_icon_context'] = 'Иконка контекста';
$_lang['setting_mgr_tree_icon_context_desc'] = 'CSS-класс, используемый для отображения иконки контекста в дереве. Вы можете использовать этот параметр для установки уникальной иконки каждому контексту.';

$_lang['setting_mgr_source_icon'] = 'Иконка источника файлов';
$_lang['setting_mgr_source_icon_desc'] = 'CSS-класс иконки, показывающей медиа-файлы в дереве. По умолчанию используется класс <b>icon-folder-open-o</b>, изображающий открытую папку';

$_lang['setting_modRequest.class'] = 'Класс-обработчик запросов';
$_lang['setting_modRequest.class_desc'] = '';

$_lang['setting_modx_browser_tree_hide_files'] = 'Скрыть файлы';
$_lang['setting_modx_browser_tree_hide_files_desc'] = 'Если установлен этот параметр, файлы, располагающиеся в папке не будут отображаться в дереве файлового менеджера. По умолчанию выключено.';

$_lang['setting_modx_browser_tree_hide_tooltips'] = 'Отключить быстрый предпросмотр изображений';
$_lang['setting_modx_browser_tree_hide_tooltips_desc'] = 'Если параметр включен, при наведении курсора на файл изображения всплывающее окно предпросмотра отображаться не будет. По умолчанию будет.';

$_lang['setting_modx_browser_default_sort'] = 'Сортировка по умолчанию в диспетчере файлов';
$_lang['setting_modx_browser_default_sort_desc'] = 'Метод сортировки по умолчанию для диспетчера файлов. Возможные значения: "name" (имя), "size" (размер), "lastmod" (изменён).';

$_lang['setting_modx_browser_default_viewmode'] = 'Режим просмотра по умолчанию в файловом менеджере';
$_lang['setting_modx_browser_default_viewmode_desc'] = 'Режим просмотра по умолчанию при использовании контекстного меню файлового менеджера в админке. Доступные значения: таблица, список.';

$_lang['setting_modx_charset'] = 'Кодировка символов';
$_lang['setting_modx_charset_desc'] = 'Пожалуйста, укажите какую кодировку вы хотите использовать для административной части сайта. Обратите внимание, что MODX был протестирован с некоторыми кодировками, но не со всеми. Для большинства языков предпочтительной является кодировка UTF-8.';

$_lang['setting_new_file_permissions'] = 'Права на новый файл';
$_lang['setting_new_file_permissions_desc'] = 'При загрузке нового файла через диспетчер файлов, будет произведена попытка установить права доступа к этому файлу в соответствии с этой настройкой. Может не работать на некоторых серверах, например IIS. В этом случае Вам следует вручную установить права.';

$_lang['setting_new_folder_permissions'] = 'Права на новую папку';
$_lang['setting_new_folder_permissions_desc'] = 'При создании новой папки через диспетчер файлов, будет произведена попытка установить права доступа к этой папке в соответствии с этой настройкой. Может не работать на некоторых серверах, например IIS. В этом случае вам следует вручную установить права.';

$_lang['setting_parser_recurse_uncacheable'] = 'Отложенный некешируемый парсинг';
$_lang['setting_parser_recurse_uncacheable_desc'] = 'Если отключено, некешируемые элементы могут показывать кешированное содержимое внутри кэшируемых элементов. Отключайте ТОЛЬКО если у вас есть проблемы со сложным вложенным парсингом, который перестал работать как ожидалось.';

$_lang['setting_password_generated_length'] = 'Длина сгенерированного пароля';
$_lang['setting_password_generated_length_desc'] = 'Длина сгенерированного пароля для пользователя.';

$_lang['setting_password_min_length'] = 'Минимальная длина пароля';
$_lang['setting_password_min_length_desc'] = 'Минимальная длина пароля для пользователя.';

$_lang['setting_preserve_menuindex'] = 'Сохранять индекс меню при дублировании ресурсов';
$_lang['setting_preserve_menuindex_desc'] = 'При дублировании ресурсов порядок расположения меню также будет сохранен.';

$_lang['setting_principal_targets'] = 'Целевые классы для загрузки списков контроля доступа';
$_lang['setting_principal_targets_desc'] = 'Настройте целевые классы, для которых необходимо загрузить списки контроля доступа пользователей.';

$_lang['setting_proxy_auth_type'] = 'Прокси тип авторизации';
$_lang['setting_proxy_auth_type_desc'] = 'Можно указать "BASIC" либо "NTLM".';

$_lang['setting_proxy_host'] = 'Прокси хост';
$_lang['setting_proxy_host_desc'] = 'Если ваш сервер использует прокси, укажите имя прокси хоста для того, чтобы сделать доступными некоторые функции MODX, такие как управление пакетами.';

$_lang['setting_proxy_password'] = 'Прокси пароль';
$_lang['setting_proxy_password_desc'] = 'Пароль для авторизации на проокси сервере.';

$_lang['setting_proxy_port'] = 'Прокси порт';
$_lang['setting_proxy_port_desc'] = 'Порт прокси сервера.';

$_lang['setting_proxy_username'] = 'Пользователь прокси сервера';
$_lang['setting_proxy_username_desc'] = 'Имя пользователя для авторизации на прокси сервере.';

$_lang['setting_photo_profile_source'] = 'Источник файлов для аватарок';
$_lang['setting_photo_profile_source_desc'] = 'Источник файлов для хранения пользовательских аватарок. По умолчанию используется стандартный источник.';

$_lang['setting_phpthumb_allow_src_above_docroot'] = 'phpThumb Разрешить источники выше корневой директории';
$_lang['setting_phpthumb_allow_src_above_docroot_desc'] = 'Разрешает или запрещает использование файлов, расположенных вне корневой директории, в качестве источников. Может быть использовано для систем с множеством контекстов, расположенных на разных виртуальных хостах.';

$_lang['setting_phpthumb_cache_maxage'] = 'phpThumb Максимальное время жизни кэша';
$_lang['setting_phpthumb_cache_maxage_desc'] = 'Удалять кэш изображений, которые не запрашивались больше указанного числа дней.';

$_lang['setting_phpthumb_cache_maxsize'] = 'phpThumb Максимальный размер кэша';
$_lang['setting_phpthumb_cache_maxsize_desc'] = 'Если размер кэша превысит указанное значение (в мегабайтах), то будет удалён кэш картинок, которые запрашивались наиболее давно.';

$_lang['setting_phpthumb_cache_maxfiles'] = 'phpThumb Максимальное количество кэшированных файлов';
$_lang['setting_phpthumb_cache_maxfiles_desc'] = 'Если кэш превысит указанное число файлов, то будет удалён кэш картинок, которые запрашивались наиболее давно.';

$_lang['setting_phpthumb_cache_source_enabled'] = 'phpThumb Кэшировать файлы-источники';
$_lang['setting_phpthumb_cache_source_enabled_desc'] = 'Кэшировать или или нет файлы источников при загрузке. Рекомендуем выключить.';

$_lang['setting_phpthumb_document_root'] = 'PHPThumb Корневая директория';
$_lang['setting_phpthumb_document_root_desc'] = 'Установите эту настройку, если имеются проблемы, связанные с переменной "DOCUMENT_ROOT" или возникают ошибки с "OutputThumbnail" или "!is_resource". Установите необходимый абсолютный путь к корневой директории сервера. При пустом значении MODX будит использовать переменную "DOCUMENT_ROOT" сервера.';

$_lang['setting_phpthumb_error_bgcolor'] = 'phpThumb Цвет фона сообщения об ошибке';
$_lang['setting_phpthumb_error_bgcolor_desc'] = 'Шестнадцатиричное число, без символа #, определяет фон сообщения об ошибке.';

$_lang['setting_phpthumb_error_fontsize'] = 'phpThumb Размер шрифта сообщения об ошибке';
$_lang['setting_phpthumb_error_fontsize_desc'] = 'Размер шрифта, заданный в em.';

$_lang['setting_phpthumb_error_textcolor'] = 'phpThumb Цвет текста ошибки';
$_lang['setting_phpthumb_error_textcolor_desc'] = 'Шестнадцатиричное число, без символа #, определяет цвет текста сообщения об ошибке.';

$_lang['setting_phpthumb_far'] = 'phpThumb Принудительное соотношение сторон';
$_lang['setting_phpthumb_far_desc'] = 'Значение по умолчанию для параметра far когда он используется в MODX. По умолчанию значение C, которое заставляет сохранить пропорции относительно центра.';

$_lang['setting_phpthumb_imagemagick_path'] = 'phpThumb Путь к ImageMagick';
$_lang['setting_phpthumb_imagemagick_path_desc'] = 'Необязательно. Устанавливает альтернативный путь к ImageMagick здесь для генерации эскизов с phpThumb, если не задано в PHP по умолчанию.';

$_lang['setting_phpthumb_nohotlink_enabled'] = 'phpThumb Отключить хотлинкинг';
$_lang['setting_phpthumb_nohotlink_enabled_desc'] = 'Удаленные серверы разрешены в параметре src пока отключен hotlinking в phpThumb.';

$_lang['setting_phpthumb_nohotlink_erase_image'] = 'phpThumb Удалять изображения при включенном Hotlinking';
$_lang['setting_phpthumb_nohotlink_erase_image_desc'] = 'Сообщает, когда нельзя удалить изображение, сгенерированное на удаленном сервере.';

$_lang['setting_phpthumb_nohotlink_text_message'] = 'phpThumb Сообщение о запрете Hotlinking';
$_lang['setting_phpthumb_nohotlink_text_message_desc'] = 'Сообщение, которое отображается вместо картинок, когда hotlinking запрещен.';

$_lang['setting_phpthumb_nohotlink_valid_domains'] = 'phpThumb Допустимые домены для Hotlinking';
$_lang['setting_phpthumb_nohotlink_valid_domains_desc'] = 'Разделенный запятыми список имен хостов, которые допустимы в ссылках в src.';

$_lang['setting_phpthumb_nooffsitelink_enabled'] = 'phpThumb Запрещать внешние ссылки';
$_lang['setting_phpthumb_nooffsitelink_enabled_desc'] = 'Запрещает другим использовать phpThumb для генерации изображений на их собственных сайтах.';

$_lang['setting_phpthumb_nooffsitelink_erase_image'] = 'phpThumb Удалять изображения по внешним ссылкам';
$_lang['setting_phpthumb_nooffsitelink_erase_image_desc'] = 'Сообщает, когда нельзя удалить изображение, связанное с удаленным сервером.';

$_lang['setting_phpthumb_nooffsitelink_require_refer'] = 'phpThumb Требовать указание referrer для внешних подключений';
$_lang['setting_phpthumb_nooffsitelink_require_refer_desc'] = 'Если включено, любые внешние запросы без разрешенного заголовка referrer будут отклонены.';

$_lang['setting_phpthumb_nooffsitelink_text_message'] = 'phpThumb Сообщение о недоступности внешних ссылок';
$_lang['setting_phpthumb_nooffsitelink_text_message_desc'] = 'Сообщение, которое отображается вместо картинок, когда внешнее подключение отклонено.';

$_lang['setting_phpthumb_nooffsitelink_valid_domains'] = 'phpThumb Допустимые домены для внешних ссылок';
$_lang['setting_phpthumb_nooffsitelink_valid_domains_desc'] = 'Разделенный запятыми список имен хостов, которым разрешено внешнее подключение.';

$_lang['setting_phpthumb_nooffsitelink_watermark_src'] = 'phpThumb Адрес водяного знака для внешних запросов';
$_lang['setting_phpthumb_nooffsitelink_watermark_src_desc'] = 'Необязательно. Допустимый путь к файлу, который будет использоваться в качестве водяного знака, когда ваши изображения отображаются вне сайта для phpThumb.';

$_lang['setting_phpthumb_zoomcrop'] = 'phpThumb Кадрирование';
$_lang['setting_phpthumb_zoomcrop_desc'] = 'Значение zc по умолчанию для использования в MODX. По умолчанию 0, что предотвращает обрезку с увеличением (zoom cropping).';

$_lang['setting_publish_default'] = ' Публиковать по умолчанию';
$_lang['setting_publish_default_desc'] = 'Выберите «Да» если хотите, чтобы все новые ресурсы сразу становились опубликованными.';
$_lang['setting_publish_default_err'] = 'Пожалуйста, укажите хотите ли вы чтобы новые ресурсы по умолчанию публиковались.';

$_lang['setting_rb_base_dir'] = 'Путь к ресурсам';
$_lang['setting_rb_base_dir_desc'] = 'Введите физический путь к каталогу ресурсов. Если вы используете IIS, MODX может некорректно обработать путь, принуждая диспетчер файлов выдавать ошибки. В этом случае, путь к каталогу с ресурсами нужно ввести здесь (так, каким вы его видите в обозревателе windows). <strong>ВАЖНО:</strong> В каталоге должны содержаться подкаталоги images, files, flash and media для корректного функционирования диспетчера файлов.';
$_lang['setting_rb_base_dir_err'] = 'Корневой каталог диспетчера файлов (устарело).';
$_lang['setting_rb_base_dir_err_invalid'] = 'Корневой каталог диспетчера файлов не существует или к нему нет доступа. Укажите правильный каталог или настройте права доступа';

$_lang['setting_rb_base_url'] = 'URL ресурсов (устарело)';
$_lang['setting_rb_base_url_desc'] = 'Введите относительный путь (URL) к каталогу ресурсов. Обычно, эта настройка устанавливается автоматически. Однако, если вы используете IIS, MODX может быть не способен этого сделать, что приведёт к ошибке в работе диспетчера файлов. В этом случае, вы можете ввести URL так, как он бы отображался в Internet Explorer.';
$_lang['setting_rb_base_url_err'] = 'Пожалуйста, укажите базовый URL диспетчера файлов.';

$_lang['setting_request_controller'] = 'Имя файла контроллера запроса';
$_lang['setting_request_controller_desc'] = 'Имя файла основного контроллера запроса, из которого MODX загружается. Большинство пользователей может оставить значение "index.php".';

$_lang['setting_request_method_strict'] = 'Строгий метод запроса';
$_lang['setting_request_method_strict_desc'] = 'Если включен, запросы через параметр ID будут игнорироваться при включённых дружественных URL. Если дружественные URL отключены, то запросы с использованием псевдонима будут игнорироваться.';

$_lang['setting_request_param_alias'] = 'Имя параметра запроса для псевдонима';
$_lang['setting_request_param_alias_desc'] = 'Имя GET параметра, передающего псевдоним ресурса, при использовании дружественных URL.';

$_lang['setting_request_param_id'] = 'Имя параметра запроса для идентификатора';
$_lang['setting_request_param_id_desc'] = 'Имя GET параметра, передающего идентификатор ресурса, когда дружественные URL отключены.';

$_lang['setting_resolve_hostnames'] = 'Определять имена хостов';
$_lang['setting_resolve_hostnames_desc'] = 'Хотите ли вы, чтобы MODX пытался определить имена хостов ваших пользователей при каждом посещении? Определение имён хостов может вызвать некоторую дополнительную нагрузку на сервер, хотя ваши пользователи, в любом случае, этого не заметят.';

$_lang['setting_resource_tree_node_name'] = 'Поле для названия узла в дереве ресурсов';
$_lang['setting_resource_tree_node_name_desc'] = 'Укажите поле ресурса, которое будет использоваться в качестве названия узла в дереве ресурсов. По умолчанию поле "pagetitle", любое поле ресурса может быть использовано: "menutitle", "alias", "longtitle", и т.д.';

$_lang['setting_resource_tree_node_name_fallback'] = 'Запасное поле для узла в дереве ресурсов';
$_lang['setting_resource_tree_node_name_fallback_desc'] = 'Укажите поле ресурса для использования в качестве запасного названия узла в дереве ресурсов. Это значение будет использоваться, если ресурс имеет пустое значение для заданного поля ресурса в дереве.';

$_lang['setting_resource_tree_node_tooltip'] = 'Поле для подсказки для узла в дереве ресурсов.';
$_lang['setting_resource_tree_node_tooltip_desc'] = 'Укажите поле ресурса для использования в качестве всплывающей подсказки в дереве ресурсов. Любое поле ресурса может быть использовано: "menutitle", "alias", "longtitle", и т.д. Если не указано, будет использовано "longtitle" с "description" под ним.';

$_lang['setting_richtext_default'] = 'Использовать визуальный редактор';
$_lang['setting_richtext_default_desc'] = 'Выберите «Да», чтобы все новые ресурсы использовали визуальный текстовый редактор по умолчанию.';

$_lang['setting_search_default'] = '«Доступен для поиска» по умолчанию';
$_lang['setting_search_default_desc'] = 'Выберите «Да» для того, чтобы сделать все новые ресурсы доступными для поиска по умолчанию.';
$_lang['setting_search_default_err'] = 'Пожалуйста, укажите, хотите ли вы чтобы ресурсы были доступны для поиска по умолчанию.';

$_lang['setting_server_offset_time'] = 'Разница во времени';
$_lang['setting_server_offset_time_desc'] = 'Укажите разницу в часах между вашим локальным временем и временем сервера.';

$_lang['setting_server_protocol'] = 'Тип сервера';
$_lang['setting_server_protocol_desc'] = 'Если ваш сайт использует https соединение, пожалуйста, укажите это здесь.';
$_lang['setting_server_protocol_err'] = 'Пожалуйста, укажите, использует ли ваш сайт защищённое соединение.';
$_lang['setting_server_protocol_http'] = 'http';
$_lang['setting_server_protocol_https'] = 'https';

$_lang['setting_session_cookie_domain'] = 'Домен для сессионных куки';
$_lang['setting_session_cookie_domain_desc'] = 'Используйте эту настройку для указания доменного имени для сессионных куки. При пустом значении, в качестве доменного имени будет использоваться текущий домен.';

$_lang['setting_session_cookie_lifetime'] = 'Длительность хранения куки сессий';
$_lang['setting_session_cookie_lifetime_desc'] = 'Используйте эту настройку для выбора длительности хранения сессионных куки в секундах. Эта настройка используется для определения длительности хранения клиентских сессионных куки при выборе опции «запомнить меня» во время аутентификации.';

$_lang['setting_session_cookie_path'] = 'Путь для сессионных куки';
$_lang['setting_session_cookie_path_desc'] = 'Используйте эту настройку для задания пути для сессионных куки. Оставьте значение пустым для использования "MODX_BASE_URL" в качестве пути.';

$_lang['setting_session_cookie_secure'] = 'Шифрование сессионных куки';
$_lang['setting_session_cookie_secure_desc'] = 'Включите эту настройку для использования шифрования сессионных куки.';

$_lang['setting_session_cookie_httponly'] = 'Сессионные куки в режиме HttpOnly';
$_lang['setting_session_cookie_httponly_desc'] = 'Включите эту настройку для установки флага HttpOnly для сессионых кук.';

$_lang['setting_session_gc_maxlifetime'] = 'Максимальное время жизни сессии';
$_lang['setting_session_gc_maxlifetime_desc'] = 'Позволяет настроить PHP-параметр "session.gc_maxlifetime" сборщика мусора при использовании обработчика "modSessionHandler".';

$_lang['setting_session_handler_class'] = 'Имя класса-обработчика сессий';
$_lang['setting_session_handler_class_desc'] = 'Для управления сессиями в базе данных, используйте "modSessionHandler". Оставьте это поле пустым для использования стандартной обработкой сессий в PHP.';

$_lang['setting_session_name'] = 'Имя сессии';
$_lang['setting_session_name_desc'] = 'Используйте эту настройку для указания сессионного имени, используемого в сессиях MODX. Оставьте значение пустым для использования PHP имени сессии по умолчанию.';

$_lang['setting_settings_version'] = 'Версия настроек';
$_lang['setting_settings_version_desc'] = 'Установленная версия MODX.';

$_lang['setting_settings_distro'] = 'Дистрибутив';
$_lang['setting_settings_distro_desc'] = 'Версия установленного дистрибутива MODX.';

$_lang['setting_set_header'] = 'Посылать HTTP заголовки';
$_lang['setting_set_header_desc'] = 'Когда включено, MODX будет пытаться установить HTTP заголовки для ресурсов.';

$_lang['setting_send_poweredby_header'] = 'Отправлять заголовок X-Powered-By';
$_lang['setting_send_poweredby_header_desc'] = 'Когда включено, MODX будет отправлять заголовок "X-Powered-By", чтобы обозначить этот сайт как созданный на MODX. Это помогает отследить глобальное использование MODX с помощью сторонних трекеров, проверяющих ваш сайт. Поскольку это облегчает определение системы, на которой создан ваш сайт, это может несколько увеличить риски с точки зрения безопасности в том случае, если в MODX будет найдена уязвимость.';

$_lang['setting_show_tv_categories_header'] = 'Показывать заголовок «Категории» над вкладками с категориями при выводе TV';
$_lang['setting_show_tv_categories_header_desc'] = 'Если указано «Да», над вкладками категорий дополнительных полей будет отображен заголовок «Категории».';

$_lang['setting_signupemail_message'] = 'Письмо регистрации';
$_lang['setting_signupemail_message_desc'] = 'Здесь вы можете установить сообщение, отправляемое вашим пользователям после регистрации учётной записи, с данными об их имени учётной записи и пароле. <br /><strong>ВАЖНО:<strong> Следующие подстановщики заменяются MODX перед отправкой письма: <br /><br />[[+sname]] - название вашего сайта, <br />[[+saddr]] - адрес электронной почты вашего сайта, <br />[[+surl]] - url вашего сайта, <br />[[+uid]] - имя учётной записи пользователя (логин) или идентификатор, <br />[[+pwd]] - пароль пользователя, <br />[[+ufn]] - полное имя пользователя. <br /><br /><strong>Обязательно укажите тэги [[+uid]] и [[+pwd]] в письме, иначе ваши пользователи не смогут узнать свои имя учётной записи и пароль!</strong>';
$_lang['setting_signupemail_message_default'] = 'Здравствуйте, [[+uid]] \n\nВаши данные регистрации на сайте [[+sname]]:\n\nИмя пользователя: [[+uid]]\nПароль: [[+pwd]]\n\nКак только вы авторизуетесь на сайте ([[+surl]]), вы сможете поменять свой пароль.\n\nС уважением,\nАдминистрация сайта';

$_lang['setting_site_name'] = 'Название сайта';
$_lang['setting_site_name_desc'] = 'Введите название вашего сайта.';
$_lang['setting_site_name_err']  = 'Пожалуйста, введите название сайта.';

$_lang['setting_site_start'] = 'Главная страница сайта';
$_lang['setting_site_start_desc'] = 'Введите ID ресурса, который вы хотите использовать в качестве «Главной страницы сайта». <strong>ВАЖНО: убедитесь, что этот ID принадлежит существующему ресурсу и что этот ресурс опубликован!</strong>';
$_lang['setting_site_start_err'] = 'Пожалуйста, укажите ID ресурса, который будет «Главной страницей сайта».';

$_lang['setting_site_status'] = 'Статус сайта';
$_lang['setting_site_status_desc'] = 'Выберите «Да» для публикации вашего сайта в сети. Если вы выберите «Нет», ваши посетители увидят «Сообщение о недоступности сайта», и не смогут просматривать содержимое сайта.';
$_lang['setting_site_status_err'] = 'Пожалуйста, выберите «Да», если сайт работает или «Нет», если сайт не работает.';

$_lang['setting_site_unavailable_message'] = 'Сообщение о недоступности сайта';
$_lang['setting_site_unavailable_message_desc'] = 'Сообщение, которое будет показано в случае, если сайт не доступен или возникла ошибка. <strong>ВАЖНО: Это сообщение выводится только в случае, если не указана страница «Сайт не доступен».</strong>';

$_lang['setting_site_unavailable_page'] = 'Страница «Сайт не доступен»';
$_lang['setting_site_unavailable_page_desc'] = 'Введите идентификатор ресурса, который вы хотите использовать в качестве страницы «Сайт не доступен». <strong>ВАЖНО: убедитесь, что этот идентификатор принадлежит существующему ресурсу и этот ресурс опубликован!</strong>';
$_lang['setting_site_unavailable_page_err'] = 'Пожалуйста, укажите ID ресурса для страницы «Сайт недоступен».';

$_lang['setting_strip_image_paths'] = 'Переписывать пути для браузера?';
$_lang['setting_strip_image_paths_desc'] = 'Если установлено значение «Нет», MODX будет использовать абсолютные ссылки для изображений, файлов, flash и тому подобного. Относительные ссылки удобнее, если вы в будущем собираетесь переместить свой сайт, например, с тестового сервера на конечный. Если вы не понимаете о чем идёт речь, оставьте значение «Да».';

$_lang['setting_symlink_merge_fields'] = 'Объединять поля ресурса с полями символической ссылки';
$_lang['setting_symlink_merge_fields_desc'] = 'Если установлено значение «Да», то непустые поля символической ссылки заменят поля целевого ресурса при переадресации с использованием символической ссылки.';

$_lang['setting_syncsite_default'] = 'Очищать кэш по умолчанию';
$_lang['setting_syncsite_default_desc'] = 'Если параметр включен, при сохранении ресурса кэш будет очищаться по умолчанию.';
$_lang['setting_syncsite_default_err'] = 'Пожалуйста, укажите, хотите ли вы или нет, чтобы кэш очищался по умолчанию при сохранении ресурса.';

$_lang['setting_topmenu_show_descriptions'] = 'Показывать описание в верхнем меню';
$_lang['setting_topmenu_show_descriptions_desc'] = 'Если установлено значение «Нет», MODX будет скрывать дополнительное описание для пунктов верхнего меню.';

$_lang['setting_tree_default_sort'] = 'Поле сортировки дерева ресурсов';
$_lang['setting_tree_default_sort_desc'] = 'Поле, по которому сортируется дерево ресурсов при загрузке.';

$_lang['setting_tree_root_id'] = 'ID корня дерева ресурсов';
$_lang['setting_tree_root_id_desc'] = 'Укажите ID ресурса, который будет корнем дерева ресурсов. Пользователь будет иметь возможность видеть только дочерние ресурсы этого ресурса.';

$_lang['setting_tvs_below_content'] = 'Разместить TV ниже контента';
$_lang['setting_tvs_below_content_desc'] = 'Если выбрано «Да», дополнительные поля будут размещены ниже поля редактирования ресурса.';

$_lang['setting_ui_debug_mode'] = 'Режим отладки для интерфейса менеджера';
$_lang['setting_ui_debug_mode_desc'] = 'Если выбрано «Да», в консоль браузера будут выводиться отладочные сообщения интерфейса панели управления. Вы должны использовать браузер, поддерживающий console.log.';

$_lang['setting_udperms_allowroot'] = 'Разрешить доступ к корневой папке';
$_lang['setting_udperms_allowroot_desc'] = 'Разрешает или запрещает пользователям создавать ресурсы в корневой папке сайта.';

$_lang['setting_unauthorized_page'] = 'Страница ошибки 403 «Доступ запрещен»';
$_lang['setting_unauthorized_page_desc'] = 'Введите идентификатор ресурса, который вы хотите выводить пользователям при запросе защищённых или требующих авторизации ресурсов. <strong>ВАЖНО: убедитесь, что введённый идентификатор принадлежит существующему ресурсу и этот ресурс опубликован и публично доступен!</strong>';
$_lang['setting_unauthorized_page_err'] = 'Пожалуйста укажите ID ресурса, который будет являться страницей ошибки 403 «Доступ запрещен».';

$_lang['setting_upload_files'] = 'Разрешённые к загрузке файлы';
$_lang['setting_upload_files_desc'] = 'Здесь вы можете указать список типов файлов, которые можно загружать в каталог "assets/files/" используя диспетчер файлов. Пожалуйста, введите расширения файлов, разделяя их запятыми.';

$_lang['setting_upload_flash'] = 'Разрешенные к загрузке flash-файлы';
$_lang['setting_upload_flash_desc'] = 'Здесь вы можете ввести список типов файлов, которые можно загружать в каталог "assets/flash/" использую диспетчер файлов. Пожалуйста, введите расширения файлов, разделяя их запятыми.';

$_lang['setting_upload_images'] = 'Разрешенные к загрузке изображения';
$_lang['setting_upload_images_desc'] = 'Здесь вы можете ввести список типов файлов, которые можно загружать в каталог "assets/images/" использую диспетчер файлов. Пожалуйста, введите расширения файлов-изображений, разделяя их запятыми.';

$_lang['setting_upload_maxsize'] = 'Максимальный размер загрузки';
$_lang['setting_upload_maxsize_desc'] = 'Введите максимальный размер файла, возможный для загрузки через диспетчер файлов. Размер файла должен быть введен в байтах.';

$_lang['setting_upload_media'] = 'Разрешенные к загрузке медиа-файлы';
$_lang['setting_upload_media_desc'] = 'Здесь вы можете ввести список файлов, которые могут быть загружены в "assets/media/" через диспетчер файлов. Пожалуйста, введите список расширений для медиа-файлов, используя в качестве разделителя запятую.';

$_lang['setting_use_alias_path'] = 'Использовать вложенные URL';
$_lang['setting_use_alias_path_desc'] = 'Установка значения «Да» для этой опции произведет вывод полного пути к ресурсу, если у ресурса есть псевдоним. Например, если ресурс с псевдонимом "child" расположен внутри ресурса-контейнера с псевдонимом "parent", то полный путь к ресурсу будет выведен так: "/parent/child.html".<br /><strong>ВАЖНО: Устанавливая значение «Да» для этой опции, используйте полный путь для указания пути к таким файлам, как изображения, css, javascript, и т.д.: например, "/assets/images", а не "assets/images". Или же используйте тег &lt;base /&gt; для явного указания базового URL.</strong>';

$_lang['setting_use_browser'] = 'Разрешить диспетчер файлов';
$_lang['setting_use_browser_desc'] = 'Выберите «Да» чтобы включить диспетчер файлов. Это позволит пользователям просматривать и загружать медиа-файлы на сервер.';
$_lang['setting_use_browser_err'] = 'Пожалуйста, укажите, хотите вы или нет использовать диспетчер файлов.';

$_lang['setting_use_editor'] = 'Использовать текстовый редактор';
$_lang['setting_use_editor_desc'] = 'Хотите ли вы использовать Rich Text Editor (RTE)? Если вам удобнее использовать HTML, можете выключить RTE с помощью этой опции. Имейте в виду, что эта опция применяется ко всем документам и пользователям!';
$_lang['setting_use_editor_err'] = 'Пожалуйста, укажите, хотите вы или нет использовать RTE редактор.';

$_lang['setting_use_frozen_parent_uris'] = 'Использовать «замороженные» URI родителя';
$_lang['setting_use_frozen_parent_uris_desc'] = 'Если параметр включен, URI для дочерних ресурсов будет генерироваться с учётом «замороженного» URI родителя, игнорируя псевдонимы ресурсов выше по дереву.';

$_lang['setting_use_multibyte'] = 'Использовать библиотеку "mbstring"';
$_lang['setting_use_multibyte_desc'] = 'Включите, если вы хотите использовать библиотеку "mbstring" для работы с многобайтовыми кодировками. Включайте только, если библиотека "mbstring" установлена на вашем сервере.';

$_lang['setting_use_weblink_target'] = 'Использовать целевую веб-ссылку';
$_lang['setting_use_weblink_target_desc'] = 'Если выбрано «Да», MODX теги ссылок и makeUrl() API вызов будут генерировать конечные ссылки, указанные как целевые URL для ресурсов типа «ссылка». В противном случае, будет сгенерирована внутренняя ссылка, перенаправляющая на целевой URL.';

$_lang['setting_user_nav_parent'] = 'Меню пользователя';
$_lang['setting_user_nav_parent_desc'] = 'Контейнер, содержащий все записи меню пользователя.';

$_lang['setting_webpwdreminder_message'] = 'Напоминание пароля';
$_lang['setting_webpwdreminder_message_desc'] = ' Здесь вы можете создать сообщение, которое будет отсылаться пользователям, когда они запрашивают напоминание пароля. <br /><strong>ПРИМЕЧАНИЕ:</strong> Следующие подстановщики отобразят соответствующие данные при отправлении письма: <br /><br />[[+sname]] - название сайта, <br />[[+saddr]] - e-mail адрес сайта, <br />[[+surl]] - URL сайта, <br />[[+uid]] - логин или id пользователя, <br />[[+pwd]] - пароль пользователя, <br />[[+ufn]] - полное имя пользователя. <br /><br /><strong>Убедитесь, что в сообщении присутствуют поля [+uid+] и [+pwd+], иначе пользователь не узнает свои логин и пароль</strong>';
$_lang['setting_webpwdreminder_message_default'] = 'Здравствуйте [[+uid]]\n\n Для активации нового пароля перейдите по ссылке: \n\n[[+surl]]\n\n после успешного перехода по ссылке Вы можете использовать следующий пароль для входа в систему:\n\nПароль: [[+pwd]]\n\nЕсли Вы не запрашивали напоминание пароля, то проигнорируйте это письмо.\n\nС уважением,\n администратор сайта';

$_lang['setting_websignupemail_message'] = 'Регистрация веб-пользователя';
$_lang['setting_websignupemail_message_desc'] = 'Здесь вы можете создать сообщение, которое будет отсылаться веб-пользователям, когда создается учетная запись нового веб-пользователя. Письмо должно содержать логин и пароль. <br /><strong>ПРИМЕЧАНИЕ:</strong> следующие плейсхолдеры отобразят соответствующие данные при отправлении письма: <br /><br />[[+sname]] - название сайта, <br />[[+saddr]] - email адрес сайта, <br />[[+surl]] - URL сайта, <br />[[+uid]] - логин или ID пользователя, <br />[[+pwd]] - пароль пользователя, <br />[[+ufn]] - полное имя пользователя. <br /><br /><strong>Убедитесь, что в сообщении присутствуют поля [[+uid]] и [[+pwd]], иначе пользователь не узнает свои логин и пароль!</strong>';
$_lang['setting_websignupemail_message_default'] = 'Здравствуйте [[+uid]] \n\nЭто Ваши данные для входа на [[+sname]]:\n\nВаш логин: [[+uid]]\nВаш пароль: [[+pwd]]\n\nСразу же после входа на [[+sname]] ([[+surl]]), Вы сможете изменить Ваш пароль.\n\nС уважением,\nадминистратор сайта';

$_lang['setting_welcome_screen'] = 'Показывать экран приветствия';
$_lang['setting_welcome_screen_desc'] = 'Если выбрано «Да», экран приветствия будет однократно отображен при следующей загрузке страницы приветствия.';

$_lang['setting_welcome_screen_url'] = 'URL экрана приветствия';
$_lang['setting_welcome_screen_url_desc'] = 'URL экрана приветствия, отображаемого при первой загрузке MODX Revolution.';

$_lang['setting_welcome_action'] = 'Действие экрана приветствия';
$_lang['setting_welcome_action_desc'] = 'Контроллер по умолчанию при входе в панель управления в случае, когда контроллер не задан в URL.';

$_lang['setting_welcome_namespace'] = 'Пространство имен экрана приветствия';
$_lang['setting_welcome_namespace_desc'] = 'Пространство имен, которому принадлежит действие экрана приветствия.';

$_lang['setting_which_editor'] = 'Редактор';
$_lang['setting_which_editor_desc'] = 'Здесь вы можете выбрать, какой редактор использовать. Вы можете скачать и установить дополнительные редакторы в разделе управления пакетами.';

$_lang['setting_which_element_editor'] = 'Редактор для элементов';
$_lang['setting_which_element_editor_desc'] = 'Здесь вы можете выбрать какой редактор использовать при редактировании элементов. Вы можете скачать и установить дополнительные редакторы в разделе управления пакетами.';

$_lang['setting_xhtml_urls'] = 'XHTML-совместимые URL';
$_lang['setting_xhtml_urls_desc'] = 'Если выбрано «Да», все ссылки, генерируемые MODX, будут XHTML-совместимыми (символ &amp; будет заменен на соответсвующую сущность &amp;amp;).';

$_lang['setting_default_context'] = 'Контекст по умолчанию';
$_lang['setting_default_context_desc'] = 'Контекст, используемый по умолчанию при создании нового ресурса.';

$_lang['setting_auto_isfolder'] = 'Автоматически помечать как «контейнер»';
$_lang['setting_auto_isfolder_desc'] = 'Если параметр включен, ресурс будет помечен как «контейнер» автоматически.';

$_lang['setting_default_username'] = 'Имя пользователя по умолчанию';
$_lang['setting_default_username_desc'] = 'Имя пользователя по умолчанию для неавторизованных пользователей.';

$_lang['setting_manager_use_fullname'] = 'Отображать полное имя в «шапке» панели администратора MODX';
$_lang['setting_manager_use_fullname_desc'] = 'Если параметр включен, в шапке панели администратора MODX будет отображаться содержимое поля «fullname» вместо «loginname»';

$_lang['log_snippet_not_found'] = 'Записывать ошибки когда сниппет не найден';
$_lang['log_snippet_not_found_desc'] = 'Если параметр включен, вызов сниппетов, которые не были найдены, оставит запись в «Журнале ошибок».';
