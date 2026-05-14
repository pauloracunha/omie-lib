<?php

namespace OmieLib\Produtos\Op;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Op\Request\CopAlterarRequest;
use OmieLib\Produtos\Op\Request\CopConcluirRequest;
use OmieLib\Produtos\Op\Request\CopConsultarRequest;
use OmieLib\Produtos\Op\Request\CopExcluirRequest;
use OmieLib\Produtos\Op\Request\CopIncluirRequest;
use OmieLib\Produtos\Op\Request\CopListarRequest;
use OmieLib\Produtos\Op\Request\CopReverterRequest;
use OmieLib\Produtos\Op\Request\CopUpsertRequest;
use OmieLib\Produtos\Op\Response\CopAlterarResponse;
use OmieLib\Produtos\Op\Response\CopConcluirResponse;
use OmieLib\Produtos\Op\Response\CopConsultarResponse;
use OmieLib\Produtos\Op\Response\CopExcluirResponse;
use OmieLib\Produtos\Op\Response\CopIncluirResponse;
use OmieLib\Produtos\Op\Response\CopListarResponse;
use OmieLib\Produtos\Op\Response\CopReverterResponse;
use OmieLib\Produtos\Op\Response\CopUpsertResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element identificacao $identificacao Cabeçalho da ordem de produção.
 * @pw_element infAdicionais $infAdicionais Informações adicionais.
 * @pw_element observacoes $observacoes Observações da ordem de produção.&nbsp;
 * @pw_element outrasInf $outrasInf Outras informações da ordem de produção.
 * @pw_element itensArray $itens Itens da ordem de produção
 * @pw_element itensDetalhesArray $itensDetalhes Detalhes dos itens da Ordem de Produção
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Cabeçalho da ordem de produção.
	 *
	 * @var Identificacao
	 */
	public Identificacao $identificacao;
	/**
	 * Informações adicionais.
	 *
	 * @var InfAdicionais
	 */
	public InfAdicionais $infAdicionais;
	/**
	 * Observações da ordem de produção.&nbsp;
	 *
	 * @var Observacoes
	 */
	public Observacoes $observacoes;
	/**
	 * Outras informações da ordem de produção.
	 *
	 * @var OutrasInf
	 */
	public OutrasInf $outrasInf;
	/**
	 * Itens da ordem de produção
	 *
	 * @var Itens[]
	 */
	public array $itens;
	/**
	 * Detalhes dos itens da Ordem de Produção
	 *
	 * @var ItensDetalhes[]
	 */
	public array $itensDetalhes;
}
