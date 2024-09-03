<?php

namespace Sprint\Migration;


class ProductsSect20240902150254 extends Version
{
    protected $author = "admin";

    protected $description = "";

    protected $moduleVersion = "4.12.6";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'products',
            'production'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'smartphone',
    'CODE' => 'prod_smartphone',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  1 => 
  array (
    'NAME' => 'pad',
    'CODE' => 'prod_pad',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  2 => 
  array (
    'NAME' => 'notebook',
    'CODE' => 'prod_notebook',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
)        );
    }
    

	public function down()
	{
		$helper = $this->getHelperManager();
    	$iblockId3 = $helper->Iblock()->getIblockIdIfExists('products');
		$arSectionList = $helper->Iblock()->getSections($iblockId3);
		foreach($arSectionList as $sectionItemCode)
		{
			$helper->Iblock()->deleteSectionIfExists($iblockId3, $sectionItemCode);
		}
	}
}
