<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Chave de Pesquisa da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element despesasReembolsaveis $despesasReembolsaveis Despesas reembolsáveis.
 * @pw_element string $cIncluirTarefas Indica se deve incluir as tarefas vinculadas a ordem de serviço no retorno (S/N).<BR><BR>Como default é "N".<BR><BR>Deve ser utilizado apenas no método de consulta.
 * @pw_complex osChave
 */
class OsChave{
	/**
	 * Código de Integração da OS
	 *
	 * @var string
	 */
	public string $cCodIntOS;
	/**
	 * Código da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
	 *
	 * @var string
	 */
	public string $cNumOS;
	/**
	 * Despesas reembolsáveis.
	 *
	 * @var DespesasReembolsaveis
	 */
	public DespesasReembolsaveis $despesasReembolsaveis;
	/**
	 * Indica se deve incluir as tarefas vinculadas a ordem de serviço no retorno (S/N).<BR><BR>Como default é "N".<BR><BR>Deve ser utilizado apenas no método de consulta.
	 *
	 * @var string
	 */
	public string $cIncluirTarefas;
}
