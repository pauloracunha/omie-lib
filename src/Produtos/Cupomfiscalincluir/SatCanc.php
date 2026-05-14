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
 * Dados do Cancelamento do SAT.
 *
 * @pw_element string $satProtCan Protocolo de envio do cancelamento do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $satXmlCan XML do Cupom Fiscal enviado.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR> & para &amp; <BR> > para &gt;<BR> < para &lt;<BR> " para &quot;<BR> "  para &apos;<BR> |  para &#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "satMd5Can".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
 * @pw_element string $satMd5Can MD5 do arquivo XML enviado em "satXmlCan".<BR><BR>Preenchimento obrigatório.
 * @pw_complex satCanc
 */
class SatCanc{
	/**
	 * Protocolo de envio do cancelamento do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $satProtCan;
	/**
	 * XML do Cupom Fiscal enviado.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR> & para &amp; <BR> > para &gt;<BR> < para &lt;<BR> " para &quot;<BR> "  para &apos;<BR> |  para &#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "satMd5Can".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
	 *
	 * @var string
	 */
	public string $satXmlCan;
	/**
	 * MD5 do arquivo XML enviado em "satXmlCan".<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $satMd5Can;
}
