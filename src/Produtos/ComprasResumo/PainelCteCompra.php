<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais de faturamentos de Conhecimentos de Transporte de entrada.
 *
 * @pw_element emitidasEmpresaCte $emitidasEmpresaCte Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) emitidos pelo fornecedor.
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
 * @pw_complex painelCteCompra
 */
class PainelCteCompra{
	/**
	 * Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) emitidos pelo fornecedor.
	 *
	 * @var EmitidasEmpresaCte
	 */
	public EmitidasEmpresaCte $emitidasEmpresaCte;
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
	 *
	 * @var string
	 */
	public string $cVisualizar;
}
