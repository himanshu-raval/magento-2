
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
