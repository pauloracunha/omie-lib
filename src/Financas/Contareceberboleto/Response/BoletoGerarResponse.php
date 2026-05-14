<?php

namespace OmieLib\Financas\Contareceberboleto\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceberboleto\ContaReceberBoletoJsonClient;
use OmieLib\Financas\Contareceberboleto\Request\BoletoCancelarRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoGerarRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoObterRequest;
use OmieLib\Financas\Contareceberboleto\Request\BoletoProrrogarRequest;

/**
 * Resposta da solicitação de geração de um boleto.
 *
 * @pw_element string $cLinkBoleto Link do Boleto.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element string $dDtEmBol Data de emissão do boleto.
 * @pw_element string $cNumBoleto Número do boleto.
 * @pw_element string $cCodBarras Código de barras do Boleto.
 * @pw_element decimal $nPerJuros Percentual de juros.
 * @pw_element decimal $nPerMulta Percentual de multa.
 * @pw_element string $cNumBancario Número bancário do boleto.
 * @pw_element string $dDescontoCond1 Data de desconto condicional.
 * @pw_element decimal $vDescontoCond1 Valor do desconto condicional.
 * @pw_element string $dDescontoCond2 Data do desconto condicional.
 * @pw_element decimal $vDescontoCond2 Valor do desconto condicional.
 * @pw_element string $dDescontoCond3 Data do desconto condicional.
 * @pw_element decimal $vDescontoCond3 Valor do desconto condicional.
 * @pw_complex boletoGerarResponse
 */
class BoletoGerarResponse{
	/**
	 * Link do Boleto.
	 *
	 * @var string
	 */
	public string $cLinkBoleto;
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
	/**
	 * Data de emissão do boleto.
	 *
	 * @var string
	 */
	public string $dDtEmBol;
	/**
	 * Número do boleto.
	 *
	 * @var string
	 */
	public string $cNumBoleto;
	/**
	 * Código de barras do Boleto.
	 *
	 * @var string
	 */
	public string $cCodBarras;
	/**
	 * Percentual de juros.
	 *
	 * @var decimal
	 */
	public float $nPerJuros;
	/**
	 * Percentual de multa.
	 *
	 * @var decimal
	 */
	public float $nPerMulta;
	/**
	 * Número bancário do boleto.
	 *
	 * @var string
	 */
	public string $cNumBancario;
	/**
	 * Data de desconto condicional.
	 *
	 * @var string
	 */
	public string $dDescontoCond1;
	/**
	 * Valor do desconto condicional.
	 *
	 * @var decimal
	 */
	public float $vDescontoCond1;
	/**
	 * Data do desconto condicional.
	 *
	 * @var string
	 */
	public string $dDescontoCond2;
	/**
	 * Valor do desconto condicional.
	 *
	 * @var decimal
	 */
	public float $vDescontoCond2;
	/**
	 * Data do desconto condicional.
	 *
	 * @var string
	 */
	public string $dDescontoCond3;
	/**
	 * Valor do desconto condicional.
	 *
	 * @var decimal
	 */
	public float $vDescontoCond3;
}
