<?php

namespace OmieLib\Crm\Oportunidades;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Request\OpAlterarRequest;
use OmieLib\Crm\Oportunidades\Request\OpConsultarRequest;
use OmieLib\Crm\Oportunidades\Request\OpExcluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpIncluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpListarRequest;
use OmieLib\Crm\Oportunidades\Request\OpUpsertRequest;
use OmieLib\Crm\Oportunidades\Response\OpAlterarResponse;
use OmieLib\Crm\Oportunidades\Response\OpConsultarResponse;
use OmieLib\Crm\Oportunidades\Response\OpExcluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpIncluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpListarResponse;
use OmieLib\Crm\Oportunidades\Response\OpUpsertResponse;

/**
 * Concorrentes
 *
 * @pw_element integer $nCodConc Código do concorrente.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntConc Código de integração do concorrente.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cObservacao Observação do Concorrente.
 * @pw_complex concorrentes
 */
class Concorrentes{
	/**
	 * Código do concorrente.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodConc;
	/**
	 * Código de integração do concorrente.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntConc;
	/**
	 * Observação do Concorrente.
	 *
	 * @var string
	 */
	public string $cObservacao;
}
