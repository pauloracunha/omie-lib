<?php

namespace OmieLib\Servicos\Listaservico;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Listaservico\Request\SermListarRequest;
use OmieLib\Servicos\Listaservico\Response\SermListarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element integer $nIdCodServMun Id do Código do Serviço no Município.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodServMun Código do Serviço no Município.
 * @pw_element string $cDescricao Descrição do Código do Serviço no Município.
 * @pw_element string $cDescrCompleta Descrição Completa do Serviço no Município.
 * @pw_element string $cCodServLC116 Código do Serviço da LC116.
 * @pw_element string $cCidade Cidade
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Id do Código do Serviço no Município.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdCodServMun;
	/**
	 * Código do Serviço no Município.
	 *
	 * @var string
	 */
	public string $cCodServMun;
	/**
	 * Descrição do Código do Serviço no Município.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Descrição Completa do Serviço no Município.
	 *
	 * @var string
	 */
	public string $cDescrCompleta;
	/**
	 * Código do Serviço da LC116.
	 *
	 * @var string
	 */
	public string $cCodServLC116;
	/**
	 * Cidade
	 *
	 * @var string
	 */
	public string $cCidade;
}
