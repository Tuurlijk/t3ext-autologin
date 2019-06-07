<?php
namespace MichielRoos\AutoLogin\Service;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class AuthenticationService
 * @package MichielRoos\AutoLogin\Service
 */
class AuthenticationService extends \TYPO3\CMS\Sv\AuthenticationService
{
    /**
     * Return oldest admin user
     *
     * @return bool|array
     */
    public function getUser()
    {
        if ($this->login['status'] !== 'login') {
            return false;
        }

        $users = $this->getDatabaseConnection()->exec_SELECTgetRows('*', 'be_users', 'admin = 1 AND deleted = 0 AND disable = 0', '', 'uid');

        return current($users);
    }

    /**
     * Returns the database connection
     *
     * @return \TYPO3\CMS\Core\Database\DatabaseConnection
     */
    protected function getDatabaseConnection()
    {
        return $GLOBALS['TYPO3_DB'];
    }

    /**
     * Authenticate a user
     *
     * @param array $user Data of user.
     * @return int
     */
    public function authUser(array $user): int
    {
        return 200;
    }
}