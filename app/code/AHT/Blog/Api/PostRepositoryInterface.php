<?php
namespace AHT\Blog\Api;

interface PostRepositoryInterface{

    public function save(\AHT\Blog\Model\Post $post);

    public function getById($postId);

    public function delete(\AHT\Blog\Model\Post $post);

    public function deleteById($postId);
}
