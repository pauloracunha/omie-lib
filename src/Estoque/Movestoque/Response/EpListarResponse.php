<?php

namespace OmieLib\Estoque\Movestoque\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Movestoque\Cadastros;
use OmieLib\Estoque\Movestoque\MovimentoEstoqueJsonClient;
use OmieLib\Estoque\Movestoque\Movimentos;
use OmieLib\Estoque\Movestoque\Request\EpListarRequest;
use OmieLib\Estoque\Movestoque\Request\EpPrevisaoRequest;

/**
 * Resposta da solicitação da listagem movimentos de estoque de entrada/saida de um período.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros de produtos encontrados.
 * @pw_complex epListarResponse
 */
class EpListarResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Lista os cadastros de produtos encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
