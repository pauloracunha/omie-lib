<?php

namespace OmieLib\Geral\Meiospagamento;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Meiospagamento\Request\MeiosPagamentoPesquisarRequest;
use OmieLib\Geral\Meiospagamento\Response\MeiosPagamentoPesquisarResponse;

/**
 * Lista de meios de pagamento.
 *
 * @pw_element string $codigo Código do meio de pagamento.
 * @pw_element string $descricao Descrição do meio de pagamento.
 * @pw_complex MeiosPagamentoLista
 */
class MeiosPagamentoLista{
	/**
	 * Código do meio de pagamento.
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição do meio de pagamento.
	 *
	 * @var string
	 */
	public string $descricao;
}
