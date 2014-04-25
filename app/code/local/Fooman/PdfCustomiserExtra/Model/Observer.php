<?php

class Fooman_PdfCustomiserExtra_Model_Observer
{

    public function foomanPdfcustomiserPdfTemplate($observer)
    {
        $transport=$observer->getEvent()->getTransport();
        $file = $observer->getEvent()->getFile();
        if($file == 'items'){
            $transport->setTemplateFileWithPath(str_replace('fooman/','payperrentals/', $transport->getTemplateFileWithPath()));
        }
    }
      

}
