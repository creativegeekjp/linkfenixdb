<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IframelinksFixture
 *
 */
class IframelinksFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'count' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => 'number of links in iframe', 'precision' => null, 'fixed' => null],
        'active' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '1 = active , 0 =inactive', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'count' => 'Lorem ipsum dolor sit amet',
            'active' => 'Lorem ipsum dolor sit amet',
            'created' => '2016-04-04 02:00:58'
        ],
    ];
}
