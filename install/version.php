<?
$arModuleVersion = array(
    "VERSION" => "1.14.1",
    "VERSION_DATE" => "2015-06-28 20:57:00"
);


/**
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