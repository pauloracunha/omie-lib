<?php

namespace OmieLib\Geral\Projetos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Projetos\Cadastro;
use OmieLib\Geral\Projetos\Info;
use OmieLib\Geral\Projetos\ProjetosCadastroJsonClient;
use OmieLib\Geral\Projetos\Response\ProjAlterarResponse;
use OmieLib\Geral\Projetos\Response\ProjConsultarResponse;
use OmieLib\Geral\Projetos\Response\ProjExcluirResponse;
use OmieLib\Geral\Projetos\Response\ProjIncluirResponse;
use OmieLib\Geral\Projetos\Response\ProjListarResponse;
use OmieLib\Geral\Projetos\Response\ProjUpsertResponse;

/**
 * Solicitação de Listagem de Projetos
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
 * @pw_element string $nome_projeto Nome do projeto.
 * @pw_complex projListarRequest
 */
class ProjListarRequest{
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
	 * Nome do projeto.
	 *
	 * @var string
	 */
	public string $nome_projeto;
}
