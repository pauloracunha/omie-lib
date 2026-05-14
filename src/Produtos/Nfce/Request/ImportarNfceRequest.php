<?php

namespace OmieLib\Produtos\Nfce\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfce\NfceJsonClient;
use OmieLib\Produtos\Nfce\Response\ImportarNfceResponse;

/**
 * Importar Nota Fiscal Consumidor Eletrônica (NFC-e).
 *
 * @pw_element string $emiNome Nome do aplicativo emissor do cupom fiscal.<BR>Preenchimento obrigatório.<BR>O aplicativo deve ser previamente cadastrado. Para isso entre em contato com a nosso suporte.
 * @pw_element string $emiVersao Versão do aplicativo emissor do cupom fiscal.<BR>Preenchimento obrigatório.
 * @pw_element string $emiId Identificação do computador onde o aplicativo emissor do cupom fiscal está instalado. É o código do PDV.<BR>Exemplos: '01', '20', '55'.<BR>Preenchimento obrigatório.
 * @pw_element string $chNFe Chave de Acesso da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $nfceXml XML da NFC-e enviada.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>' para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "nfceMd5".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
 * @pw_element string $nfceMd5 MD5 do arquivo XML enviado em "nfceXml".<BR><BR>Preenchimento obrigatório.
 * @pw_element string $cAcaoCliente Ação a ser executada com relação a tag idCliente. <BR>Preenchimento opcional.<BR><BR>Pode ser:  <BR><BR>- CONSUMIDOR: assumirá que a venda foi realizada para um cliente consumidor padrão. Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR><BR>- ERRO (padrão): Exigirá a definição de um idCliente válido.<BR><BR>- INCLUIR: Com base nos dados do XML irá fazer a inclusão de um novo cliente.
 * @pw_element integer $idCliente Código do cliente.<BR>Preenchimento opcional.<BR><BR>- Se no XML não houver informações do cliente assumirá que a venda foi realizada para um cliente consumidor padrão. Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR>&nbsp;<BR>- Se no XML houver informações do cliente, seus dados serão consultados no Omie com base no CPF/CNPJ, caso não seja encontrado a tag cAcaoCliente será avaliada.<BR><BR>Possível valores para tag cAcaoCliente:<BR><BR>- CONSUMIDOR: assumirá que a venda foi realizada para um cliente consumidor padrão. Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR><BR>- ERRO (padrão): Exigirá a definição de um idCliente válido.<BR><BR>- INCLUIR: Com base nos dados do XML irá fazer a inclusão de um novo cliente.
 * @pw_element integer $idVendedor Código do vendedor.<BR>Preenchimento opcional.<BR><BR>Quando não informado, será criado um vendedor padrão para o emissor de cupom fiscal.
 * @pw_element integer $idProjeto Código do projeto.<BR>Preenchimento opcional.<BR><BR>Quando não informado, será criado um projeto padrão para o emissor de cupom fiscal.
 * @pw_element integer $idLocalEstoque Código do Local do Estoque.<BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local de Estoque padrão.
 * @pw_element string $cNaoMovEstoque Indica que os items do Cupom Fiscal não devem movimentar o estoque.<BR><BR>Valores possíveis: <BR>S - Sim <BR>N - Não
 * @pw_element string $cNaoGerarTitulo Indica que a parcela não deve gerar um título no financeiro.<BR><BR>Valores possíveis: <BR>S - Sim <BR>N - Não
 * @pw_element string $cIncluirProduto Indica se na inclusão do cupom os produtos não existentes devem ser incluídos automaticamente.<BR><BR>Possíveis valores: <BR>S - Sim<BR>N - Não (padrão)
 * @pw_complex ImportarNfceRequest
 */
class ImportarNfceRequest{
	/**
	 * Nome do aplicativo emissor do cupom fiscal.<BR>Preenchimento obrigatório.<BR>O aplicativo deve ser previamente cadastrado. Para isso entre em contato com a nosso suporte.
	 *
	 * @var string
	 */
	public string $emiNome;
	/**
	 * Versão do aplicativo emissor do cupom fiscal.<BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $emiVersao;
	/**
	 * Identificação do computador onde o aplicativo emissor do cupom fiscal está instalado. É o código do PDV.<BR>Exemplos: '01', '20', '55'.<BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $emiId;
	/**
	 * Chave de Acesso da Nota Fiscal Consumidor Eletrônico.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $chNFe;
	/**
	 * XML da NFC-e enviada.<BR><BR>Preechimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>' para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "nfceMd5".<BR><BR>Observação: Para requisições SOAP usar CDATA como demonstra o exemplo abaixo:<BR>&lt;![CDATA[Conteúdo do campo convertido]]&gt;
	 *
	 * @var string
	 */
	public string $nfceXml;
	/**
	 * MD5 do arquivo XML enviado em "nfceXml".<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $nfceMd5;
	/**
	 * Ação a ser executada com relação a tag idCliente. <BR>Preenchimento opcional.<BR><BR>Pode ser:  <BR><BR>- CONSUMIDOR: assumirá que a venda foi realizada para um cliente consumidor padrão. Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR><BR>- ERRO (padrão): Exigirá a definição de um idCliente válido.<BR><BR>- INCLUIR: Com base nos dados do XML irá fazer a inclusão de um novo cliente.
	 *
	 * @var string
	 */
	public string $cAcaoCliente;
	/**
	 * Código do cliente.<BR>Preenchimento opcional.<BR><BR>- Se no XML não houver informações do cliente assumirá que a venda foi realizada para um cliente consumidor padrão. Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR>&nbsp;<BR>- Se no XML houver informações do cliente, seus dados serão consultados no Omie com base no CPF/CNPJ, caso não seja encontrado a tag cAcaoCliente será avaliada.<BR><BR>Possível valores para tag cAcaoCliente:<BR><BR>- CONSUMIDOR: assumirá que a venda foi realizada para um cliente consumidor padrão. Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR><BR>- ERRO (padrão): Exigirá a definição de um idCliente válido.<BR><BR>- INCLUIR: Com base nos dados do XML irá fazer a inclusão de um novo cliente.
	 *
	 * @var integer
	 */
	public int $idCliente;
	/**
	 * Código do vendedor.<BR>Preenchimento opcional.<BR><BR>Quando não informado, será criado um vendedor padrão para o emissor de cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idVendedor;
	/**
	 * Código do projeto.<BR>Preenchimento opcional.<BR><BR>Quando não informado, será criado um projeto padrão para o emissor de cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idProjeto;
	/**
	 * Código do Local do Estoque.<BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local de Estoque padrão.
	 *
	 * @var integer
	 */
	public int $idLocalEstoque;
	/**
	 * Indica que os items do Cupom Fiscal não devem movimentar o estoque.<BR><BR>Valores possíveis: <BR>S - Sim <BR>N - Não
	 *
	 * @var string
	 */
	public string $cNaoMovEstoque;
	/**
	 * Indica que a parcela não deve gerar um título no financeiro.<BR><BR>Valores possíveis: <BR>S - Sim <BR>N - Não
	 *
	 * @var string
	 */
	public string $cNaoGerarTitulo;
	/**
	 * Indica se na inclusão do cupom os produtos não existentes devem ser incluídos automaticamente.<BR><BR>Possíveis valores: <BR>S - Sim<BR>N - Não (padrão)
	 *
	 * @var string
	 */
	public string $cIncluirProduto;
}
