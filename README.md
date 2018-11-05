##Magento2 - Management Module

Manage the data of the following entities: 
 - categories
 - products
 - orders
 - customers
 - reviews

# Install

Download:

`composer require friendsofmagento2/magento2-management`

Enable module:

`php bin/magento module:enable FriendsOfMagento2_Management`

# Usage

`php bin/magento fom:mngt:categories`: Reset categories in database

`php bin/magento fom:mngt:customers`: Reset customers in database

`php bin/magento fom:mngt:orders`: Reset orders in database

`php bin/magento fom:mngt:products`: Reset products in database

`php bin/magento fom:mngt:reviews`: Reset reviews in database
