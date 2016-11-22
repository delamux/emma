<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $fechareg
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property bool $sexo
 * @property \Cake\I18n\Time $nacimiento
 * @property string $correo
 * @property string $nacionalidad
 * @property string $foto
 * @property int $Address_id
 * @property string $observaciones
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $created
 * @property string $documento
 * @property int $type_document_id
 *
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\TypeDocument $type_document
 * @property \App\Model\Entity\Teacher[] $teachers
 */
class Persona extends Entity
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
        '*' => true,
        'id' => false
    ];
}
