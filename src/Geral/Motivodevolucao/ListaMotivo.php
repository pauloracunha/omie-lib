<?php

namespace OmieLib\Geral\Motivodevolucao;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Motivodevolucao\Request\ListarMotivoDevolRequest;
use OmieLib\Geral\Motivodevolucao\Response\ListarMotivoDevolResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nCodigo Código do motivo da devolução.
 * @pw_element string $cDescricao Descrição do motivo da devolução.
 * @pw_element string $cInativo Indica se o motivo da devolução está inativo.<BR><BR>Pode ser "S" ou "N".
 * @pw_complex listaMotivo
 */
class ListaMotivo{
	/**
	 * Código do motivo da devolução.
	 *
	 * @var integer
	 */
	public int $nCodigo;
	/**
	 * Descrição do motivo da devolução.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Indica se o motivo da devolução está inativo.<BR><BR>Pode ser "S" ou "N".
	 *
	 * @var string
	 */
	public string $cInativo;
}
