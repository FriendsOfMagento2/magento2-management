<?php

namespace Comunicart\Reset\Console\Command;

use FriendsOfMagento2\Management\Model\Customers;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CustomersCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('fom:mngt:customers');
        $this->setDescription('Reset customers in database.');

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
        $output->setDecorated(true);

        $sync = $this->objectManager->get(Customers::class);
        $sync->setOutput($output);
        $sync->reset();
    }

}
