<?php

namespace OmieLib\Geral\Vendedores\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Vendedores\Cadastro;
use OmieLib\Geral\Vendedores\Response\VendAlterarResponse;
use OmieLib\Geral\Vendedores\Response\VendConsultarResponse;
use OmieLib\Geral\Vendedores\Response\VendExcluirResponse;
use OmieLib\Geral\Vendedores\Response\VendIncluirResponse;
use OmieLib\Geral\Vendedores\Response\VendListarResponse;
use OmieLib\Geral\Vendedores\Response\VendUpsertResponse;
use OmieLib\Geral\Vendedores\VendedoresCadastroJsonClient;

/**
 * Solicitação de Listagem de Vendedores
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por Ordenar o resultado da página por:<BR><BR>CODIGO - Código do lançamento do Omie;<BR>INTEGRACAO - Código do lançamento interno do seu sistema;<BR>DATA_LANCAMENTO - Data do lançamento.
 * @pw_element string $ordem_descrescente Indica se a ordem de exibição é decrescente caso seja informado "S".
 * @pw_element string $filtrar_por_data_de Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_por_data_ate Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas registros alterados (S/N)
 * @pw_element string $filtrar_por_email Filtrar os vendedores por e-mail
 * @pw_element string $filtrar_por_nome Filtrar os vendedores por nome
 * @pw_complex vendListarRequest
 */
class VendListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * DEPRECATED
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
	 * Filtrar os vendedores por e-mail
	 *
	 * @var string
	 */
	public string $filtrar_por_email;
	/**
	 * Filtrar os vendedores por nome
	 *
	 * @var string
	 */
	public string $filtrar_por_nome;
}
