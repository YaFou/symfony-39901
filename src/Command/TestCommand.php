<?php

namespace App\Command;

use App\Entity\Entity;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'app:test';

    public function __construct(private ValidatorInterface $validator)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entity = new Entity('');
        $violations = $this->validator->validate($entity);
        dd((string) $violations);
    }
}
