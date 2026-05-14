<?php

namespace OmieLib\Estoque\Consulta;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\Request\EstoqueMovimentoRequest;
use OmieLib\Estoque\Consulta\Request\ListarEstPosRequest;
use OmieLib\Estoque\Consulta\Request\ListarMovEstoqueRequest;
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;

/**
 * Resposta da solicitação de listagem de saldo pendente de estoque.
 *
 * @pw_element integer $pagina Número da página retornada.
 * @pw_element integer $total_de_paginas Número total de páginas.
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados.
 * @pw_element saldo_pendente_listaArray $saldo_pendente_lista Estoque mínimo para o produto.
 * @pw_complex estoque_listar_pendente_response
 */
class Estoque_listar_pendente_response{
	/**
	 * Número da página retornada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número total de páginas.
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
	 * total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Estoque mínimo para o produto.
	 *
	 * @var Saldo_pendente_lista[]
	 */
	public array $saldo_pendente_lista;
}
