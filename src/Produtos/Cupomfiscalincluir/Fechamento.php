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
 * Dados do fechamento do caixa.
 *
 * @pw_element string $dAbertura Data de abertura do caixa.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $hAbertura Hora de abertura do caixa.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vAbertura Valor de abertura do caixa (Caixa Inicial).
 * @pw_element string $dFechamento Data de fechamento do caixa.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $hFechamento Hora de fechamento do caixa.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $vFechamento Valor do fechamento do caixa (Caixa Final).
 * @pw_complex fechamento
 */
class Fechamento{
	/**
	 * Data de abertura do caixa.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $dAbertura;
	/**
	 * Hora de abertura do caixa.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $hAbertura;
	/**
	 * Valor de abertura do caixa (Caixa Inicial).
	 *
	 * @var decimal
	 */
	public float $vAbertura;
	/**
	 * Data de fechamento do caixa.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $dFechamento;
	/**
	 * Hora de fechamento do caixa.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $hFechamento;
	/**
	 * Valor do fechamento do caixa (Caixa Final).
	 *
	 * @var decimal
	 */
	public float $vFechamento;
}
