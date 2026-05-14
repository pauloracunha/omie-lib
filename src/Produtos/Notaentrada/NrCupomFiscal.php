<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Outros cupons fiscais relacionados
 *
 * @pw_element string $cAcaoItem Ação a ser realizada no item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item.
 * @pw_element string $nrCOO Contador de Ordem de Operação (COO)
 * @pw_element string $nrNumeroECF Número do ECF
 * @pw_complex nrCupomFiscal
 */
class NrCupomFiscal{
	/**
	 * Ação a ser realizada no item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item.<BR>"E" - Excluir o item.<BR>"I" - Incluir o item.
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
