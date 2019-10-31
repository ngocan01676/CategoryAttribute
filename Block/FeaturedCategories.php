<?php 
namespace AN\CategoryAttribute\Block;

class FeaturedCategories extends \Magento\Framework\View\Element\Template{

    protected $_categoryCollection;
    protected $_storeManager;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollection,
        array $data = []
    )
    {
        $this->_categoryCollection = $categoryCollection;
        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);
    }

    public function getCategoryCollection()
    {
        $collection = $this->_categoryCollection->create()
        ->addAttributeToSelect('*')
        ->setStore($this->_storeManager->getStore())
        //->addAttributeToFilter('attribute_code', '1')
        ->addAttributeToFilter('is_active','1')->addAttributeToFilter('is_landing','1');
        return $collection;
    }
}



