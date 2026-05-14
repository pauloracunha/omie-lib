<?php

namespace OmieLib\Crm\Solucoes;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Solucoes\Request\SolucaoListarRequest;
use OmieLib\Crm\Solucoes\Response\SolucaoListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código da solução.
 * @pw_element string $cDescricao Descrição da solução.
 * @pw_element string $cObservacao Observações.
 * @pw_element string $cInativo Indica se a solução está inativa.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da solução.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição da solução.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Observações.
	 *
	 * @var string
	 */
	public string $cObservacao;
	/**
	 * Indica se a solução está inativa.
	 *
	 * @var string
	 */
	public string $cInativo;
}
