<?php

namespace OmieLib\Produtos\Nfe\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfe\Itens;
use OmieLib\Produtos\Nfe\ItensXml;
use OmieLib\Produtos\Nfe\Lancamentos;
use OmieLib\Produtos\Nfe\ListagemNfe;
use OmieLib\Produtos\Nfe\Lote_validade;
use OmieLib\Produtos\Nfe\NfeJsonClient;
use OmieLib\Produtos\Nfe\Parcelas;
use OmieLib\Produtos\Nfe\Response\NfeCancelarResponse;
use OmieLib\Produtos\Nfe\Response\NfeExcluirResponse;
use OmieLib\Produtos\Nfe\Response\NfeImportarResponse;
use OmieLib\Produtos\Nfe\Response\NfeListarResponse;

/**
 * Solicitação de Cancelamento da NF-e.
 *
 * @pw_element string $cAppNome Nome do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>GeradorNF-e
 * @pw_element string $cAppVersao Versão do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>1.02.01
 * @pw_element string $cAppId Identificação do aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>ID001<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de NF-e, indique: "01" e "02" ou "10" e "20" e assim por diante.
 * @pw_element string $cChaveNfe Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
 * @pw_element integer $nIdImportacao ID da Importação da NF-e.
 * @pw_element integer $nIdNFe ID do NF-e.
 * @pw_element string $cXmlNFeCanc Xml de Cancelamento do CT-e.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "cMd5CteCanc".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
 * @pw_element string $cMd5NFeCanc MD5 do arquivo XML importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Aplique o MD5 sobre o XML antes de realizar o consumo.<BR>
 * @pw_complex nfeCancelarRequest
 */
class NfeCancelarRequest{
	/**
	 * Nome do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>GeradorNF-e
	 *
	 * @var string
	 */
	public string $cAppNome;
	/**
	 * Versão do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>1.02.01
	 *
	 * @var string
	 */
	public string $cAppVersao;
	/**
	 * Identificação do aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>ID001<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de NF-e, indique: "01" e "02" ou "10" e "20" e assim por diante.
	 *
	 * @var string
	 */
	public string $cAppId;
	/**
	 * Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
	 *
	 * @var string
	 */
	public string $cChaveNfe;
	/**
	 * ID da Importação da NF-e.
	 *
	 * @var integer
	 */
	public int $nIdImportacao;
	/**
	 * ID do NF-e.
	 *
	 * @var integer
	 */
	public int $nIdNFe;
	/**
	 * Xml de Cancelamento do CT-e.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "cMd5CteCanc".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
	 *
	 * @var string
	 */
	public string $cXmlNFeCanc;
	/**
	 * MD5 do arquivo XML importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Aplique o MD5 sobre o XML antes de realizar o consumo.<BR>
	 *
	 * @var string
	 */
	public string $cMd5NFeCanc;
}
