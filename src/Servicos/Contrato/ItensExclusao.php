<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Itens a serem excluídos do contrato.
 *
 * @pw_element integer $codItem Identificação do Item do Contrato.<BR><BR>(Gerado automaticamente na Inclusão do item do contrato)
 * @pw_element string $codIntItem Código de integração do item do contrato.<BR><BR>Preenchimento opcional.
 * @pw_complex ItensExclusao
 */
class ItensExclusao{
	/**
	 * Identificação do Item do Contrato.<BR><BR>(Gerado automaticamente na Inclusão do item do contrato)
	 *
	 * @var integer
	 */
	public int $codItem;
	/**
	 * Código de integração do item do contrato.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $codIntItem;
}
