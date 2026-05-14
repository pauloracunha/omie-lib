<?php

namespace OmieLib\Geral\Empresas;

use OmieLib\Common\OmieFail;

/**
 * Consulta um código no cadastro de Empresas
 *
 * @pw_element integer $codigo_empresa Código da Empresa
 * @pw_complex empresas_consultar
 */
class Empresas_consultar{
	/**
	 * Código da Empresa
	 *
	 * @var integer
	 */
	public int $codigo_empresa;
}
