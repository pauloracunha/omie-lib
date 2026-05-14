<?php

namespace OmieLib\Produtos\ComprasResumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Compras;
use OmieLib\Produtos\ComprasResumo\EmAberto;
use OmieLib\Produtos\ComprasResumo\EmitidasEmpresaCte;
use OmieLib\Produtos\ComprasResumo\EmitidasFornecedorNfe;
use OmieLib\Produtos\ComprasResumo\EntradaCte;
use OmieLib\Produtos\ComprasResumo\EntradaNfe;
use OmieLib\Produtos\ComprasResumo\Etapa1;
use OmieLib\Produtos\ComprasResumo\Etapa2;
use OmieLib\Produtos\ComprasResumo\Etapa3;
use OmieLib\Produtos\ComprasResumo\Etapa4;
use OmieLib\Produtos\ComprasResumo\Etapa5;
use OmieLib\Produtos\ComprasResumo\Etapa6;
use OmieLib\Produtos\ComprasResumo\FaturamentoResumo;
use OmieLib\Produtos\ComprasResumo\FaturarHoje;
use OmieLib\Produtos\ComprasResumo\OrdemProducao;
use OmieLib\Produtos\ComprasResumo\PainelCteCompra;
use OmieLib\Produtos\ComprasResumo\PainelNfeCompra;
use OmieLib\Produtos\ComprasResumo\PedidoCompra;
use OmieLib\Produtos\ComprasResumo\Recebido;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\RequisicaoCompra;
use OmieLib\Produtos\ComprasResumo\ResumoProdutosComprasJsonClient;

/**
 * Resposta da solicitação do resumo de compras de produtos.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element painelNfeCompra $painelNfeCompra Exibe os totais de faturamentos de Notas Fiscais de entrada.<BR><BR>(NF-e).
 * @pw_element painelCteCompra $painelCteCompra Exibe os totais de faturamentos de Conhecimentos de Transporte de entrada.<BR><BR>(CT-e).
 * @pw_element requisicaoCompra $requisicaoCompra Exibe os totais das Requisições de Compras.
 * @pw_element pedidoCompra $pedidoCompra Exibe os totais dos Pedidos de Compras.
 * @pw_element faturamentoResumo $faturamentoResumo Exibe os totais de faturamentos (NF-e + Pedido de Compra).
 * @pw_element ordemProducao $ordemProducao Exibe os totais de faturamentos das Ordens de Produção.
 * @pw_complex ObterResumoComprasResponse
 */
class ObterResumoComprasResponse{
	/**
	 * Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataInicio;
	/**
	 * Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataFim;
	/**
	 * Exibe os totais de faturamentos de Notas Fiscais de entrada.<BR><BR>(NF-e).
	 *
	 * @var PainelNfeCompra
	 */
	public PainelNfeCompra $painelNfeCompra;
	/**
	 * Exibe os totais de faturamentos de Conhecimentos de Transporte de entrada.<BR><BR>(CT-e).
	 *
	 * @var PainelCteCompra
	 */
	public PainelCteCompra $painelCteCompra;
	/**
	 * Exibe os totais das Requisições de Compras.
	 *
	 * @var RequisicaoCompra
	 */
	public RequisicaoCompra $requisicaoCompra;
	/**
	 * Exibe os totais dos Pedidos de Compras.
	 *
	 * @var PedidoCompra
	 */
	public PedidoCompra $pedidoCompra;
	/**
	 * Exibe os totais de faturamentos (NF-e + Pedido de Compra).
	 *
	 * @var FaturamentoResumo
	 */
	public FaturamentoResumo $faturamentoResumo;
	/**
	 * Exibe os totais de faturamentos das Ordens de Produção.
	 *
	 * @var OrdemProducao
	 */
	public OrdemProducao $ordemProducao;
}
