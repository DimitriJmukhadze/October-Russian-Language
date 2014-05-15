<?php

return [
    'app' => [
        'name' => 'October CMS',
        'motto' => 'Возвращение к истокам',
    ],
    'directory' => [
        'create_fail' => "Невозможно создать директорию: :name",
    ],
    'file' => [
        'create_fail' => "Невозможно создать файл: :name",
    ],
    'system' => [
        'name' => 'Система',
        'menu_label' => 'Система',
    ],
    'plugin' => [
        'unnamed' => 'Безымянный плагин',
        'name' => [
            'label' => 'Имя плагина',
            'help' => 'Введите название плагина со своим уникальным кодом. Например, RainLab.Blog',
        ],
    ],
    'project' => [
        'name' => 'Проект',
        'owner_label' => 'Владелец',
        'id' => [
            'label' => 'Идентификатор проекта',
            'help' => 'Как найти идентификатор вашего проекта',
            'missing' => 'Пожалуйста, укажите идентификатор вашего проекта для использования.',
        ],
        'unbind_success' => 'Проект был успешно отсоединен.',
    ],
    'settings' => [
        'menu_label' => 'Настройки',
        'missing_model' => 'На странице настроек отсутствует определение модели.',
        'update_success' => 'Настройки для :name успешно обновлены.',
    ],
    'install' => [
        'project_label' => 'Присоединить к проекту',
        'plugin_label' => 'Установить плагин',
        'missing_plugin_name' => 'Пожалуйста, укажите название плагина для установки.',
        'install_completing' => 'Завершение процесса установки',
        'install_success' => 'Плагин был успешно установлен.',
    ],
    'updates' => [
        'name' => 'Обновление ПО',
        'menu_label' => 'Обновления',
        'check_label' => 'Проверить обновления ',
        'retry_label' => 'Попробовать еще раз',
        'core_build' => 'Текущая сборка',
        'core_build_old' => '(Текущая сборка :build)',
        'core_build_new' => 'Сборка :build',
        'core_build_new_help' => 'Последняя доступная сборка.',
        'core_downloading' => 'Загрузка файлов приложения',
        'core_extracting' => 'Распаковка файлов приложения',
        'plugin_downloading' => 'Загрузка плагина: :name',
        'plugin_extracting' => 'Распаковка плагина: :name',
        'plugin_version_none' => 'Новый плагин',
        'plugin_version_old' => 'Текущая версия v:version',
        'plugin_version_new' => 'v:version',
        'update_label' => 'Обновить',
        'update_completing' => 'Завершение процесса обновления',
        'update_loading' => 'Поиск доступных обновлений...',
        'update_success' => 'Процесс обновления был успешно завершен.',
        'update_failed_label' => 'Не удалось выполнить обновление',
        'force_label' => 'Принудительное обновление',
        'found' => [
            'label' => 'Доступны новые обновления!',
            'help' => 'Выберите «Обновить», чтобы начать процесс обновления.',
        ],
        'none' => [
            'label' => 'Нет обновлений',
            'help' => 'Новые обновления не найдены.',
        ],
    ],
    'server' => [
        'connect_error' => 'Ошибка подключения к серверу.',
        'response_not_found' => 'Сервер обновления не найден.',
        'response_invalid' => 'Неверный ответ сервера.',
        'response_empty' => 'Пустой ответ сервера.',
        'file_error' => 'Сервер не смог доставить пакет.',
        'file_corrupt' => 'Загруженный файл поврежден.',
    ],
    'behavior' => [
        'missing_property' => 'Класс :class должен содержать свойство $:property, используемое расширением :behavior.',
    ],
    'config' => [
        'not_found' => 'Не удалось найти конфигурационный файл :file, ожидаемый для :location.',
        'required' => 'Для конфигурации, используемой в :location не указано свойство $:property.',
    ],
    'zip' => [
        'extract_failed' => "Невозможно извлечь файл ':file'.",
    ],
];
