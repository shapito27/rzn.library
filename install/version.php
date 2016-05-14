<?
$arModuleVersion = array(
    "VERSION" => "2.25.2",
    "VERSION_DATE" => "2016-05-14 10:30:00"
);
/**
 * Позиции в коде версии:
 * 1 - выкат нового подмодуля, серъезная изменения в совместимости
 * 2 - добавление метода или класса в подмодуль.
 * 3 - исправления ошибок, комментарии
 */

/**
 *
 * 2.25.2
 * Подключение модуля iblock
 *
 * 2.25.1
 * Ключ на отмену проверки ssl сертификата
 *
 * 2.25.0
 * Добавлен хелпер deleteZerosAfterDotInNumber и тест для него.
 *
 * 2.24.2
 * Добавлен параметр leave_params и убрано явное указание схемы в полном урле.
 *
 * 2.24.1
 * Метод sortWithDescription можно использовать отдельно от данных объекта.
 *
 * 2.24.0
 * Добавлен канал медиатора setTimeMarker
 *
 * 2.23.3
 * Кеш конфига
 *
 * 2.23.2
 * Комментариии и грубая ошибка
 *
 * 2.23.1
 * Запрос id свойств инфоблока по его коду
 *
 * 2.23.0
 * Новый метод в сервисе iblock_info
 * Дроп водопада для работы с curl
 *
 *
 * 2.22.0
 * Добавлен сервис iblock_info
 *
 * 2.21.0
 * В конфиге с описанием водопада можно указывать какие входные параметры будут разделяемые. Их значения по-умолчанию.
 *
 * 2.20.3
 * Исправлен баг в водопаде с выбором марштура и сбросом результатов.
 *
 * 2.20.2
 * Медиатор может принимать 3-й параметр - опции.
 *
 * 2.20.0
 * Добавлена возможность описывать события битрикса в ключе bitrix_direct_events
 *
 * 2.19.0
 * Добавлен метод для выборки объекта одного дропа - это для тестов водопадов.
 *
 * 2.18.0
 * В менеджер событий добавлен методи prepareEventForTrigger и getEventListeners для организации тесторивания событий.
 * Слушатель события может быть выбран проинициилизированным для тестового одиночного запуска в отрыве от контекста.
 *
 * 2.17.4
 * Обновил тест.
 *
 * 2.17.3
 * В проверке водопада его отсутствие рассматривается как ошибка для возврата - не исключение.
 *
 * 2.17.1
 * В функциях водопада первый параметр включает в себя и обычные параметры и разделяемые.
 *
 * 2.17.0
 * Добавлен метод для выборки данных из объекта ответа.
 *
 * 2.16.3
 * Файл tests_map.php подготовлен для адресного тестирования
 *
 * 2.16.2
 * В водопал добавлен ключ callable - для перегрузки дропа для тестов.
 *
 * 2.16.1
 * Исправлена принципиальная ошибка при слиянии массивов в водопаде. Применяется треит.
 *
 * 2.16.0
 * Добавление кеширования для сборщика конфига.
 *
 * 2.15.1
 * Устранена ошибка водопада при использовании параметров по умолчанию для дропа.
 * Доработан тестовый сервис для водопада. Добавлены тесты.
 *
 * 2.15.0
 * Добавлен тест для сервиса проверки описания водопада. Тест не полный - дорабоать позднее.
 *
 * 2.14.3
 * Добавление теста для демонстрации.
 *
 * 2.14.2
 * Класс результатов водопада. Для разделяемых параметров можно включить только чтение.
 *
 * 2.14.1
 * Добавлен специальный метод для подключения компонентов зависимых от шаблона.
 *
 * 2.14.0
 * Добавлен Медиатор getIBlockPropertyEnum для выборки списка вариантов свойства инфоблока.
 *
 * 2.13.0
 * Добаил события битрикса в систему iblock_OnStartIBlockElementUpdate и iblock_OnStartIBlockElementAdd
 *
 * 2.12.14
 * В метод проверки описания водопада дрбавлен второй параметр  - массив для перегрузки настоящего описания водопада.
 *
 * 2.12.13
 * Добавлен проверочный метод для обработчика инъекции с типом service
 *
 * 2.12.12
 * Метод класса результат водопада изменен.
 *
 * 2.12.11
 * Входные параметры водопада сливаются с параметрами вычислятора маршрутов.
 *
 * 2.12.10
 * Для дропов водопада добавлены параметры по-умолчанию, описание которых находится в конфиге.
 *
 * 2.12.9
 * Исправление в водопаде.
 *
 * 2.12.7
 * Инициилизация конфига водопада в конструкторе
 *
 * 2.12.6
 * Исправление бага передачей параметров в результат через метов finish
 *
 * 2.12.5
 * Исправление бага с инъекциями для кустомных менеджеров.
 *
 * 2.12.4
 * Добавлена возможность доступа к настройкам водопада из его функций.
 *
 * 2.12.3
 * Усовершенствован механизмус тестирования водопада.
 *
 * 2.12.2
 * Поправил работу загрузчика множественных файлов.
 *
 * 2.12.1
 * Доработка проверка инъектора
 *
 * 2.12.0
 * Внедрение тестовых сервисов для водопада и инъктора.
 * Проверено на водопаде: существование классов и сервисов.
 * Проверка параметров инъектора setter (config, custom_service)
 *
 * 2.11.1
 * Селектор маршрутов водопада может воздавать ошибку водопада и инициировать преждевременное завершение работы.
 *
 * 2.11.0
 * Внедрен и протестирован механизмус обмена сообщениями между скриптами.
 * Устранены некоторые ошибки в водопаде и инъекторе.
 *
 * 2.10.0
 * Внедрен маханизмус марщрутов для водопада.
 * Новый сервис storage для хранения и передачи данных между модулями кода в камках одного запроса
 *
 * 2.9.2
 * Методу finish результата водопада можно передавать параметры, которые добавляются к результатам
 *
 * 2.9.1
 * Внедрил в водопад большие тестовые возможности.
 * Убрал хелпер translate
 *
 * 2.8.2
 * Функции водопада создаются отныне непосредственно перед запуском.
 *
 * 2.8.1
 * Оптимизация инъектора сервисов кустомных менеджеров.
 *
 * 2.8.0
 * Добавлена возможность описывать свои менеджеры сервисов через конфиг.
 * Добавлена возможность инъекций сервисов из пользовательских менеджеров.
 *
 * 2.7.0
 * Добавил возможность описывать инструкции для инъектора в самом классе с указанием интерфейса.
 *
 * 2.6.1
 * Ошибка в инъекторе
 *
 * 2.6.0
 * Внедрена возможность прописывать остановки в конфиге водопада.
 * Внедрена возможность раннего окончания работы водопада с запуском финальной функции.
 * Приведен в рабочее состояние инъектор инициилизатор - инициилизирует через менеджер сервисов.
 * Для водопада добавлены классы для тестирования.
 *
 * 2.5.0
 * Изменения в водопаде для организации тестов: пропуск функций, остановка работы
 *
 * 2.4.0
 * Внедрен еще один сеттер инъектора. Внедрение произвольных параметров.
 *
 * 2.3.3
 * Для водопада сменил приоритет загрузки инстансов.
 *
 * 2.3.2
 * Добавлен метод для возврата кода ошибки
 *
 * 2.3.1
 * Ошибка в водопаде. Начальная инициилизация разделяемых парамтеров.
 *
 * 2.3.0
 * Появилась возможность разделения всех свойств. Разрешается флагом в описании водопада 'result_shared' => true
 *
 * 2.2.0
 * Injector встроен в менедежр событий.
 * Описывается инъектор стандартно.
 *
 *
 * 2.1.1
 * Устранена фатальная ошибка инициилизации медиатора и водопада.
 *
 * 2.1.0
 * injector добавлен в менеджер сервисов. Еще не проверен.
 *
 * 2.0.0
 * Инъектор реализовался в коде. Проведены успешные тестовые испытания. Требует комментирования и испытаний в работе.
 *
 *
 * 1.15.7
 * Для инъектора добавлен инициилизатор менеджера сервисов - инъектор может быть передан любому сервису через интерфейс.
 * Инъектор встроен в медиатор и водопад.
 * инициилизаторы медиатора и водопала чуть оптимизированы.
 *
 * 1.15.6
 * В медиаторе при отсутствии каналоа ошибка генерится правильно.
 *
 * 1.15.5
 * Поработал над инъектором. Изменил его суть.
 * Подразумевается использование его как часть других элементов: сервисов, хелперов, медиаторов и водопадов.
 * DI в общепринятом виде пока не считаю нужным. Или будет добавлен как есть из Zend FW
 *
 * 1.15.4
 * Вернут карту классов Zend
 *
 * 1.15.3
 * Устранена ошибка в строителе запросов CatalogElementFreeProperty для данных decimal
 * Добавлен отдельный автозагрузчик для Zend классов
 *
 * 1.15.2
 * Класс Rzn\Library\Component\HelperManager не используется.
 * Фабрика менеджера хелпров использует класс ServiceManager, который теперь един для всех менеджеров.
 *
 * 1.15.1
 * Доработан класс менеджера сервисов.
 * Заочно появилась возможность создавать другие менеджера сервисов.
 *
 * 1.15
 * Доработана инициилизация серсоов из конфига: в массиве желательно использовать ключ name для названия класса
 * Из helper_manager убрал перегрузку метода родителя.
 *
 * 1.14.1
 * Водопад заработал. Не в идеале.
 *
 * 1.14
 * Добавлен класс Rzn\Library\BitrixTrial\Iblock\GetList\FreeQueryModification
 *
 * 1.13.3
 * Изменена фильтрация для целых чисел - может быть пробел.
 * Добавлена фильтрация для чисел с дробной частью.
 *
 * 1.13.2
 * Доработка форматат конфига медиатороа.
 * Доработка интерфейса медиатора.
 *
 * 1.13.1
 * Доработка классов водопада. Еще не работает.
 * Добавил в конфиг инициилизаторы.
 *
 * 1.13.0
 * Медиатор дополнен обработкой ошибок. Надлен сервисом водопада.
 * Продвижение в разработке водопада - отказ от функции обратного вызова.
 *
 * 1.12.2
 * Медиатор проверен.
 *
 * 1.12.1
 * Добавлены классы для водопада.
 * Rzn\Library\Waterfall (все в папке)
 *
 * 1.11.1
 * Работа над медиатором
 * Rzn\Library\Mediator (все в папке)
 *
 * 1.11.0
 * Добавлены классы и интерфейсы для медиатора
 * Rzn\Library\Mediator (все в папке)
 * Добавлено описание в конфиг
 *
 * 1.10.1
 * Изменения в хелпере url
 *
 * 1.10.0
 * Новый хелпер showWithRename показа значения с переименовкой
 *
 * 1.9.0
 * Новый хелпер phoneNumberFormat фоматиров вывода номера телефона
 * Изменения в регистрации слушателей событий битрикса
 *
 * 1.8.0
 * Внедрение механизмуса отложенных на окончание работы запроса задач.
 *
 * 1.7.5
 * Rzn\Library\Format\ArrayModification метод keysIntVal - србатывание для всех
 *
 * 1.7.4
 * Rzn\Library\Format\ArrayModification наделен интерфейсом ArrayAccess
 *
 * 1.7.3
 * Для класса Rzn\Library\Format\ArrayModification
 * Передача названия обрабатываемого ключа массива в функцию-фильтр.
 * Метод keysTrim может работать со всеми ключами без перечисления их.
 * Метод keysRename - переименовка ключей массива.
 *
 * 1.7.2
 * Добавлено несколько методов для участия в цепочки: Rzn\Library\Session
 * Применение фильров для возвращаемых значений: Rzn\Library\ArrayContainer
 *
 * 1.7.1
 * Добавлена возможность указать требование на наличие параметра не важно какого значения.
 * local/modules/rzn.library/lib/component/helper/addcss.php
 *
 * 1.7.0
 * Инициилизация любых сервисов сервисом менеджера события
 * сервисы надо наделять интерфейсом: Rzn\Library\ServiceManager\EventManagerAwareInterface
 *
 * 1.6.1
 * Добавлена устанвока контекста для возможных события в объекта класа Rzn\Library\BitrixTrial\Iblock\Element\Update
 *
 * 1.6.0
 * Добавлена новй класс: Rzn\Library\BitrixTrial\Iblock\Element\Update
 * Этот класс перегружает CIBlockElement и позволяет обновлять стандартные свойства инфоблоков без затрагивания пользовательских.
 *
 * 1.5.4
 * Добавлена возможность устанавлиавть флаг shared для сервисов
 * local/modules/rzn.library/lib/servicemanager/servicemanager.php
 *
 * 1.5.3
 * Можно указывать максимальное количество сохраняемых картинок.
 * local/modules/rzn.library/lib/bitrixtrial/iblock/multifileproperty.php
 *
 * 1.5.2
 * Добавлен спецтальный обработчик события sale_onSaleComponentOrderOneStepPaySystem
 * Он тут: local/modules/rzn.library/lib/eventlistener/bitrixeventsdrive.php
 *
 * 1.5.1
 * Доработан класс Rzn\Library\Request
 *
 * 1.5.0
 * Новые классы: Rzn\Library\Component\Helper\AddCss и Rzn\Library\Component\Helper\AddJs
 *
 * 1.4.0
 * Новый класс: Rzn\Library\BitrixTrial\Iblock\MultiFileProperty
 *
 * 1.3.0
 * Дополнительно подключаемые конфиг файлы в зависимости от условий.
 * Модификация AttachTemplateConfig для прямой инъекции сервиса конфигов.
 * Добавил продолжение для события битрикса main - OnBeforeLocalRedirect (main_OnBeforeLocalRedirect) - можно модифицировать url для редиректа.
 *
 */