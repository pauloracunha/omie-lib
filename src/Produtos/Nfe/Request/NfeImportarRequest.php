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
 * Solicitação do Importação de NF-e.
 *
 * @pw_element string $cAppNome Nome do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>GeradorNF-e
 * @pw_element string $cAppVersao Versão do Aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>1.02.01
 * @pw_element string $cAppId Identificação do aplicativo que emitiu a NF-e.<BR><BR>Preenchimento obrigatório.<BR><BR>Exemplo:<BR>ID001<BR><BR>PS: Informe o código que identifica a instalação do aplicativo.<BR>Caso o cliente tenha 2 Emissores de NF-e, indique: "01" e "02" ou "10" e "20" e assim por diante.
 * @pw_element string $cChaveNFe Chave da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Apenas números com 44 digitos.
 * @pw_element string $cXmlNFe Xml da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "cMd5NFe".
 * @pw_element string $cMd5NFe MD5 do arquivo XML importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Aplique o MD5 sobre o XML antes de realizar o consumo.<BR>
 * @pw_element string $cOperacao Tipo de Operação da Nota Fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Códigos Disponíveis:<BR><BR>11 - Venda de produtos<BR>21 - Compra de produtos
 * @pw_element string $cOrigem Origem da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Códigos Disponíveis:<BR><BR>API - Importado via API.<BR>
 * @pw_element string $dDataPrevisao Data de Previsão do título de contas a pagar/receber.<BR><BR>Preenchimento Obrigatório.<BR><BR>Formato: dd/mm/aaaa
 * @pw_element integer $nCliente Id do cliente.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nVendedor Id do Vendedor.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nProjeto Id do projeto.<BR><BR>Preenchimento opcional.
 * @pw_element string $cCategoria Código da Categoria.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nContaCorrente Id da Conta Corrente.<BR><BR>Preenchimento opcional.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Assumirá o local padrão de estoque caso não informado.
 * @pw_element boolean $lNaoMovEstoque Não movimentar o estoque.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a movimentação do estoque.<BR>false - Gera o movimentação do estoque.<BR><BR>O padrão é true.<BR><BR>Prevalece a informa
 * @pw_element boolean $lNaoGerarTitulo Não gerar título de contas a pagar ou receber para a NF-e.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a geração do título de Contas a Pagar ou Receber no financeiro.<BR>false - Gera o ítulo de Contas a Pagar ou Receber no financeiro.<BR><BR>O padrão é true.
 * @pw_element boolean $lNaoIncluirCliente Não adicionar o cliente caso não encontre no Omie.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a inclusão do cliente.<BR>false - Inclui o cliente caso não encontre.<BR><BR>O padrão é true.
 * @pw_element boolean $lNaoIncluirProduto Não adicionar o produto caso não encontre no Omie.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a inclusão do produto.<BR>false - Inclui o produto caso não encontre.<BR><BR>O padrão é true.
 * @pw_element string $cNumeroPedidoCliente Número do "Seu Pedido"
 * @pw_element itensArray $itens Itens da Nota Fiscal.<BR><BR>Preenchimento opcional.
 * @pw_element parcelasArray $parcelas Informações complementares das Parcelas da NF-e.<BR><BR>Nessa tag é recebido informações para complemento das parcelas já existentes no XML da NF-e enviada.<BR><BR>Preenchimento opcional.
 * @pw_element lancamentosArray $lancamentos Lançamentos no Conta Corrente relacionados a Nota Fiscal.<BR>(Tarifas,taxas,entre outros).<BR><BR>Preenchimento opcional.
 * @pw_element itensXmlArray $itensXml Dados dos Itens da NF-e.<BR><BR>Informe aqui a relação dos produtos contidos no XML com o respectivo produto no Omie ERP.<BR><BR>Caso a tag "itens" seja preenchida esta tag não deve ser utilizada. <BR><BR>Preenchimento opcional.
 * @pw_complex nfeImportarRequest
 */
