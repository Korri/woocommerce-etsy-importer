<?php

class WooCommerce_Esty_Importer
{

    const OPTION = '';

    /**
     * WooCommerce_Esty_Importer constructor.
     */
    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_pages'));
        add_action('admin_init', array($this, 'add_settings'));
    }

    public function add_settings()
    {
        add_option('')
    }

    public function add_pages()
    {
        register_importer('woocommerce_etsy_importer', __('WooCommerce Etsy Importer', 'woocommerce'), __('Import <strong>products</strong> from your Etsy account.', 'woocommerce'), array($this, 'formPageCallback'));
    }

    public function formPageCallback()
    {
        $this->showView('form.php');
    }

    private function showView($page)
    {
        require(__DIR__ . '/../views/' . $page);
    }
}
