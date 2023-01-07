<?php

namespace Neptunia\Config\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

// the name of the command is what users type after "php bin/console"
// [AsCommand(name: 'app:create-user')]
class CreateUserCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('custom-command')
        ->setDescription('This command is run on your tasks nesa')
        ->setHelp('run this command to execute custom command')
        ->addArgument('param', InputArgument::REQUIRED, 'pass the parameter');
    }



    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Hello World, %s', $input->getArgument('param')));
        return Command::SUCCESS;
    }
}
