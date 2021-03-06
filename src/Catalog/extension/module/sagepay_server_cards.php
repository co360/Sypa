<?php

namespace Sypa\Catalog\Controller\Extension\Module;

use OpenCart\System\Engine\Controller;

class ControllerExtensionModuleSagepayServerCards extends Controller {
    public function index() {
        if ($this->config->get('module_sagepay_server_cards_status') && $this->config->get('payment_sagepay_server_status') && $this->customer->isLogged()) {
            $this->load->language('account/sagepay_server_cards');

            $data['card'] = $this->url->link('account/sagepay_server_cards', 'language=' . $this->config->get('config_language'));

            return $this->load->view('extension/module/sagepay_server_cards', $data);
        }
    }
}
