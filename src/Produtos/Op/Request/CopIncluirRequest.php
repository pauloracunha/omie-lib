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
 * Solicitação de Inclusão da ordem de produção.
 *
 * @pw_element identificacao $identificacao Cabeçalho da ordem de produção.
 * @pw_element infAdicionais $infAdicionais Informações adicionais.
 * @pw_element observacoes $observacoes Observações da ordem de produção.&nbsp;
 * @pw_element outrasInf $outrasInf Outras informações da ordem de produção.
 * @pw_element itensArray $itens Itens da ordem de produção
 * @pw_complex copIncluirRequest
 */
class CopIncluirRequest{
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
}
