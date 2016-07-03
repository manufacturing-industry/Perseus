<?php
/**
 * Perseus Command Line Task Runner
 *
 * @package Perseus
 * @author Ryan Rentfro
 * @license MIT
 * @url https://github.com/manufacturing-industry
 */

namespace Perseus\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command that displays information about Perseus
 *
 * @package Perseus\Console\Command
 */
class About extends Command
{
    /**
     * Configures the command
     */
    protected function configure()
    {
        $this->setName('about:perseus')->setDescription('About Perseus Console');
    }

    /**
     * Executes the command
     *
     * Outputs details about the software package
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return boolean Returns true on completion
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text  = '====================================================================================' . "\n";
        $text .= 'Perseus is an OSS console task runner written in PHP' . "\n";
        $text .= '====================================================================================' . "\n";
        $text .= 'License: MIT' . "\n";
        $text .= 'Author: Ryan Rentfro' . "\n";
        $text .= 'URL: https://github.com/manufacturing-industry' . "\n";
        $text .= 'Project: https://github.com/manufacturing-industry/perseus' . "\n";
        $text .= '====================================================================================' . "\n";
        $output->writeln($text);
        return true;
    }
}