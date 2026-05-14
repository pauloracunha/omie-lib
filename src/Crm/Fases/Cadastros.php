<?php

namespace OmieLib\Crm\Fases;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Fases\Request\FasesListarRequest;
use OmieLib\Crm\Fases\Response\FasesListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código da fase da oportunidade.
 * @pw_element string $cDescrPadrao Descrição padrão da fase da oportunidade.
 * @pw_element string $cDescrUsuario Descrição personalizada pelo usuário.
 * @pw_element string $cObservacao Observação da fase da oportunidade.
 * @pw_element integer $nOrdem Ordem da fase da oportunidade.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da fase da oportunidade.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição padrão da fase da oportunidade.
	 *
	 * @var string
	 */
	public string $cDescrPadrao;
	/**
	 * Descrição personalizada pelo usuário.
	 *
	 * @var string
	 */
	public string $cDescrUsuario;
	/**
	 * Observação da fase da oportunidade.
	 *
	 * @var string
	 */
	public string $cObservacao;
	/**
	 * Ordem da fase da oportunidade.
	 *
	 * @var integer
	 */
	public int $nOrdem;
}
