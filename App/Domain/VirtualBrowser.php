<?php 
namespace Kupman\Scraper\Domain;

interface VirtualBrowser {
    public function loadPage(string $url);
    public function submitForm();
    public function clickLink();
}