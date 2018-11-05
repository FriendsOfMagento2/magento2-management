<?php

namespace FriendsOfMagento2\Management\Console\Command;

use FriendsOfMagento2\Management\Model\Reviews;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReviewsCommand extends AbstractCommand
{

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('reset:reviews');
        $this->setDescription('Reset reviews in database.');
        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
        $output->setDecorated(true);

        $sync = $this->objectManager->get(Reviews::class);
        $sync->setOutput($output);
        $sync->reset();
    }

}
