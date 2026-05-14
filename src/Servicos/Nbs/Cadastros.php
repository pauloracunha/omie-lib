<?php

namespace OmieLib\Servicos\Nbs;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nbs\Request\NbsListarRequest;
use OmieLib\Servicos\Nbs\Response\NbsListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element string $nIdNBS Id do NBS.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodigo Código NBS (Nomenclatura Brasileira de Serviços).
 * @pw_element string $cDescricao Descrição do NBS (Nomenclatura Brasileira de Serviços).
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Id do NBS.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $nIdNBS;
	/**
	 * Código NBS (Nomenclatura Brasileira de Serviços).
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do NBS (Nomenclatura Brasileira de Serviços).
	 *
	 * @var string
	 */
	public string $cDescricao;
}
