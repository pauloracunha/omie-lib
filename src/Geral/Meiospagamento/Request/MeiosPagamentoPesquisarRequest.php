<?php

namespace OmieLib\Geral\Meiospagamento\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Meiospagamento\MeiosPagamentoCadastroJsonClient;
use OmieLib\Geral\Meiospagamento\MeiosPagamentoLista;
use OmieLib\Geral\Meiospagamento\Response\MeiosPagamentoPesquisarResponse;

/**
 * Listagem de meios de pagamentos
 *
 * @pw_element string $codigo Código do meio de pagamento.
 * @pw_complex MeiosPagamentoPesquisarRequest
 */
class MeiosPagamentoPesquisarRequest{
	/**
	 * Código do meio de pagamento.
	 *
	 * @var string
	 */
	public string $codigo;
}
