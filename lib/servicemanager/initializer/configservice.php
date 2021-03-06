<?php
/**
 * ----------------------------------------------------
 * | Автор: Андрей Рыжов (Dune) <info@rznw.ru>         |
 * | Сайт: www.rznw.ru                                 |
 * | Телефон: +7 (4912) 51-10-23                       |
 * | Дата: 10.02.2015
 * ----------------------------------------------------
 *
 * Инициилизатор для внедрения (инъекций) в произвольный сервис сервиса работы с куками.
 * Для того, чтобы сообщить сервис менеджеру, что объект готов принять сервис нужно его наградить интерфейсом
 * Rzn\Library\ServiceManager\ConfigServiceAwareInterface
 *
 */


namespace Rzn\Library\ServiceManager\Initializer;


use Rzn\Library\ServiceManager\InitializerInterface;
use Rzn\Library\ServiceManager\ServiceLocatorAwareInterface;
use Rzn\Library\ServiceManager\ConfigServiceAwareInterface;
use Rzn\Library\ServiceManager\ServiceLocatorInterface;

class ConfigService implements InitializerInterface, ServiceLocatorAwareInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceManager;


    /**
     * Метод запускается для каждого вновь создаваемого сервиса.
     *
     * @param $instance
     * @param $serviceManager
     */
    public function initialize($instance, $serviceManager)
    {
        /**
         * Если класс объекта реализует интерфейс ConfigServiceAwareInterface делаем инъекцию сервисом конфигов
         */
        if ($instance instanceof ConfigServiceAwareInterface) {
            $instance->setConfigService($this->getServiceLocator()->get('config'));
        }
    }

    /**
     * Внедрение сервис локатора
     *
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceManager = $serviceLocator;
    }

    /**
     * Возврат сервис локатора.
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceManager;
    }

}