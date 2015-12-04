<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License (GPL 3)
 * that is bundled with this package in the file LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Payone_Core to newer
 * versions in the future. If you wish to customize Payone_Core for your
 * needs please refer to http://www.payone.de for more information.
 *
 * @category        Payone
 * @package         Payone_Core_Model
 * @subpackage      System
 * @copyright       Copyright (c) 2015 <kontakt@fatchip.de> - www.fatchip.com
 * @author          Robert M�ller <robert.mueller@fatchip.de>
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.fatchip.com
 */
class Payone_Core_Model_System_Config_CreditcardCheckCvc extends Payone_Core_Model_System_Config_Abstract
{
    const NO = 'no';
    const ONLY_FIRST = 'only_first';
    const ALWAYS = 'always';

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            self::NO => 'No',
            self::ONLY_FIRST => 'Only on first order with this card',
            self::ALWAYS => 'Always'
        );
    }
}