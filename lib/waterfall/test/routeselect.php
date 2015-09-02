<?php
 /**
  * ----------------------------------------------------
  * | Автор: Андрей Рыжов (Dune) <info@rznw.ru>         |
  * | Сайт: www.rznw.ru                                 |
  * | Телефон: +7 (4912) 51-10-23                       |
  * | Дата: 02.09.2015                                      
  * ----------------------------------------------------
  *
  */


namespace Rzn\Library\Waterfall\Test;


class RouteSelect 
{
    /**
     * @param $params
     * @param \Rzn\Library\Waterfall\Result $result
     */
    public function __invoke($params, $result)
    {
        pr('Запуск селектора маршрута');
        return 'skip_stop';
    }

}