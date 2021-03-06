<?php

namespace FriendsOfMagento2\Management\Console\Command;

use FriendsOfMagento2\Management\Model\Products;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ProductsCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('reset:products');
        $this->setDescription('Reset products in database.');
        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
        $output->setDecorated(true);

        $sync = $this->objectManager->get(Products::class);
        $sync->setOutput($output);
        $sync->reset();
    }

}
