<?php

namespace OmieLib\Produtos\Op\Request;

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
use OmieLib\Produtos\Op\Response\CopAlterarResponse;
use OmieLib\Produtos\Op\Response\CopConcluirResponse;
use OmieLib\Produtos\Op\Response\CopConsultarResponse;
use OmieLib\Produtos\Op\Response\CopExcluirResponse;
use OmieLib\Produtos\Op\Response\CopIncluirResponse;
use OmieLib\Produtos\Op\Response\CopListarResponse;
use OmieLib\Produtos\Op\Response\CopReverterResponse;
use OmieLib\Produtos\Op\Response\CopUpsertResponse;

/**
 * Solicitação da listagem de ordens de produção.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element integer $nCodProjeto Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nIdProd ID do produto
 * @pw_element boolean $lExibirItens Exibir os itens da ordem de produção.<BR><BR>Será retornado os detalhes dos itens da ordem de produção na tag "itensDetalhes".<BR><BR>Default false<BR><BR>Pode ser:<BR>false<BR>true
 * @pw_element string $dDtConclusaoDe Data inicial da consulta de Ordem de Produção por data de conclusão.
 * @pw_element string $dDtConclusaoAte Data final da consulta de Ordem de Produção por data de conclusão.
 * @pw_element string $cConcluida Indica se a ordem de produção está concluída.
 * @pw_complex copListarRequest
 */
class CopListarRequest{
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
	 * Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodProjeto;
	/**
	 * ID do produto
	 *
	 * @var integer
	 */
	public int $nIdProd;
	/**
	 * Exibir os itens da ordem de produção.<BR><BR>Será retornado os detalhes dos itens da ordem de produção na tag "itensDetalhes".<BR><BR>Default false<BR><BR>Pode ser:<BR>false<BR>true
	 *
	 * @var boolean
	 */
	public bool $lExibirItens;
	/**
	 * Data inicial da consulta de Ordem de Produção por data de conclusão.
	 *
	 * @var string
	 */
	public string $dDtConclusaoDe;
	/**
	 * Data final da consulta de Ordem de Produção por data de conclusão.
	 *
	 * @var string
	 */
	public string $dDtConclusaoAte;
	/**
	 * Indica se a ordem de produção está concluída.
	 *
	 * @var string
	 */
	public string $cConcluida;
}
