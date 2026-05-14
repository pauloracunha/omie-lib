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
 * Identificação do SAT.
 *
 * @pw_element string $satSerie Número de série do SAT.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplos: <BR>"0001882143"
 * @pw_element string $satModelo Modelo do SAT.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>"DIMEP"<BR>
 * @pw_element integer $satSessao Sessão do SAT.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $satProt Protocolo de envio do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $satXml XML do Cupom Fiscal enviado.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "satMd5".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
 * @pw_element string $satMd5 MD5 do arquivo XML enviado em "satXML".<BR><BR>Preenchimento obrigatório.
 * @pw_complex sat
 */
class Sat{
	/**
	 * Número de série do SAT.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplos: <BR>"0001882143"
	 *
	 * @var string
	 */
	public string $satSerie;
	/**
	 * Modelo do SAT.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>"DIMEP"<BR>
	 *
	 * @var string
	 */
	public string $satModelo;
	/**
	 * Sessão do SAT.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $satSessao;
	/**
	 * Protocolo de envio do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $satProt;
	/**
	 * XML do Cupom Fiscal enviado.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "satMd5".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
	 *
	 * @var string
	 */
	public string $satXml;
	/**
	 * MD5 do arquivo XML enviado em "satXML".<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $satMd5;
}
