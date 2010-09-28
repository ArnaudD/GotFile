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
         ->setDescription ('Synchronize your home with an existing repository or create a new one')
         ->setDefinition(array(
           new InputArgument('repository',    InputArgument::REQUIRED, 'URL of the git repository'),
           new InputOption  ('home-dir', 'h', InputOption::PARAMETER_OPTIONAL, 'Home directory', '$HOME'),
         ))
         ->setHelp(<<<EOF
The <info>setup</info> initialize your home directory with a git repository

  <info>./gotfile setup http://github.com/ArnaudD/myDotFiles</info>

You can also change the default home directory with the <comment>--home-dir</comment> option:

  <info>./gotfile setup http://github.com/ArnaudD/myDotFiles --home-dir="/home/other_user"</info>
  <info>./gotfile setup http://github.com/ArnaudD/myDotFiles -h "/home/other_user"</info>
EOF
    );
  }

  protected function execute (InputInterface $input, OutputInterface $output)
  {
    $output->writeln ('hello world');
  }
}

