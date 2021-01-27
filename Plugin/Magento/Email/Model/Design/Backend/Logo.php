<?php


namespace Webidea24\SvgSupport\Plugin\Magento\Email\Model\Design\Backend;


class Logo
{

    public function afterGetAllowedExtensions(\Magento\Theme\Model\Design\Backend\Logo $subject, array $return)
    {
        $return[] = 'svg';
        return $return;
    }

}
