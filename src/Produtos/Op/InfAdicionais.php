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
 * Informações adicionais.
 *
 * @pw_element string $dDtInicio Data de início da produção
 * @pw_element string $dDtConclusao Data de conclusão da produção.
 * @pw_element integer $nCodProjeto Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cEtapa Etapa da Ordem de Produção<BR><BR>Preenchimento automatico.
 * @pw_complex infAdicionais
 */
class InfAdicionais{
	/**
	 * Data de início da produção
	 *
	 * @var string
	 */
	public string $dDtInicio;
	/**
	 * Data de conclusão da produção.
	 *
	 * @var string
	 */
	public string $dDtConclusao;
	/**
	 * Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodProjeto;
	/**
	 * Etapa da Ordem de Produção<BR><BR>Preenchimento automatico.
	 *
	 * @var string
	 */
	public string $cEtapa;
}
