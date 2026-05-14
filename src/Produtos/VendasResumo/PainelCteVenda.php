<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais de faturamentos de Conhecimentos de Transporte de saída.
 *
 * @pw_element emitidasEmpresaCte $emitidasEmpresaCte Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) emitidos pela própria empresa.
 * @pw_complex painelCteVenda
 */
class PainelCteVenda{
	/**
	 * Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) emitidos pela própria empresa.
	 *
	 * @var EmitidasEmpresaCte
	 */
	public EmitidasEmpresaCte $emitidasEmpresaCte;
}