class NfeImportarRequest{
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
	public string $cChaveNFe;
	/**
	 * Xml da NF-e a ser importada.<BR><BR>Preenchimento obrigatório.<BR><BR>Antes de enviar, converta os seus seguintes caracteres:<BR><BR>&amp; para &amp;amp; <BR>> para &amp;gt;<BR>< para &amp;lt;<BR>" para &amp;quot;<BR>" para &amp;apos;<BR>| para &amp;#124;<BR><BR>Após essa conversão aplique o MD5 para enviar no campo "cMd5NFe".
	 *
	 * @var string
	 */
	public string $cXmlNFe;
	/**
	 * MD5 do arquivo XML importado.<BR><BR>Preenchimento obrigatório.<BR><BR>Aplique o MD5 sobre o XML antes de realizar o consumo.<BR>
	 *
	 * @var string
	 */
	public string $cMd5NFe;
	/**
	 * Tipo de Operação da Nota Fiscal.<BR><BR>Preenchimento obrigatório.<BR><BR>Códigos Disponíveis:<BR><BR>11 - Venda de produtos<BR>21 - Compra de produtos
	 *
	 * @var string
	 */
	public string $cOperacao;
	/**
	 * Origem da Nota Fiscal.<BR><BR>Preenchimento opcional.<BR><BR>Códigos Disponíveis:<BR><BR>API - Importado via API.<BR>
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Data de Previsão do título de contas a pagar/receber.<BR><BR>Preenchimento Obrigatório.<BR><BR>Formato: dd/mm/aaaa
	 *
	 * @var string
	 */
	public string $dDataPrevisao;
	/**
	 * Id do cliente.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nCliente;
	/**
	 * Id do Vendedor.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nVendedor;
	/**
	 * Id do projeto.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nProjeto;
	/**
	 * Código da Categoria.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Id da Conta Corrente.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nContaCorrente;
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Assumirá o local padrão de estoque caso não informado.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Não movimentar o estoque.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a movimentação do estoque.<BR>false - Gera o movimentação do estoque.<BR><BR>O padrão é true.<BR><BR>Prevalece a informa
	 *
	 * @var boolean
	 */
	public bool $lNaoMovEstoque;
	/**
	 * Não gerar título de contas a pagar ou receber para a NF-e.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a geração do título de Contas a Pagar ou Receber no financeiro.<BR>false - Gera o ítulo de Contas a Pagar ou Receber no financeiro.<BR><BR>O padrão é true.
	 *
	 * @var boolean
	 */
	public bool $lNaoGerarTitulo;
	/**
	 * Não adicionar o cliente caso não encontre no Omie.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a inclusão do cliente.<BR>false - Inclui o cliente caso não encontre.<BR><BR>O padrão é true.
	 *
	 * @var boolean
	 */
	public bool $lNaoIncluirCliente;
	/**
	 * Não adicionar o produto caso não encontre no Omie.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>true - inibe a inclusão do produto.<BR>false - Inclui o produto caso não encontre.<BR><BR>O padrão é true.
	 *
	 * @var boolean
	 */
	public bool $lNaoIncluirProduto;
	/**
	 * Número do "Seu Pedido"
	 *
	 * @var string
	 */
	public string $cNumeroPedidoCliente;
	/**
	 * Itens da Nota Fiscal.<BR><BR>Preenchimento opcional.
	 *
	 * @var Itens[]
	 */
	public array $itens;
	/**
	 * Informações complementares das Parcelas da NF-e.<BR><BR>Nessa tag é recebido informações para complemento das parcelas já existentes no XML da NF-e enviada.<BR><BR>Preenchimento opcional.
	 *
	 * @var Parcelas[]
	 */
	public array $parcelas;
	/**
	 * Lançamentos no Conta Corrente relacionados a Nota Fiscal.<BR>(Tarifas,taxas,entre outros).<BR><BR>Preenchimento opcional.
	 *
	 * @var Lancamentos[]
	 */
	public array $lancamentos;
	/**
	 * Dados dos Itens da NF-e.<BR><BR>Informe aqui a relação dos produtos contidos no XML com o respectivo produto no Omie ERP.<BR><BR>Caso a tag "itens" seja preenchida esta tag não deve ser utilizada. <BR><BR>Preenchimento opcional.
	 *
	 * @var ItensXml[]
	 */
	public array $itensXml;
}
