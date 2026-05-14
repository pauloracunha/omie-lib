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
 * Dados do cancelamento da NFC-e.
 *
 * @pw_element string $nfceProtCan Protocolo de cancelamento da NFC-e.<BR><BR>Preenchimento obrigatório quando indicar que a NFC-e está cancelada.
 * @pw_element string $nfceXmlCan XML da NFC-e cancelada.<BR><BR>Preechimento obrigatório para indicar o cancelamento da NFC-e.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "nfceMd5Can".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
 * @pw_element string $nfceMd5Can MD5 do arquivo XML enviado em "nfceXmlCan".<BR><BR>Preenchimento obrigatório.
 * @pw_complex nfceCanc
 */
class NfceCanc{
	/**
	 * Protocolo de cancelamento da NFC-e.<BR><BR>Preenchimento obrigatório quando indicar que a NFC-e está cancelada.
	 *
	 * @var string
	 */
	public string $nfceProtCan;
	/**
	 * XML da NFC-e cancelada.<BR><BR>Preechimento obrigatório para indicar o cancelamento da NFC-e.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "nfceMd5Can".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
	 *
	 * @var string
	 */
	public string $nfceXmlCan;
	/**
	 * MD5 do arquivo XML enviado em "nfceXmlCan".<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $nfceMd5Can;
}
