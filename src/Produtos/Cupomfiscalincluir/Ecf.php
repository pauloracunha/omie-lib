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
 * Identificação do ECF.
 *
 * @pw_element string $ecfSerie Número de série da impressora fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplos: <BR>"BE051475610000207422"<BR>"EP121710000000018789"<BR>"SW040900000000009860"<BR>"DR0815BR000000462568"<BR>
 * @pw_element string $ecfModelo Modelo da Impressora Fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>"MP-2100 TH FI"<BR>
 * @pw_complex ecf
 */
class Ecf{
	/**
	 * Número de série da impressora fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplos: <BR>"BE051475610000207422"<BR>"EP121710000000018789"<BR>"SW040900000000009860"<BR>"DR0815BR000000462568"<BR>
	 *
	 * @var string
	 */
	public string $ecfSerie;
	/**
	 * Modelo da Impressora Fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>"MP-2100 TH FI"<BR>
	 *
	 * @var string
	 */
	public string $ecfModelo;
}
