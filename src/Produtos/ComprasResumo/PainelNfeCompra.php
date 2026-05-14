<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais de faturamentos de Notas Fiscais de entrada.
 *
 * @pw_element emitidasFornecedorNfe $emitidasFornecedorNfe Exibe os totais de faturamentos das Notas Fiscais (NF-e) emitidas pelo própria fornecedor.
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
 * @pw_complex painelNfeCompra
 */
class PainelNfeCompra{
	/**
	 * Exibe os totais de faturamentos das Notas Fiscais (NF-e) emitidas pelo própria fornecedor.
	 *
	 * @var EmitidasFornecedorNfe
	 */
	public EmitidasFornecedorNfe $emitidasFornecedorNfe;
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
	 *
	 * @var string
	 */
	public string $cVisualizar;
}
