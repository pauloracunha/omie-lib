<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Response da conciliação da Conta a Pagar
 *
 * @pw_element integer $codigo_baixa Código da Baixa
 * @pw_element string $codigo_baixa_integracao Código de Integração da Baixa
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex conta_receber_conciliar_response
 */
class Conta_receber_conciliar_response{
	/**
	 * Código da Baixa
	 *
	 * @var integer
	 */
	public int $codigo_baixa;
	/**
	 * Código de Integração da Baixa
	 *
	 * @var string
	 */
	public string $codigo_baixa_integracao;
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
}
