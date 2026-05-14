<?php

namespace OmieLib\Geral\Dre\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Dre\DreCadastroJsonClient;
use OmieLib\Geral\Dre\DreLista;
use OmieLib\Geral\Dre\Response\DreCadastroListResponse;

/**
 * Lista os DREs cadastrados.
 *
 * @pw_element string $apenasContasAtivas Listar apenas as contas ativas: S ou N.
 * @pw_complex dreCadastroListRequest
 */
class DreCadastroListRequest{
	/**
	 * Listar apenas as contas ativas: S ou N.
	 *
	 * @var string
	 */
	public string $apenasContasAtivas;
}
