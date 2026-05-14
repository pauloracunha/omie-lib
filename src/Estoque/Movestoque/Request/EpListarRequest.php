<?php

namespace OmieLib\Estoque\Movestoque\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Movestoque\Cadastros;
use OmieLib\Estoque\Movestoque\MovimentoEstoqueJsonClient;
use OmieLib\Estoque\Movestoque\Movimentos;
use OmieLib\Estoque\Movestoque\Response\EpListarResponse;
use OmieLib\Estoque\Movestoque\Response\EpPrevisaoResponse;

/**
 * Solicitação da listagem movimentos de estoque de entrada/saida de um período.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $data_inicial Data de inicio do período a ser pesquisado.
 * @pw_element string $data_final Data final do período a ser pesquisado.
 * @pw_element string $hora_inicial Hora Inicial
 * @pw_element string $hora_final Hora Final
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não informado pesquisará no local de estoque padrão.
 * @pw_complex epListarRequest
 */
class EpListarRequest{
	/**
	 * Número da página retornada
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
	 * Exibir apenas os registros gerados pela API
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * Data de inicio do período a ser pesquisado.
	 *
	 * @var string
	 */
	public string $data_inicial;
	/**
	 * Data final do período a ser pesquisado.
	 *
	 * @var string
	 */
	public string $data_final;
	/**
	 * Hora Inicial
	 *
	 * @var string
	 */
	public string $hora_inicial;
	/**
	 * Hora Final
	 *
	 * @var string
	 */
	public string $hora_final;
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não informado pesquisará no local de estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
}
