<?php

namespace OmieLib\Servicos\Servico;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;

/**
 * Dados da integração do serviço.
 *
 * @pw_element string $cCodIntServ Código de Integração do Serviço.<BR>(Utilizado em serviços criados via API, não é visualizado na tela)
 * @pw_complex intIncluir
 */
class IntIncluir{
	/**
	 * Código de Integração do Serviço.<BR>(Utilizado em serviços criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntServ;
}
