<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConsolesFixture
 */
class ConsolesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'lancamento' => '2021-11-18',
                'preco' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
