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
 * Outras informações da ordem de produção.
 *
 * @pw_element string $cConcluida Indica se a ordem de produção está concluída.
 * @pw_element string $dConclusao Data da conclusão.
 * @pw_element string $hConclusao Hora da conclusão.
 * @pw_element string $dInclusao Data de inclusão da oportunidade.
 * @pw_element string $hInclusao Hora de inclusão da oportunidade.
 * @pw_element string $uInc Usuário da Inclusão.
 * @pw_element string $dAlteracao Data de alteração da oportunidade.
 * @pw_element string $hAlteracao Hora de alteração da oportunidade.
 * @pw_element string $uAlt Usuário da Alteração.
 * @pw_complex outrasInf
 */
class OutrasInf{
	/**
	 * Indica se a ordem de produção está concluída.
	 *
	 * @var string
	 */
	public string $cConcluida;
	/**
	 * Data da conclusão.
	 *
	 * @var string
	 */
	public string $dConclusao;
	/**
	 * Hora da conclusão.
	 *
	 * @var string
	 */
	public string $hConclusao;
	/**
	 * Data de inclusão da oportunidade.
	 *
	 * @var string
	 */
	public string $dInclusao;
	/**
	 * Hora de inclusão da oportunidade.
	 *
	 * @var string
	 */
	public string $hInclusao;
	/**
	 * Usuário da Inclusão.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data de alteração da oportunidade.
	 *
	 * @var string
	 */
	public string $dAlteracao;
	/**
	 * Hora de alteração da oportunidade.
	 *
	 * @var string
	 */
	public string $hAlteracao;
	/**
	 * Usuário da Alteração.
	 *
	 * @var string
	 */
	public string $uAlt;
}
