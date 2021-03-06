<?php namespace Modules\Documentation\Repositories;

interface DocumentationRepository
{
    /**
     * Returns an array of ToC items
     * @return array
     */
    public function toc();

    /**
     * Get the given page in the documentation
     * @param string $page
     * @return string
     */
    public function getContent($page);

    /**
     * Get the page title
     * @param string $page
     * @return string
     */
    public function getTitle($page);

    /**
     * Get the page sub title
     * @param string $page
     * @return string
     */
    public function getSubTitle($page);

    public function getAllFiles();
}
