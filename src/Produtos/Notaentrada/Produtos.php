<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Itens da nota de entrada
 *
 * @pw_element integer $nCodIt Código do item da nota de entrada<BR><BR>Não informar na inclusão preenchimento automático.<BR>Informe esse campo na alteração somente quando cCodItInt não for informado.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodItInt Código de integração do item da nota de entrada<BR><BR>Preenchimento obrigatório na inclusão e na alteração quando nCodIt não for informado. Informe esse campo na alteração somente quando nCodIt não for informado.<BR><BR>Preenchimento opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do item do pedido no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de itens de pedidos você conseguirá ver a relação entre o id do item do pedido gerado no Omie e o código de item de pedido existente em sua aplicação.
 * @pw_element integer $nCodProd ID do Produto.<BR><BR>Preenchimento obrigatório quando cCodProdInt não for informado.<BR>Informe esse campo somente quando cCodProdInt não for informado.<BR><BR>Esse campo não é exibido na tela do pedido. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.
 * @pw_element string $cCodProdInt Código de integração do produto.<BR><BR>Preenchimento obrigatório quando nCodProd não for informado.<BR>Informe esse campo somente quando nCodProd não for informado.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "nCodProd".
 * @pw_element string $cCFOP CFOP - Código Fiscal de Operações e Prestações.<BR><BR>Preenchimento opcional.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
 * @pw_element decimal $nQtde Quantidade<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element decimal $nValUnit Valor unitário<BR><BR>Preenchimento obrigatório.
 * @pw_element string $cNCM NCM - Nomenclatura Comum do Mercosul<BR><BR>Preenchimento opcional.<BR><BR>Utilize a tag "cCodigo" do método "ListarNCM" da API<BR>http://app.omie.com.br/api/v1/produtos/ncm/<BR>para obter essa informação.
 * @pw_element string $cEAN EAN - European Article Number<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nDesconto Valor do desconto<BR><BR>Preenchimento opcional.
 * @pw_element ICMS $ICMS Informações do ICMS
 * @pw_element ICMS_ST $ICMS_ST Informações do ICMS-ST
 * @pw_element ICMS_SN $ICMS_SN Informações do ICMS-Simples Nacional.
 * @pw_element ICMS_INTER $ICMS_INTER Informações do ICMS Interestadual
 * @pw_element IPI $IPI IPI
 * @pw_element PIS $PIS PIS
 * @pw_element COFINS $COFINS COFINS
 * @pw_element infAdicItem $infAdicItem Informações adicionais do item
 * @pw_element string $cCest CEST
 * @pw_element rastreabilidade $rastreabilidade Rastreabilidade do produto
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não preenchido assumirá o local de estoque padrão.
 * @pw_element integer $codigo_local_estoque_saida Código do local do estoque saída.<BR><BR>Preenchimento opcional.<BR><BR>Este é o local de estoque de saída do cliente ou fornecedor (terceiro). Ao concluir a nota de entrada, o sistema poderá criar automaticamente a saída de estoque neste local.
 * @pw_element medicamentos $medicamentos Detalhamento específico para medicamentos
 * @pw_element veiculos $veiculos Dados específico para veículos novos
 * @pw_element combustivel $combustivel Detalhamento específico de combustíveis
 * @pw_element custos $custos Custos de estoque do item da nota de entrada
 * @pw_element string $cAcaoItem Ação a ser realizada no item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item.
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_element IBS_CBS $IBS_CBS Informações unificadas sobre o IBS e CBS.
 * @pw_element IBS $IBS Informações sobre o IBS.
 * @pw_element CBS $CBS Informações sobre o CBS.
 * @pw_element TRIB_REG $TRIB_REG Informações sobre a Tributação Regular do IBS e CBS.
 * @pw_complex produtos
 */
