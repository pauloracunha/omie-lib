<?php

namespace OmieLib\Geral\Cidades\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cidades\CidadesCadastroJsonClient;
use OmieLib\Geral\Cidades\Lista_cidades;
use OmieLib\Geral\Cidades\Response\CidListarResponse;

/**
 * Solicitação de Listagem de Cidades
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>INTEGRACAO - Código do lançamento interno do seu sistema;<BR>DATA_LANCAMENTO - Data do lançamento.
 * @pw_element string $ordem_descrescente Indica se a ordem de exibição é decrescente caso seja informado "S".
 * @pw_element string $filtrar_por_data_de Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_por_data_ate Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas registros alterados (S/N)
 * @pw_element string $filtrar_cidade_contendo Nome completo (Cidade+UF)
 * @pw_element string $filtrar_por_uf Estado da Empresa
 * @pw_element string $filtrar_por_cidade Código da Cidade<BR><BR>Codigo da Cidade ou Codigo IBGE.<BR><BR>
 * @pw_complex cidListarRequest
 */
class CidListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados
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
	 * Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>INTEGRACAO - Código do lançamento interno do seu sistema;<BR>DATA_LANCAMENTO - Data do lançamento.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Indica se a ordem de exibição é decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * Filtrar apenas registros incluídos (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas registros alterados (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
	/**
	 * Nome completo (Cidade+UF)
	 *
	 * @var string
	 */
	public string $filtrar_cidade_contendo;
	/**
	 * Estado da Empresa
	 *
	 * @var string
	 */
	public string $filtrar_por_uf;
	/**
	 * Código da Cidade<BR><BR>Codigo da Cidade ou Codigo IBGE.<BR><BR>
	 *
	 * @var string
	 */
	public string $filtrar_por_cidade;
}
