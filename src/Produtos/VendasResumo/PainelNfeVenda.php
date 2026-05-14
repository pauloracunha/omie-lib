<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais de faturamentos de Notas Fiscais.
 *
 * @pw_element emitidasEmpresaNfe $emitidasEmpresaNfe Exibe os totais de faturamentos das Notas Fiscais (NF-e) emitidas pela própria empresa.
 * @pw_complex painelNfeVenda
 */
class PainelNfeVenda{
	/**
	 * Exibe os totais de faturamentos das Notas Fiscais (NF-e) emitidas pela própria empresa.
	 *
	 * @var EmitidasEmpresaNfe
	 */
	public EmitidasEmpresaNfe $emitidasEmpresaNfe;
}
