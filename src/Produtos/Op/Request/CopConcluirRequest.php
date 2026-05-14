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
 * Solicitação de conclusão da ordem de produção.
 *
 * @pw_element integer $nCodOP Código da ordem de produção.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntOP Código de integração da ordem de produção.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $dDtConclusao Data de conclusão da produção.
 * @pw_element decimal $nQtdeProduzida Quantidade produzida.
 * @pw_element string $cObsConclusao Observação da ordem de produção.
 * @pw_complex copConcluirRequest
 */
class CopConcluirRequest{
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
	 * Data de conclusão da produção.
	 *
	 * @var string
	 */
	public string $dDtConclusao;
	/**
	 * Quantidade produzida.
	 *
	 * @var decimal
	 */
	public float $nQtdeProduzida;
	/**
	 * Observação da ordem de produção.
	 *
	 * @var string
	 */
	public string $cObsConclusao;
}
