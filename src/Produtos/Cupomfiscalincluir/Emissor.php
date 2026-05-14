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
 * Identificação do Emissor do Cupom Fiscal.
 *
 * @pw_element string $emiNome Nome do aplicativo emissor do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>O aplicativo deve ser previamente cadastrado. <BR>Para isso entre em contato com a nosso suporte.<BR>
 * @pw_element string $emiVersao Versão do aplicativo emissor do cupom fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $emiSerial Serial do HD em que o aplicativo emissor do cupom fiscal está instalado. <BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element string $emiId Identificação do computador onde o aplicativo emissor do cupom fiscal está instalado. É o código do PDV.<BR>Exemplos: "01", "20", "55".<BR><BR>Preenchimento obrigatório.
 * @pw_complex emissor
 */
class Emissor{
	/**
	 * Nome do aplicativo emissor do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>O aplicativo deve ser previamente cadastrado. <BR>Para isso entre em contato com a nosso suporte.<BR>
	 *
	 * @var string
	 */
	public string $emiNome;
	/**
	 * Versão do aplicativo emissor do cupom fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $emiVersao;
	/**
	 * Serial do HD em que o aplicativo emissor do cupom fiscal está instalado. <BR><BR>Preenchimento obrigatório.<BR>
	 *
	 * @var string
	 */
	public string $emiSerial;
	/**
	 * Identificação do computador onde o aplicativo emissor do cupom fiscal está instalado. É o código do PDV.<BR>Exemplos: "01", "20", "55".<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $emiId;
}
