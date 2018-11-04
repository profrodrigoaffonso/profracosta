<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fila Entity
 *
 * @property int $id
 * @property int $numero
 * @property string $tipo
 * @property bool $ativo
 * @property \Cake\I18n\FrozenTime $created
 */
class Fila extends Entity
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
        'numero' => true,
        'tipo' => true,
        'ativo' => true,
        'created' => true
    ];
}
