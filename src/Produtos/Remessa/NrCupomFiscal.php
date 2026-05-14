<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Outros cupons fiscais relacionados
 *
 * @pw_element string $cAcaoItem Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
 * @pw_element string $nrCOO Contador de Ordem de Operação (COO)
 * @pw_element string $nrNumeroECF Número do ECF
 * @pw_complex nrCupomFiscal
 */
class NrCupomFiscal{
	/**
	 * Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
	 *
	 * @var string
	 */
	public string $cAcaoItem;
	/**
	 * Contador de Ordem de Operação (COO)
	 *
	 * @var string
	 */
	public string $nrCOO;
	/**
	 * Número do ECF
	 *
	 * @var string
	 */
	public string $nrNumeroECF;
}
