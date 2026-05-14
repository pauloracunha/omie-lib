<?php

namespace OmieLib\Produtos\Op\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Op\Cadastros;
use OmieLib\Produtos\Op\Identificacao;
use OmieLib\Produtos\Op\InfAdicionais;
use OmieLib\Produtos\Op\Info;
use OmieLib\Produtos\Op\Itens;
use OmieLib\Produtos\Op\ItensDetalhes;
use OmieLib\Produtos\Op\Lote_validade;
use OmieLib\Produtos\Op\Lote_validade_op;
use OmieLib\Produtos\Op\Observacoes;
use OmieLib\Produtos\Op\OrdemProducaoJsonClient;
use OmieLib\Produtos\Op\OutrasInf;
use OmieLib\Produtos\Op\Request\CopAlterarRequest;
use OmieLib\Produtos\Op\Request\CopConcluirRequest;
use OmieLib\Produtos\Op\Request\CopConsultarRequest;
use OmieLib\Produtos\Op\Request\CopExcluirRequest;
use OmieLib\Produtos\Op\Request\CopIncluirRequest;
use OmieLib\Produtos\Op\Request\CopListarRequest;
use OmieLib\Produtos\Op\Request\CopReverterRequest;
use OmieLib\Produtos\Op\Request\CopUpsertRequest;

/**
 * Resposta da solicitação da listagem de ordens de produção.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex copListarResponse
 */
class CopListarResponse{
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
	 * Lista os cadastros encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
