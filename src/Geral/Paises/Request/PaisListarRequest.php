<?php

namespace OmieLib\Geral\Paises\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Paises\Lista_paises;
use OmieLib\Geral\Paises\PaisesCadastroJsonClient;
use OmieLib\Geral\Paises\Response\PaisListarResponse;

/**
 * Solicitação de Listagem de Paises.
 *
 * @pw_element string $filtrar_por_codigo Código do País (IBGE).<BR>Preenchimento Opcional.
 * @pw_element string $filtrar_por_descricao Descrição do País.<BR>Preenchimento Opcional.
 * @pw_element string $filtrar_por_codigo_iso Código ISO do País.<BR>Preenchimento Opcional.
 * @pw_complex paisListarRequest
 */
class PaisListarRequest{
	/**
	 * Código do País (IBGE).<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $filtrar_por_codigo;
	/**
	 * Descrição do País.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $filtrar_por_descricao;
	/**
	 * Código ISO do País.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $filtrar_por_codigo_iso;
}
