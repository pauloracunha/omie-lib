<?php

namespace OmieLib\Servicos\Tipoutilizacao;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Tipoutilizacao\Request\TipoUtilizacaoRequest;
use OmieLib\Servicos\Tipoutilizacao\Response\TipoUtilizacaoResponse;

/**
 * Lista os tipos de utilização do serviço.
 *
 * @pw_element string $cCodigo Código do tipo de utilização do serviço
 * @pw_element string $cDescricao Descrição do tipo de utilização do serviço
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do tipo de utilização do serviço
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do tipo de utilização do serviço
	 *
	 * @var string
	 */
	public string $cDescricao;
}
