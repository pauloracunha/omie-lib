<?php

namespace OmieLib\Crm\Parceiros;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Parceiros\Request\ParceiroListarRequest;
use OmieLib\Crm\Parceiros\Response\ParceiroListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do parceiro / equipe.
 * @pw_element string $cDescricao Descrição do parceiro / equipe.
 * @pw_element string $cEmail Email do parceiro / equipe.
 * @pw_element string $cObservacao Observação.
 * @pw_element string $cInativo Indica se o parceiro / equipe está inativo.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código do parceiro / equipe.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição do parceiro / equipe.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Email do parceiro / equipe.
	 *
	 * @var string
	 */
	public string $cEmail;
	/**
	 * Observação.
	 *
	 * @var string
	 */
	public string $cObservacao;
	/**
	 * Indica se o parceiro / equipe está inativo.
	 *
	 * @var string
	 */
	public string $cInativo;
}
