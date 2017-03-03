
1) How To Enable Developer Mode Using .htaccess
- The first thing you need to do is go to your .htaccess file. Uncomment
- SetEnv MAGE_MODE developer

2) Magento 2 get Product Image on list page loop
/*
Get Product image
*/

// echo "Product ID".$_product->getId();




Simple Way ::
 $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    $product = $objectManager->create('Magento\Catalog\Model\Product')->load($_product->getId());    
    $thumb = $product->getThumbnail(); // Thumb image
    $main_img = $product->getImage();  // main image

$_objectManager = \Magento\Framework\App\ObjectManager::getInstance(); //instance of\Magento\Framework\App\ObjectManager
$storeManager = $_objectManager->get('Magento\Store\Model\StoreManagerInterface'); 
 $currentStore = $storeManager->getStore();
 $baseUrl = $currentStore->getBaseUrl();
 $mediaUrl = $currentStore->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);


    if(isset($main_img)){
        $productImageUrl = $mediaUrl.'catalog/product/'.$main_img;
    }


// Get All image list

 //$a =  $product->getMediaGalleryEntries();
    //$a = $product->getMediaGallery('images');
 
   //  echo "AIS-<pre/>";print_r($t);





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
 
echo $code = $storeManager->getStore()->getCode(); // like arabic
                  .... ->getStore()->getName();
                 .....->getStore()->getId();



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


9) Check User is Login and Get My Acount URL & Wishlist

<ul class="header links">
    <?php if ($block->isLoggedIn()): ?>
    <li>
        <a href="<?php echo $block->getAccountUrl() ?>">
            <?php echo __('My Account') ?>
        </a>
    </li>
    <?php endif; ?>
</ul>

<li>
        <a href="<?php echo $this->getUrl('wishlist') ?>">Wishlist</a>
    </li> 

10) Remove Reviews And Rating From Product Page

/home/aistech/public_html/souldrops/app/design/frontend/Smartwave/porto/Smartwave_Porto/layout/deafult.xml
Add Following code After <Body> tag

  <!-- Code For Remove Reviews And Rating From Product Page -->
        <referenceBlock name="reviews.tab" remove="true" />
        <referenceBlock name="product.review.form" remove="true" />
        <referenceBlock name="product.info.review" remove="true" />
        <!-- End Code -->
 
 11) Arabic language pack
 
 /home/aistech/public_html/souldrops/app/i18n/mageplaza/ar_SA/
 Put all code here..
 .csv,.xml, .json and etc file
 
