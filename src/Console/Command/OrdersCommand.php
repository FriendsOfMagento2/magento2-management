<?php

namespace FriendsOfMagento2\Management\Console\Command;

use FriendsOfMagento2\Management\Model\Orders;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OrdersCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('fom:mngt:orders');
        $this->setDescription('Reset orders in database.');

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
        $output->setDecorated(true);

        $sync = $this->objectManager->get(Orders::class);
        $sync->setOutput($output);
        $sync->reset();
    }

}
