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
 * Resposta da solicitação de consulta de ordem de produção.
 *
 * @pw_element identificacao $identificacao Cabeçalho da ordem de produção.
 * @pw_element infAdicionais $infAdicionais Informações adicionais.
 * @pw_element observacoes $observacoes Observações da ordem de produção.&nbsp;
 * @pw_element outrasInf $outrasInf Outras informações da ordem de produção.
 * @pw_element itensArray $itens Itens da ordem de produção
 * @pw_element itensDetalhesArray $itensDetalhes Detalhes dos itens da Ordem de Produção
 * @pw_complex copConsultarResponse
 */
class CopConsultarResponse{
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
