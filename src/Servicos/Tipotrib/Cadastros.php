<?php

namespace OmieLib\Servicos\Tipotrib;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Tipotrib\Request\TribListarRequest;
use OmieLib\Servicos\Tipotrib\Response\TribListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element string $cIdTrib Id do Tipo de Tributação no Município.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cTipo Código do Tipo de Tributação no Município.
 * @pw_element string $cDescricao Descrição do Tipo de Tributação no Município.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Id do Tipo de Tributação no Município.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cIdTrib;
	/**
	 * Código do Tipo de Tributação no Município.
	 *
	 * @var string
	 */
	public string $cTipo;
	/**
	 * Descrição do Tipo de Tributação no Município.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
