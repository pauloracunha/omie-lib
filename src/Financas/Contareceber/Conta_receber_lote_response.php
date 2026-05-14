<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Resposta do Lançamento de contas a receber por lote
 *
 * @pw_element integer $lote Número do lote processado
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element status_loteArray $status_lote Detalhes da inclusão/alteração dos lançamentos.
 * @pw_complex conta_receber_lote_response
 */
class Conta_receber_lote_response{
	/**
	 * Número do lote processado
	 *
	 * @var integer
	 */
	public int $lote;
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $descricao_status;
	/**
	 * Detalhes da inclusão/alteração dos lançamentos.
	 *
	 * @var Status_lote[]
	 */
	public array $status_lote;
}
