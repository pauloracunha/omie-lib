<?php

namespace OmieLib\Produtos\VendasResumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\EmAberto;
use OmieLib\Produtos\VendasResumo\EmitidasEmpresaCte;
use OmieLib\Produtos\VendasResumo\EmitidasEmpresaNfe;
use OmieLib\Produtos\VendasResumo\FaturamentoCupomResumo;
use OmieLib\Produtos\VendasResumo\FaturamentoResumo;
use OmieLib\Produtos\VendasResumo\FaturarHoje;
use OmieLib\Produtos\VendasResumo\Pagamentos;
use OmieLib\Produtos\VendasResumo\PainelCfeSat;
use OmieLib\Produtos\VendasResumo\PainelCteVenda;
use OmieLib\Produtos\VendasResumo\PainelCupom;
use OmieLib\Produtos\VendasResumo\PainelNfce;
use OmieLib\Produtos\VendasResumo\PainelNfeVenda;
use OmieLib\Produtos\VendasResumo\PedidoVenda;
use OmieLib\Produtos\VendasResumo\PropostaVenda;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\ResumoProdutosVendasJsonClient;
use OmieLib\Produtos\VendasResumo\SaidaCte;
use OmieLib\Produtos\VendasResumo\SaidaNfe;

/**
 * Resposta da solicitação do resumo de vendas de produtos.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element painelNfeVenda $painelNfeVenda Exibe os totais de faturamentos de Notas Fiscais.<BR><BR> (NF-e).
 * @pw_element painelCteVenda $painelCteVenda Exibe os totais de faturamentos de Conhecimentos de Transporte de saída.<BR><BR>(CT-e).
 * @pw_element painelCfeSat $painelCfeSat Exibe os totais de faturamentos de Cupons Fiscais Eletrônicos.<BR><BR>(CFe-SAT).
 * @pw_element painelNfce $painelNfce Exibe os totais de faturamentos de Notas Fiscais de Consumidor Eletrônica.<BR><BR> (NFC-e).
 * @pw_element painelCupom $painelCupom Exibe os totais de faturamentos de Cupons Fiscais.<BR><BR> (ECF).
 * @pw_element faturamentoCupomResumo $faturamentoCupomResumo Resumo do faturamento de cupons (ECF + SAT + NFC-e)
 * @pw_element propostaVenda $propostaVenda Exibe os totais das propostas de venda de produtos.
 * @pw_element pedidoVenda $pedidoVenda Exibe os totais de venda de produtos.
 * @pw_element faturamentoResumo $faturamentoResumo Exibe os totais de faturamentos (NF-e + NFC-e + CF-e-SAT + ECF + CT-e).
 * @pw_complex ObterResumoVendasResponse
 */
class ObterResumoVendasResponse{
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
	 * Exibe os totais de faturamentos de Notas Fiscais.<BR><BR> (NF-e).
	 *
	 * @var PainelNfeVenda
	 */
	public PainelNfeVenda $painelNfeVenda;
	/**
	 * Exibe os totais de faturamentos de Conhecimentos de Transporte de saída.<BR><BR>(CT-e).
	 *
	 * @var PainelCteVenda
	 */
	public PainelCteVenda $painelCteVenda;
	/**
	 * Exibe os totais de faturamentos de Cupons Fiscais Eletrônicos.<BR><BR>(CFe-SAT).
	 *
	 * @var PainelCfeSat
	 */
	public PainelCfeSat $painelCfeSat;
	/**
	 * Exibe os totais de faturamentos de Notas Fiscais de Consumidor Eletrônica.<BR><BR> (NFC-e).
	 *
	 * @var PainelNfce
	 */
	public PainelNfce $painelNfce;
	/**
	 * Exibe os totais de faturamentos de Cupons Fiscais.<BR><BR> (ECF).
	 *
	 * @var PainelCupom
	 */
	public PainelCupom $painelCupom;
	/**
	 * Resumo do faturamento de cupons (ECF + SAT + NFC-e)
	 *
	 * @var FaturamentoCupomResumo
	 */
	public FaturamentoCupomResumo $faturamentoCupomResumo;
	/**
	 * Exibe os totais das propostas de venda de produtos.
	 *
	 * @var PropostaVenda
	 */
	public PropostaVenda $propostaVenda;
	/**
	 * Exibe os totais de venda de produtos.
	 *
	 * @var PedidoVenda
	 */
	public PedidoVenda $pedidoVenda;
	/**
	 * Exibe os totais de faturamentos (NF-e + NFC-e + CF-e-SAT + ECF + CT-e).
	 *
	 * @var FaturamentoResumo
	 */
	public FaturamentoResumo $faturamentoResumo;
}
