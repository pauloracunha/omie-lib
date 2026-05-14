<?php

namespace OmieLib\Produtos\VendasResumo\Request;

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
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;
use OmieLib\Produtos\VendasResumo\ResumoProdutosVendasJsonClient;
use OmieLib\Produtos\VendasResumo\SaidaCte;
use OmieLib\Produtos\VendasResumo\SaidaNfe;

/**
 * Solicitação do resumo de vendas de produtos.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element boolean $lApenasResumo Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>FaturamentoResumo<BR>pedidoVenda->faturarHoje<BR>propostaVenda->faturarHoje<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true
 * @pw_complex ObterResumoVendasRequest
 */
class ObterResumoVendasRequest{
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
	 * Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>FaturamentoResumo<BR>pedidoVenda->faturarHoje<BR>propostaVenda->faturarHoje<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true
	 *
	 * @var boolean
	 */
	public bool $lApenasResumo;
}
