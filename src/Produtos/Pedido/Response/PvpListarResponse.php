<?php

namespace OmieLib\Produtos\Pedido\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Agropecuario;
use OmieLib\Produtos\Pedido\Cabecalho;
use OmieLib\Produtos\Pedido\Cbs;
use OmieLib\Produtos\Pedido\Cliente_simul;
use OmieLib\Produtos\Pedido\Cofins_padrao;
use OmieLib\Produtos\Pedido\Cofins_st;
use OmieLib\Produtos\Pedido\Combustivel;
use OmieLib\Produtos\Pedido\Csll;
use OmieLib\Produtos\Pedido\Departamentos;
use OmieLib\Produtos\Pedido\Det;
use OmieLib\Produtos\Pedido\Det_simul;
use OmieLib\Produtos\Pedido\Det_simul_resp;
use OmieLib\Produtos\Pedido\Exportacao;
use OmieLib\Produtos\Pedido\Frete;
use OmieLib\Produtos\Pedido\Frete_simul;
use OmieLib\Produtos\Pedido\Ibs;
use OmieLib\Produtos\Pedido\Ibs_cbs;
use OmieLib\Produtos\Pedido\Icms;
use OmieLib\Produtos\Pedido\Icms_efet;
use OmieLib\Produtos\Pedido\Icms_ie;
use OmieLib\Produtos\Pedido\Icms_retido;
use OmieLib\Produtos\Pedido\Icms_sn;
use OmieLib\Produtos\Pedido\Icms_st;
use OmieLib\Produtos\Pedido\Ide;
use OmieLib\Produtos\Pedido\Imposto;
use OmieLib\Produtos\Pedido\Inf_adic;
use OmieLib\Produtos\Pedido\InfoCadastro;
use OmieLib\Produtos\Pedido\Informacoes_adicionais;
use OmieLib\Produtos\Pedido\Inss;
use OmieLib\Produtos\Pedido\Ipi;
use OmieLib\Produtos\Pedido\Irrf;
use OmieLib\Produtos\Pedido\Iss;
use OmieLib\Produtos\Pedido\Itens;
use OmieLib\Produtos\Pedido\Lancamentos;
use OmieLib\Produtos\Pedido\ListaNfe;
use OmieLib\Produtos\Pedido\Lista_parcelas;
use OmieLib\Produtos\Pedido\Lote_validade;
use OmieLib\Produtos\Pedido\Market_place;
use OmieLib\Produtos\Pedido\Mensagens;
use OmieLib\Produtos\Pedido\NfRelacionada;
use OmieLib\Produtos\Pedido\NrCupomFiscal;
use OmieLib\Produtos\Pedido\NrModelo1_1A;
use OmieLib\Produtos\Pedido\NrNF;
use OmieLib\Produtos\Pedido\NrProdutorRural;
use OmieLib\Produtos\Pedido\Observacao;
use OmieLib\Produtos\Pedido\Observacoes;
use OmieLib\Produtos\Pedido\Outros_detalhes;
use OmieLib\Produtos\Pedido\Parcela;
use OmieLib\Produtos\Pedido\PedidoVendaProdutoJsonClient;
use OmieLib\Produtos\Pedido\Pedido_venda_produto;
use OmieLib\Produtos\Pedido\Pedido_venda_produto_response;
use OmieLib\Produtos\Pedido\Pis_padrao;
use OmieLib\Produtos\Pedido\Pis_st;
use OmieLib\Produtos\Pedido\Produto;
use OmieLib\Produtos\Pedido\Produto_simul;
use OmieLib\Produtos\Pedido\Produto_simul_resp;
use OmieLib\Produtos\Pedido\Rastreabilidade;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Total_pedido;
use OmieLib\Produtos\Pedido\Trib_reg;
use OmieLib\Produtos\Pedido\Tributavel;

/**
 * Resposta da solicitação de listagem de pedidos de venda.
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element pedido_venda_produtoArray $pedido_venda_produto Estrutura do Pedido de Vendas de Produtos.<BR>Preenchimento Obrigatório.
 * @pw_complex pvpListarResponse
 */
class PvpListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Estrutura do Pedido de Vendas de Produtos.<BR>Preenchimento Obrigatório.
	 *
	 * @var Pedido_venda_produto[]
	 */
	public array $pedido_venda_produto;
}
