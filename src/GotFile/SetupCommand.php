<?php

namespace GotFile;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupCommand extends Command
{
  protected function configure ()
  {
    $this->setName ('setup')
         ->setDescription ('Synchronize your home with an existing repository or create a new one');
  }

  protected function execute (InputInterface $input, OutputInterface $output)
  {
    $output->writeln ('hello world');
  }
}

