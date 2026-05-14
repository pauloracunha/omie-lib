<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Informações do Cheque.
 *
 * @pw_element string $chBanco Número do Banco.
 * @pw_element string $chAgencia Número da Agência.
 * @pw_element string $chConta Número da Conta.
 * @pw_element string $chSerie Série do Cheque.
 * @pw_element string $chNumero Número do Cheque.
 * @pw_element string $chVencimento Data de vencimento do cheque.
 * @pw_complex Cheque
 */
class Cheque{
	/**
	 * Número do Banco.
	 *
	 * @var string
	 */
	public string $chBanco;
	/**
	 * Número da Agência.
	 *
	 * @var string
	 */
	public string $chAgencia;
	/**
	 * Número da Conta.
	 *
	 * @var string
	 */
	public string $chConta;
	/**
	 * Série do Cheque.
	 *
	 * @var string
	 */
	public string $chSerie;
	/**
	 * Número do Cheque.
	 *
	 * @var string
	 */
	public string $chNumero;
	/**
	 * Data de vencimento do cheque.
	 *
	 * @var string
	 */
	public string $chVencimento;
}
