<?php

namespace OmieLib\Financas\Contareceberboleto\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceberboleto\ContaReceberBoletoJsonClient;
use OmieLib\Financas\Contareceberboleto\Request\BoletoCancelarRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoGerarRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoObterRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoProrrogarRequest;

/**
 * Resposta da solicitação do Cancelamento de um Boleto.
 *
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex boletoCancelarResponse
 */
class BoletoCancelarResponse{
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
