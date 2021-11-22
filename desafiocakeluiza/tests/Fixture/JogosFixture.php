<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JogosFixture
 */
class JogosFixture extends TestFixture
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
                'plataforma' => 'Lorem ipsum dolor sit amet',
                'preco' => 'Lorem ipsum dolor sit amet',
                'consoles_id' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
