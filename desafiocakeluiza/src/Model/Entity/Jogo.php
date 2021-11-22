<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jogo Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property \Cake\I18n\FrozenDate|null $lancamento
 * @property string|null $plataforma
 * @property string|null $preco
 * @property string|null $consoles_id
 *
 * @property \App\Model\Entity\Console $console
 */
class Jogo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'lancamento' => true,
        'plataforma' => true,
        'preco' => true,
        'consoles_id' => true,
        'console' => true,
    ];
}
