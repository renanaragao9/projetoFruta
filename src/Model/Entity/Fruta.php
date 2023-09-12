<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fruta Entity
 *
 * @property int $id
 * @property string $name
 * @property string $classification
 * @property string $fresh
 * @property int $qtd
 * @property string|null $price
 * @property int $users_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 */
class Fruta extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'classification' => true,
        'fresh' => true,
        'qtd' => true,
        'price' => true,
        'users_id' => false,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
    ];
}
