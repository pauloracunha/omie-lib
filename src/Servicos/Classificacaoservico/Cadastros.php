<?php

namespace OmieLib\Servicos\Classificacaoservico;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Classificacaoservico\Request\ClassificaServicoRequest;
use OmieLib\Servicos\Classificacaoservico\Response\ClassificaServicoResponse;

/**
 * Lista os tipos de classificações do serviço.
 *
 * @pw_element string $cCodigo Código da classificação do serviço
 * @pw_element string $cDescricao Descrição da classificação do serviço
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da classificação do serviço
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição da classificação do serviço
	 *
	 * @var string
	 */
	public string $cDescricao;
}
