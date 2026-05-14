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
 * Resposta da solicitação da inclusão de ordem de produção.
 *
 * @pw_element integer $nCodOP Código da ordem de produção.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntOP Código de integração da ordem de produção.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex copIncluirResponse
 */
class CopIncluirResponse{
	/**
	 * Código da ordem de produção.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOP;
	/**
	 * Código de integração da ordem de produção.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntOP;
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
