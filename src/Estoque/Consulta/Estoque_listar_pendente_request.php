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
 * Solicitação de listagem de saldo pendente de estoque.
 *
 * @pw_element integer $pagina Número da página retornada.
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local do Estoque Padrão.
 * @pw_element string $lista_local_estoque Lista de Códigos de Locais do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Separar os IDs por virgula (,) ou informar "TODOS" para listar todos os estoques de estoque.
 * @pw_element integer $id_prod Código do Produto.
 * @pw_element string $tipo Tipo da operação. <BR><BR>Pode ser:<BR>saida<BR>entrada
 * @pw_complex estoque_listar_pendente_request
 */
class Estoque_listar_pendente_request{
	/**
	 * Número da página retornada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local do Estoque Padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Lista de Códigos de Locais do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Separar os IDs por virgula (,) ou informar "TODOS" para listar todos os estoques de estoque.
	 *
	 * @var string
	 */
	public string $lista_local_estoque;
	/**
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
	/**
	 * Tipo da operação. <BR><BR>Pode ser:<BR>saida<BR>entrada
	 *
	 * @var string
	 */
	public string $tipo;
}
