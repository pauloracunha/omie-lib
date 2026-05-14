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
 * Despesa reembolsável
 *
 * @pw_element integer $nCodReemb ID do Reembolso.<BR><BR>(Código interno utilizado apenas na API, utilizado somente na Alteração e Exclusão).<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar a despesa via API.
 * @pw_element string $cAcaoReemb Pode ser:<BR><BR>"A" - Alterar a despesa.<BR>"E" - Excluir a despesa.<BR>"I" - Incluir a despesa na alteração.
 * @pw_element string $cDescReemb Descrição da despesa.
 * @pw_element decimal $nValorReemb Valor da despesa.
 * @pw_element string $dDataReemb Data da despesa.
 * @pw_complex despesaReembolsavel
 */
class DespesaReembolsavel{
	/**
	 * ID do Reembolso.<BR><BR>(Código interno utilizado apenas na API, utilizado somente na Alteração e Exclusão).<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar a despesa via API.
	 *
	 * @var integer
	 */
	public int $nCodReemb;
	/**
	 * Pode ser:<BR><BR>"A" - Alterar a despesa.<BR>"E" - Excluir a despesa.<BR>"I" - Incluir a despesa na alteração.
	 *
	 * @var string
	 */
	public string $cAcaoReemb;
	/**
	 * Descrição da despesa.
	 *
	 * @var string
	 */
	public string $cDescReemb;
	/**
	 * Valor da despesa.
	 *
	 * @var decimal
	 */
	public float $nValorReemb;
	/**
	 * Data da despesa.
	 *
	 * @var string
	 */
	public string $dDataReemb;
}
