<?php
$installer = $this;
 
$installer->startSetup();
 
$installer->addAttribute('customer', 'occupation', array(
    'label' => 'Occupation',
    'visible' => 1,
    'required' => 0,
    'position' => 1,
    'sort_order' => 80,
    'user_defined' => 1,
    'global' =>1,
    'visible_on_front'  => 1,
));

$installer->addAttribute('customer', 'jobtitle', array(
    'label' => 'Jobtitle',
    'visible' => 1,
    'required' => 0,
    'position' => 1,
    'sort_order' => 80,
    'user_defined' => 1,
    'global' =>1,
    'visible_on_front'  => 1,
));
 
$installer->endSetup();
 
 // Load in backend
$customer = Mage::getModel('customer/attribute')->loadByCode('customer', 'occupation');
$forms= array('customer_account_edit', 'customer_account_create', 'adminhtml_customer', 'checkout_register');
$customer->setData('used_in_forms', $forms);
$customer->save();
 
$customer = Mage::getModel('customer/attribute')->loadByCode('customer', 'jobtitle');
$forms= array('customer_account_edit', 'customer_account_create', 'adminhtml_customer', 'checkout_register');
$customer->setData('used_in_forms', $forms);
$customer->save();

