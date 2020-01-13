<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notice Entity
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property \Cake\I18n\FrozenDate $start
 * @property string $path
 * @property string $banner
 * @property string $image
 * @property string $pdf
 * @property int $liked
 * @property int $noliked
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 */
class Notice extends Entity
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
        'title' => true,
        'body' => true,
        'start' => true,
        'path' => true,
        'banner' => true,
        'image' => true,
        'pdf' => true,
        'liked' => true,
        'noliked' => true,
        'category_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true
    ];
}
