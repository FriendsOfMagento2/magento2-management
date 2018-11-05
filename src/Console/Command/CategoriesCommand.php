<?php

namespace FriendsOfMagento2\Management\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CategoriesCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('fom:mngt:categories');
        $this->setDescription('Reset categories in database.');

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
        $output->setDecorated(true);

        $sync = $this->objectManager->get(\FriendsOfMagento2\Management\Model\Categories::class);
        $sync->setOutput($output);
        $sync->reset();
    }

}
