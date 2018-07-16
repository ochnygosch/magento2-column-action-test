<?php
/**
 * Created by PhpStorm.
 * User: ochnygosch
 * Date: 16.07.18
 * Time: 13:28
 */

namespace OchnygoschOrg\Magento2ColumnActionTest\Controller\Adminhtml\Magento2ColumnActionTest;


use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

class Grid extends Action
{

    const ADMIN_RESOURCE = 'Magento_Backend::dashboard';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    public function __construct(Action\Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }


}