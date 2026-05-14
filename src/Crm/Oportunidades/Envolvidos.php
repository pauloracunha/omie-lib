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
 * Envolvidos na oportunidade.
 *
 * @pw_element integer $nCodFinder Código do Finder.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodParceiro Código do parceiro.
 * @pw_element integer $nCodPrevenda Código da prevenda.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_complex envolvidos
 */
class Envolvidos{
	/**
	 * Código do Finder.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodFinder;
	/**
	 * Código do parceiro.
	 *
	 * @var integer
	 */
	public int $nCodParceiro;
	/**
	 * Código da prevenda.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodPrevenda;
}
