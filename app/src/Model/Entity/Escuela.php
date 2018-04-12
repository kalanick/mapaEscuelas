<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Escuela Entity
 *
 * @property int $id
 * @property int $cue
 * @property string $name
 * @property string $address
 * @property string $tipo
 * @property string $email
 * @property string $telefono
 * @property string $latitud
 * @property string $longitud
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $regionale_id
 *
 * @property \App\Model\Entity\Regionale $regionale
 * @property \App\Model\Entity\Directore[] $directores
 */
class Escuela extends Entity
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
        'cue' => true,
        'name' => true,
        'address' => true,
        'tipo' => true,
        'email' => true,
        'telefono' => true,
        'latitud' => true,
        'longitud' => true,
        'descripcion' => true,
        'created' => true,
        'modified' => true,
        'regionale_id' => true,
        'regionale' => true
    ];
    
    
}
