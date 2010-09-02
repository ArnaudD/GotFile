<?php

namespace GotFile;

use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Shell;

class Application extends BaseApplication
{
  public function __construct()
  {
    parent::__construct('Git for dot files', '0.1');

    foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__), \RecursiveIteratorIterator::LEAVES_ONLY) as $file)
    {
      if (preg_match('/Command\.php$/', $file))
      {
        $class = 'GotFile\\'.basename($file, '.php');

        $this->addCommand(new $class());
      }
    }
  }

  public function doRun(InputInterface $input, OutputInterface $output)
  {
    if (true === $input->hasParameterOption(array('setup', 'set')))
    {
      echo 'hello world';

      return 0;
    }

    return parent::doRun($input, $output);
  }
}
