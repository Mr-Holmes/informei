<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DayExpense Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date_
 * @property int $expenses_id
 * @property int $quantity
 *
 * @property \App\Model\Entity\Expense $expense
 */
class DayExpense extends Entity
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
        'date_' => true,
        'expenses_id' => true,
        'quantity' => true,
        'expense' => true
    ];
}
