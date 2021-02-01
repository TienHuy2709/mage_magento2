<?php

namespace AHT\Blog\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 *
 * @package AHT\Blog\Setup
 */
class UpgradeData implements UpgradeDataInterface
{

    /**
     * Creates sample blog posts
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($context->getVersion()
            && version_compare($context->getVersion(), '1.0.1') < 0
        ) {
            $tableName = $setup->getTable('aht_blog_post');

            $data = [
                [
                    'name'         => "Huy Huy",
                    'post_content' => "This article will talk about Events List in Magento 2. As you know, Magento 2 is using the events driven architecture which will help too much to extend the Magento functionality. We can understand this event as a kind of flag that rises when a specific situation happens. We will use an example module Mageplaza_HelloWorld to exercise this lesson.",
                    'url_key'      => '/magento-2-module-development/magento-2-events.html',
                    'tags'         => 'magento 2,mageplaza helloworld',
                    'status'       => 1
                ],
                [
                    'name'         => "Magento 2 Events",
                    'post_content' =>'ALO ALO ALO',
                    'url_key'      => '/magento-2-module-development/magento-2-events.html',
                    'tags'         => 'magento 2,mageplaza helloworld',
                    'status'       => 1
                ],
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}
