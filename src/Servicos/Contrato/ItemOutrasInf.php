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
 * Outras informações do item do contrato de serviços
 *
 * @pw_element string $dItVigInicial Data da vigência inicial do item do contrato de serviços
 * @pw_element string $dItVigFinal Data da vigência final do item do contrato de serviços
 * @pw_element integer $nTipoItVigFinal Tipo da vigência final do item do contrato de serviços.<BR><BR>Valores possiveis:<BR><BR>1 - Data especifica<BR>2 - Segue a vigência final do contrato<BR>3 - Apenas para o proximo faturamento
 * @pw_complex itemOutrasInf
 */
class ItemOutrasInf{
	/**
	 * Data da vigência inicial do item do contrato de serviços
	 *
	 * @var string
	 */
	public string $dItVigInicial;
	/**
	 * Data da vigência final do item do contrato de serviços
	 *
	 * @var string
	 */
	public string $dItVigFinal;
	/**
	 * Tipo da vigência final do item do contrato de serviços.<BR><BR>Valores possiveis:<BR><BR>1 - Data especifica<BR>2 - Segue a vigência final do contrato<BR>3 - Apenas para o proximo faturamento
	 *
	 * @var integer
	 */
	public int $nTipoItVigFinal;
}
