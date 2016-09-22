<?php
/**
 * Perseus Command Line Task Runner
 *
 * @package Perseus
 * @author Ryan Rentfro
 * @license MIT
 * @url https://github.com/manufacturing-industry
 */

namespace Perseus;

use Symfony\Component\Console\Application;
use Perseus\Console\Command;

/**
 * The main Perseus console class
 *
 * @package Perseus
 */
class Perseus
{
    /**
     * Adds the commands supplied in the commands array and then runs a command if one was present
     *
     * @param array $commands An array of commands in the Perseus\Console\Command namespace
     */
    public function __construct(array $commands)
    {
        $application = new Application();
        $application->add(new Console\Command\About());

        if (count($commands) > 0)
        {
            foreach($commands as $class)
            {

                $class = 'Perseus\Console\Command\\' . $class;
                $application->add(new $class());
            }
        }
        $application->run();
    }
}