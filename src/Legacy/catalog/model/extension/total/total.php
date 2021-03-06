<?php

namespace OpenCart\Catalog\Model\Extension\Total;

use OpenCart\System\Engine\Model;

class ModelExtensionTotalTotal extends Model {
    public function getTotal(&$totals, &$taxes, &$total) {
        $this->load->language('extension/total/total');

        $totals[] = array(
            'code'       => 'total',
            'title'      => $this->language->get('text_total'),
            'value'      => max(0, $total),
            'sort_order' => $this->config->get('total_total_sort_order')
        );
    }
}
