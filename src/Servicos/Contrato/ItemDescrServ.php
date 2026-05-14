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
 * Descrição dos Serviços
 *
 * @pw_element string $descrCompleta Informe a descrição completa do serviço prestado
 * @pw_complex itemDescrServ
 */
class ItemDescrServ{
	/**
	 * Informe a descrição completa do serviço prestado
	 *
	 * @var string
	 */
	public string $descrCompleta;
}
