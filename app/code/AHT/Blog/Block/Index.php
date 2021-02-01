<?php

namespace AHT\Blog\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    private $postFactory;

    private $postRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \AHT\Blog\Model\PostFactory $postFactory,
        \AHT\Blog\Model\PostRepository $postRepository
    )
    {
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('POST');
    }

    public function getPostCollection()
    {
        $post = $this->postRepository->getList();
        return $post;
    }
}

