<?php

namespace OmieLib\Produtos\ComprasResumo\Request;

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
use OmieLib\Produtos\ComprasResumo\RequisicaoCompra;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;
use OmieLib\Produtos\ComprasResumo\ResumoProdutosComprasJsonClient;

/**
 * Solicitação do resumo de compas de produtos.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_complex ObterResumoComprasRequest
 */
class ObterResumoComprasRequest{
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
}
