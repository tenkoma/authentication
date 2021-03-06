<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Authentication\Identifier;

interface IdentifierInterface
{

    /**
     * Identifies an user or service by the passed credentials
     *
     * @param mixed $credentials Authentication credentials
     * @return mixed
     */
    public function identify($credentials);

    /**
     * Gets a list of errors happened in the identification process
     *
     * @return array
     */
    public function getErrors();
}
