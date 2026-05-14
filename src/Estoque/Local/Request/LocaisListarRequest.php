<?php

namespace OmieLib\Estoque\Local\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Local\LocaisEncontrados;
use OmieLib\Estoque\Local\LocalEstoqueJsonClient;
use OmieLib\Estoque\Local\Response\AlterarLocalResponse;
use OmieLib\Estoque\Local\Response\IncluirLocalResponse;
use OmieLib\Estoque\Local\Response\LocaisListarResponse;

/**
 * Solicitação de listagem de Locais de Estoque.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $filtrar_por_data_de Filtrar os registros a partir de uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
 * @pw_element string $filtrar_por_hora_de Filtrar a partir da hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
 * @pw_element string $filtrar_por_data_ate Filtrar os registros até uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
 * @pw_element string $filtrar_por_hora_ate Filtrar até a hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas os registros incluídos (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas os registros alterados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_complex locaisListarRequest
 */
class LocaisListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Filtrar os registros a partir de uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Filtrar a partir da hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_de;
	/**
	 * Filtrar os registros até uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * Filtrar até a hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_ate;
	/**
	 * Filtrar apenas os registros incluídos (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas os registros alterados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
}