class Produtos{
	/**
	 * Código do item da nota de entrada<BR><BR>Não informar na inclusão preenchimento automático.<BR>Informe esse campo na alteração somente quando cCodItInt não for informado.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nCodIt;
	/**
	 * Código de integração do item da nota de entrada<BR><BR>Preenchimento obrigatório na inclusão e na alteração quando nCodIt não for informado. Informe esse campo na alteração somente quando nCodIt não for informado.<BR><BR>Preenchimento opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do item do pedido no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de itens de pedidos você conseguirá ver a relação entre o id do item do pedido gerado no Omie e o código de item de pedido existente em sua aplicação.
	 *
	 * @var string
	 */
	public string $cCodItInt;
	/**
	 * ID do Produto.<BR><BR>Preenchimento obrigatório quando cCodProdInt não for informado.<BR>Informe esse campo somente quando cCodProdInt não for informado.<BR><BR>Esse campo não é exibido na tela do pedido. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de integração do produto.<BR><BR>Preenchimento obrigatório quando nCodProd não for informado.<BR>Informe esse campo somente quando nCodProd não for informado.<BR><BR>Esse campo deve ser informado apenas se você incluiu o produto via API e informou um código de integração para o produto. Do contrário, informe sempre a tag "nCodProd".
	 *
	 * @var string
	 */
	public string $cCodProdInt;
	/**
	 * CFOP - Código Fiscal de Operações e Prestações.<BR><BR>Preenchimento opcional.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>http://app.omie.com.br/api/v1/produtos/cfop/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCFOP;
	/**
	 * Quantidade<BR><BR>Preenchimento obrigatório.<BR>
	 *
	 * @var decimal
	 */
	public float $nQtde;
	/**
	 * Valor unitário<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $nValUnit;
	/**
	 * NCM - Nomenclatura Comum do Mercosul<BR><BR>Preenchimento opcional.<BR><BR>Utilize a tag "cCodigo" do método "ListarNCM" da API<BR>http://app.omie.com.br/api/v1/produtos/ncm/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * EAN - European Article Number<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Valor do desconto<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nDesconto;
	/**
	 * Informações do ICMS
	 *
	 * @var ICMS
	 */
	public ICMS $ICMS;
	/**
	 * Informações do ICMS-ST
	 *
	 * @var ICMS_ST
	 */
	public ICMS_ST $ICMS_ST;
	/**
	 * Informações do ICMS-Simples Nacional.
	 *
	 * @var ICMS_SN
	 */
	public ICMS_SN $ICMS_SN;
	/**
	 * Informações do ICMS Interestadual
	 *
	 * @var ICMS_INTER
	 */
	public ICMS_INTER $ICMS_INTER;
	/**
	 * IPI
	 *
	 * @var IPI
	 */
	public IPI $IPI;
	/**
	 * PIS
	 *
	 * @var PIS
	 */
	public PIS $PIS;
	/**
	 * COFINS
	 *
	 * @var COFINS
	 */
	public COFINS $COFINS;
	/**
	 * Informações adicionais do item
	 *
	 * @var InfAdicItem
	 */
	public InfAdicItem $infAdicItem;
	/**
	 * CEST
	 *
	 * @var string
	 */
	public string $cCest;
	/**
	 * Rastreabilidade do produto
	 *
	 * @var Rastreabilidade
	 */
	public Rastreabilidade $rastreabilidade;
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não preenchido assumirá o local de estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do local do estoque saída.<BR><BR>Preenchimento opcional.<BR><BR>Este é o local de estoque de saída do cliente ou fornecedor (terceiro). Ao concluir a nota de entrada, o sistema poderá criar automaticamente a saída de estoque neste local.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque_saida;
	/**
	 * Detalhamento específico para medicamentos
	 *
	 * @var Medicamentos
	 */
	public Medicamentos $medicamentos;
	/**
	 * Dados específico para veículos novos
	 *
	 * @var Veiculos
	 */
	public Veiculos $veiculos;
	/**
	 * Detalhamento específico de combustíveis
	 *
	 * @var Combustivel
	 */
	public Combustivel $combustivel;
	/**
	 * Custos de estoque do item da nota de entrada
	 *
	 * @var Custos
	 */
	public Custos $custos;
	/**
	 * Ação a ser realizada no item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item.
	 *
	 * @var string
	 */
	public string $cAcaoItem;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
	/**
	 * Informações unificadas sobre o IBS e CBS.
	 *
	 * @var IBS_CBS
	 */
	public IBS_CBS $IBS_CBS;
	/**
	 * Informações sobre o IBS.
	 *
	 * @var IBS
	 */
	public IBS $IBS;
	/**
	 * Informações sobre o CBS.
	 *
	 * @var CBS
	 */
	public CBS $CBS;
	/**
	 * Informações sobre a Tributação Regular do IBS e CBS.
	 *
	 * @var TRIB_REG
	 */
	public TRIB_REG $TRIB_REG;
}
