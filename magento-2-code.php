
1) How To Enable Developer Mode Using .htaccess
- The first thing you need to do is go to your .htaccess file. Uncomment
- SetEnv MAGE_MODE developer

2) Magento 2 get Product Image on list page loop
/*
Get Product image
*/

// echo "Product ID".$_product->getId();


    $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    $product = $objectManager->create('Magento\Catalog\Model\Product')->load($_product->getId());        
$images = $product->getMediaGalleryImages();

foreach($images as $child){ 
    $img_url = $child->getUrl();
    if(isset($img_url)){
        $productImageUrl = $img_url;
    }
    break;
}

/*
End :: Get Product image
*/


3) How to get Store URL in Magento 2

$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
$store_url = $storeManager->getStore()->getBaseUrl();


4) For Get Media URL in Magento 2

$_objectManager = \Magento\Framework\App\ObjectManager::getInstance(); //instance of\Magento\Framework\App\ObjectManager
$storeManager = $_objectManager->get('Magento\Store\Model\StoreManagerInterface'); 
 $currentStore = $storeManager->getStore();
 $baseUrl = $currentStore->getBaseUrl();
 $mediaUrl = $currentStore->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);

5) Get Product id and name in magento 2

$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$product = $objectManager->get('Magento\Framework\Registry')->registry('current_product');//get current product
    echo $product->getId();
    echo $product->getName();
6)  for get custom attribute value
"Test" is our custom attribute. add get befor yout custom attribute name With Captal first letter of your attribute
$test = $_helper->productAttribute($_product, $_product->getTest(), 'test');


7) How To Call Custom Block in .phtml file 

- Create new Custom Block with related_products identifre

D:\xampp\htdocs\souldrops\app\design\frontend\Smartwave\porto\Smartwave_Porto\layout\default.xml

ADD Followning code.

<block class="Magento\Cms\Block\Block" name="related_products">
        <arguments>
            <argument name="block_id" xsi:type="string">related_products</argument>
        </arguments>
</block>

Add Following code to any .phtml file


  echo 'SHIV'.$this->getLayout()->createBlock('Magento\Cms\Block\Block')->setBlockId('related_products')->toHtml(); 



8) Call phtml file in  cmc Block magento 2

{{block class="Magento\Framework\View\Element\Template"   template="Smartwave_Filterproducts::category_list.phtml"}}

Locations :: D:\xampp\htdocs\souldrops\app\design\frontend\Smartwave\porto\Smartwave_Filterproducts\templates\category_list.phtml



