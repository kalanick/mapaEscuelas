<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Directore Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $telefono
 * @property \Cake\I18n\FrozenDate $anio
 * @property string $cue
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Escuela $escuela
 */
class Directore extends Entity
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
        'nombre' => true,
        'apellido' => true,
        'email' => true,
        'telefono' => true,
        'anio' => true,
        'cue' => true,
        'created' => true,
        'modified' => true,
        'escuela' => true
    ];
}
