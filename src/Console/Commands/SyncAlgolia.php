<?php

namespace FlashVps\Docs\Console\Commands;

use Illuminate\Console\Command;

class SyncAlgolia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docs:algolia';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = \Algolia\AlgoliaSearch\SearchClient::create(
            'YourApplicationID',
            'YourAdminAPIKey'
        );

        $index = $client->initIndex('your_index_name');

        $index->saveObjects(['objectID' => 1, 'name' => 'Foo']);
    }
}
