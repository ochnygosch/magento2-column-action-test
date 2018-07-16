<?php
/**
 * Created by PhpStorm.
 * User: ochnygosch
 * Date: 16.07.18
 * Time: 13:52
 */

namespace OchnygoschOrg\Magento2ColumnActionTest\Ui\Component\Listing\Column;


use Magento\Ui\Component\Listing\Columns\Column;

class TestActions extends Column
{
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                $item[$this->getData('name')] = [
                    'test1' => [
                        'label' => __('Test Single'),
                        'callback' => [
                            [
                                'provider' => 'ochnygoschorg_test',
                                'target' => 'testSingle',
                                'params' => 'Test Single Argument'
                            ]
                        ]
                    ],
                    'test2' => [
                        'label' => __('Test single array'),
                        'callback' => [
                            [
                                'provider' => 'ochnygoschorg_magento2columnactiontest',
                                'target' => 'testSingleArray',
                                'params' => [
                                    'Test Single Array Argument'
                                ],
                            ]
                        ]
                    ],
                    'test3' => [
                        'label' => __('Test multiple'),
                        'callback' => [
                            [
                                'provider' => 'ochnygoschorg_magento2columnactiontest',
                                'target' => 'testMultiple',
                                'params' => [
                                    'Test Argument 1',
                                    'Test Argument 2'
                                ]
                            ]
                        ]
                    ]
                ];
            }
        }

        return $dataSource;
    }


}