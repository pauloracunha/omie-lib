<?php

namespace OmieLib\Geral\Meiospagamento\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Meiospagamento\MeiosPagamentoCadastroJsonClient;
use OmieLib\Geral\Meiospagamento\MeiosPagamentoLista;
use OmieLib\Geral\Meiospagamento\Request\MeiosPagamentoPesquisarRequest;

/**
 * Resposta da listagem de meios de pagamentos
 *
 * @pw_element MeiosPagamentoLista[] $MeiosPagamentoLista Lista de meios de pagamento.
 * @pw_complex MeiosPagamentoPesquisarResponse
 */
class MeiosPagamentoPesquisarResponse{
	/**
	 * Lista de meios de pagamento.
	 *
	 * @var MeiosPagamentoLista[]
	 */
	public array $MeiosPagamentoLista;
}
