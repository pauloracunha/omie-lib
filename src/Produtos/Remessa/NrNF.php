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
 * Outras NF-e, NFC-e ou SAT relacionadas
 *
 * @pw_element string $cAcaoItem Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
 * @pw_element string $nrChave Chave da NF-e, NFC-e ou SAT relacionada
 * @pw_complex nrNF
 */
class NrNF{
	/**
	 * Ação a ser realizada no item na alteração.<BR><BR>Pode ser:<BR><BR>"I" - Incluir o item.<BR>"E" - Excluir o item.
	 *
	 * @var string
	 */
	public string $cAcaoItem;
	/**
	 * Chave da NF-e, NFC-e ou SAT relacionada
	 *
	 * @var string
	 */
	public string $nrChave;
}
