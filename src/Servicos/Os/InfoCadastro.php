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
 * Informações do cadastro da Ordem de Serviço.
 *
 * @pw_element string $cCancelada "S" para Ordem de Serviço cancelada.
 * @pw_element string $cFaturada "S" para Ordem de Serviço faturada com sucesso.
 * @pw_element string $cAmbiente Ambiente de emissão da NFS-e.<BR><BR>Pode ser:<BR><BR>H - Homologação<BR>P - Produção
 * @pw_element string $dDtInc Data de Inclusão da Ordem de Serviço
 * @pw_element string $cHrInc Hora de inclusão da Ordem de Serviço
 * @pw_element string $uInc Usuário da Inclusão.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $dDtAlt Data de Alteração da Ordem de Serviço
 * @pw_element string $cHrAlt Hora de Alteração da Ordem de Serviço
 * @pw_element string $uAlt Usuário da Alteração.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $dDtFat Data de Faturamento
 * @pw_element string $cHrFat Hora do Faturamento
 * @pw_element string $dDtCanc Data de Cancelamento
 * @pw_element string $cHrCanc Hora do Cancelamento
 * @pw_element string $cOrigem Origem da Ordem de Serviço
 * @pw_complex InfoCadastro
 */
class InfoCadastro{
	/**
	 * "S" para Ordem de Serviço cancelada.
	 *
	 * @var string
	 */
	public string $cCancelada;
	/**
	 * "S" para Ordem de Serviço faturada com sucesso.
	 *
	 * @var string
	 */
	public string $cFaturada;
	/**
	 * Ambiente de emissão da NFS-e.<BR><BR>Pode ser:<BR><BR>H - Homologação<BR>P - Produção
	 *
	 * @var string
	 */
	public string $cAmbiente;
	/**
	 * Data de Inclusão da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $dDtInc;
	/**
	 * Hora de inclusão da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $cHrInc;
	/**
	 * Usuário da Inclusão.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data de Alteração da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $dDtAlt;
	/**
	 * Hora de Alteração da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $cHrAlt;
	/**
	 * Usuário da Alteração.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $uAlt;
	/**
	 * Data de Faturamento
	 *
	 * @var string
	 */
	public string $dDtFat;
	/**
	 * Hora do Faturamento
	 *
	 * @var string
	 */
	public string $cHrFat;
	/**
	 * Data de Cancelamento
	 *
	 * @var string
	 */
	public string $dDtCanc;
	/**
	 * Hora do Cancelamento
	 *
	 * @var string
	 */
	public string $cHrCanc;
	/**
	 * Origem da Ordem de Serviço
	 *
	 * @var string
	 */
	public string $cOrigem;
}
